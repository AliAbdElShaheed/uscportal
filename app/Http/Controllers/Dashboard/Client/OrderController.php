<?php

namespace App\Http\Controllers\Dashboard\Client;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Client;
use App\Models\Order;
use App\Models\Product;
use GuzzleHttp\Promise\FulfilledPromise;
use Illuminate\Http\Request;

class OrderController extends Controller
{


    // Make Construct Function To Prevent Not Authorized Users That Not Have Permissions To Access Not Permission Pages
    public function __construct()
    {
        $this->middleware(['permission:orders_read'])->only('index');
        $this->middleware(['permission:orders_create'])->only(['create', 'store']);
        $this->middleware(['permission:orders_update'])->only(['edit', 'update']);
        $this->middleware(['permission:orders_delete'])->only('destroy');
    } // End of Constructor


    public function create($id)
    {
        //dd($id);
        $client = Client::find($id);
        //dd($client->name);

        $categories = Category::with('products')->get();

        $orders = $client->orders()->with('products')->paginate(5);

        return view('dashboard.clients.orders.create', compact('client', 'categories', 'orders'));

    } // End of Create


    public function store(Request $request, $id)
    {
        // To Get The Client ID (That is in the URL)
        //dd($id);
        //dd($request->all(), $id);

        // Validation The Request
        $request->validate([
            'products' => 'required|array',
        ]);

        $client = Client::findorfail($id);

        // Use The below Private Function To Store The Order
        $this->attach_order($request, $client);

        session()->flash('success', __('site.added_successfully'));

        return redirect()->route('orders.index');

    } // End of Store


    public function edit(Order $order, Client $client)
    {
        // dd($order);
        // dd($client);

        $categories = Category::with('products')->get();

        $orders = $client->orders()->with('products')->paginate(5);

        return view('dashboard.clients.orders.edit', compact('client', 'order', 'categories', 'orders'));

    } // End of Edit


    public function update(Request $request, Order $order, Client $client)
    {
        // dd($request->all());

        // Validation The Request
        $request->validate([
            'products' => 'required|array',
        ]);

        // Use The below Private Function To delete The Old Values OF The Order To Store The New One
        $this->detach_order($order);
        // dd('done deleting The old Value Of the order');

        // Use The below Private Function To Store The New Values For The Order
        $this->attach_order($request, $client);

        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('orders.index');

    } // End of update


    // Private function Attach Order To Use It In Store And Update Functions
    private function attach_order(Request $request, Client $client)
    {

        $order = $client->orders()->create([]);
        $order->products()->attach($request->products);

        $total_price = 0;

        // Foreach To Cal Totel Price And Decrease The Products Stock With Quantity of Order
        foreach ($request->products as $id => $quantity) {

            //dd($id, $quantity);
            //dd($quantity['quantity']);
            $product = Product::FindOrFail($id);
            $total_price += $product->sale_price * $quantity['quantity'];

            // To Update The Product Stock After Making The Order
            $product->update([
                'stock' => $product->stock - $quantity['quantity'],
            ]);
        } // End of Foreach


        // To Add The Order Transportation Attributes
        $order->update([
            'transportation' => $request->transportation,
            'transportation_number' => $request->transportation_number,
            'delivery_officer' => $request->delivery_officer,
        ]);

        // To Add The Order Total Price
        $order->update([
            'total_price' => $total_price,

        ]);
    } // End Of Attach Order


    // Private function Detach Order -That Delete The Order- To Use It In Update Functions
    private function detach_order(Order $order)
    {
        // dd($order);

        // dd($order->products);
        // dd($order->products->first()->pivot->quantity);

        // Foreach TO Restore The Quantity Of Products Of The Deleted Order To Its Stock Again
        foreach ($order->products as $product) {

            $product->update([
                'stock' => $product->stock + $product->pivot->quantity
            ]);

        } // End of Foreach
        // dd('Quantity Restored');

        $order->delete();

    } // End Of Detach Order


} // End of Controller
