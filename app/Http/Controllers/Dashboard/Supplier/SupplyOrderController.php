<?php

namespace App\Http\Controllers\Dashboard\Supplier;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\supplyOrder;
use Illuminate\Http\Request;

class SupplyOrderController extends Controller
{


    // Make Construct Function To Prevent Not Authorized Users That Not Have Permissions To Access Not Permission Pages
    public function __construct()
    {
        $this->middleware(['permission:ٍsupply_orders_read'])->only('index');
        $this->middleware(['permission:supply_orders_create'])->only(['create', 'store']);
        $this->middleware(['permission:supply_orders_update'])->only(['edit', 'update']);
        $this->middleware(['permission:supply_orders_delete'])->only('destroy');
    } // End of Constructor


    public function create($id)
    {
        //return $id;
        $supplier = Supplier::findorfail($id);
        //dd($supplier);
        $categories = Category::with('products')->get();

        return view('dashboard.suppliers.supply_orders.create', compact('supplier', 'categories'));


    } // End of Create


    public function store(Request $request, $id)
    {

        // To Get The Supplier ID (That is in the URL)
        //dd($id);
        //dd($request->all(), $id);

        // Validation The Request
        $request->validate([
            'products' => 'required|array',
        ]);

        $supplier = Supplier::findorfail($id);

        $supply_order = $supplier->supplyOrders()->create([]);
        $supply_order->products()->attach($request->products);

        $total_price = 0;

        // Foreach To Calc Totel Price And Increase The Products Stock With Quantity of The SupplyOrder
        foreach ($request->products as $id => $quantity) {

            //dd($id, $quantity);
            //dd($quantity['quantity']);
            $product = Product::FindOrFail($id);
            $total_price += $product->purchase_price * $quantity['quantity'];

            // To Update The Product Stock After Making The SupplyOrder
            $product->update([
                'stock' => $product->stock + $quantity['quantity'],
            ]);
        } // End of Foreach

        // To Add The SupplyOrder Total Price
        $supply_order->update([
            'total_price' => $total_price,
        ]);


        session()->flash('success', __('site.added_successfully'));

        return redirect()->route('supply_orders.index');
    } // End of Store


    public function edit(supplyOrder $supplyOrder, Supplier $supplier)
    {
        //dd($supplyOrder);
        //dd($supplier);

        $categories = Category::with('products')->get();

        $supply_orders = $supplier->supplyOrders()->with('products')->paginate(5);

        return view('dashboard.suppliers.supply_orders.edit', compact('supplier', 'supplyOrder', 'categories', 'supply_orders'));


    } // End of Edit


    public function update(Request $request, supplyOrder $supplyOrder, supplier $supplier)
    {
        // dd($request->all());

        dd($supplier);
    } // End of Update


} // End of controller
