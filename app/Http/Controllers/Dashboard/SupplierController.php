<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Supplier;
use Illuminate\Http\Request;

class SupplierController extends Controller
{

    // Make Construct Function To Prevent Not Authorized Users That Not Have Permissions To Access Not Permission Pages
    public function __construct()
    {
        $this->middleware(['permission:suppliers_read'])->only('index');
        $this->middleware(['permission:suppliers_create'])->only(['create', 'store']);
        $this->middleware(['permission:suppliers_update'])->only(['edit', 'update']);
        $this->middleware(['permission:suppliers_delete'])->only('destroy');
    } // End of Constructor


    public function index(Request $request)
    {
        $suppliers = Supplier::when($request->search, function ($q) use ($request) {

            return $q->where('name', 'like', '%' . $request->search . '%')
                ->orwhere('phone', 'like', '%' . $request->search . '%')
                ->orwhere('address', 'like', '%' . $request->search . '%');

        })->latest()->paginate(5);

        return view('dashboard.suppliers.index', compact('suppliers'));

    }  // End of Index


    public function create()
    {
        return view('dashboard.suppliers.create');
    } // End of Create


    public function store(Request $request)
    {
        //dd($request->all());       // Check The Request
        // validation The Fields
        $request->validate([
            'name' => 'required',
            'phone' => 'required|array|min:1',
            'phone.0' => 'required',
            //'address' => 'required',
        ]); // End of Validation

        // Make Request Data To Prepare The Phone Array
        $request_data = $request->all();

        // Prepare The Phone Array
        $request_data['phone'] = array_filter($request->phone);
        //dd($request_data);

        Supplier::create($request_data);

        session()->flash('success', __('site.added_successfully'));

        return redirect()->route('suppliers.index');

    }  // End of Store


    public function show(Supplier $supplier)
    {
        //
    }


    public function edit($id)
    {
        //dd($id);
        $supplier = Supplier::findOrFail($id);
        //dd($supplier);

        return view('dashboard.suppliers.edit', compact('supplier'));

    }  // End of Edit


    public function update(Request $request, $id)
    {
        //dd($id);                  // Check The Supplier ID
        //dd($request->all());      // Check The Request

        $supplier = Supplier::findOrFail($id);

        // validation The Fields
        $request->validate([
            'name' => 'required',
            'phone' => 'required|array|min:1',
            'phone.0' => 'required',
            //'address' => 'required',
        ]); // End of Validation

        // Make Request Data To Prepare The Phone Array
        $request_data = $request->all();

        // Prepare The Phone Array
        $request_data['phone'] = array_filter($request->phone);

        $supplier->update($request_data);

        session()->flash('success', __('site.updated_successfully'));

        return redirect()->route('suppliers.index');


    }  //End of Update


    public function destroy($id)
    {
        //dd($id);
        $supplier = Supplier::findOrFail($id);

        $supplier->delete();

        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('suppliers.index');

    }  // End of Destroy


}  // End of Controller
