<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\SupplyOrder;
use Illuminate\Http\Request;

class SupplyOrderController extends Controller
{

    // Make Construct Function To Prevent Not Authorized Users That Not Have Permissions To Access Not Permission Pages
    public function __construct()
    {

        $this->middleware(['permission:supply_orders_read'])->only('index');
        $this->middleware(['permission:supply_orders_create'])->only(['create', 'store']);
        $this->middleware(['permission:supply_orders_update'])->only(['edit', 'update']);
        $this->middleware(['permission:supply_orders_delete'])->only('destroy');
    } // End of Constructor


    public function index(Request $request)
    {
        $supply_orders = SupplyOrder::whereHas('supplier', function ($q) use ($request) {

            return $q->where('name', 'like', '%' . $request->search . '%');

        })->paginate(5);


        return view('dashboard.supply_orders.index', compact('supply_orders'));

    } // End of Index


    public function show($id)
    {
        //dd($id);

        $supply_order = SupplyOrder::find($id);
        // dd($supply_order);

        // $products = $supply_order->products()->get();
        // dd($products);

        $products = $supply_order->products;
        return view('dashboard.supply_orders._show', compact('supply_order', 'products'));

    } // End Of Show Products Of An Order


    public function destroy($id)
    {
        // dd($id);
        $supply_order = SupplyOrder::FindOrFail($id);
        // dd($supply_order);

        // dd($supply_order->products);
        // dd($supply_order->products->first()->pivot->quantity);

        // Foreach TO Restore The Quantity Of Products Of The Deleted Supply Order To Its Stock Again
        foreach ($supply_order->products as $product) {

            $product->update([

                'stock' => $product->stock - $product->pivot->quantity
            ]);
        } // End of Foreach
        // dd('Quantity Restored');

        $supply_order->delete();

        session()->flash('success', __('site.deleted_successfully'));

        return redirect()->route('supply_orders.index');

    } // End of Destroy

} //  End of Controller
