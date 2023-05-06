<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Order;
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

    public function index(Request $request)
    {
        $orders = Order::whereHas('client', function ($q) use ($request) {

            return $q->where('name', 'like', '%' . $request->search . '%');

        })->paginate(5);

        return view('dashboard.orders.index', compact('orders'));

    } // End of Index


    public function show($id)
    {
        // dd($id);

        $order = Order::find($id);
        // dd($order);

        // $products = $order->products()->get();
        // dd($products);

        $products = $order->products;
        return view('dashboard.orders._show', compact('order', 'products'));

    } // End Of Show Products Of An Order


    public function destroy($id)
    {

        // dd($id);
        $order = Order::find($id);
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

        session()->flash('success', __('site.deleted_successfully'));

        return redirect()->route('orders.index');

    } // End of Destroy


} // End of Controller
