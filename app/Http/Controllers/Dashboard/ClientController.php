<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Client;
use Illuminate\Http\Request;

class ClientController extends Controller
{

    // Make Construct Function To Prevent Not Authorized Users That Not Have Permissions To Access Not Permission Pages
    public function __construct()
    {
        $this->middleware(['permission:clients_read'])->only('index');
        $this->middleware(['permission:clients_create'])->only(['create', 'store']);
        $this->middleware(['permission:clients_update'])->only(['edit', 'update']);
        $this->middleware(['permission:clients_delete'])->only('destroy');
    } // End of Constructor


    public function index(Request $request)
    {

        $clients = Client::when($request->search, function ($q) use ($request) {

            return $q->where('name', 'like', '%' . $request->search . '%')
                ->orwhere('phone', 'like', '%' . $request->search . '%')
                ->orwhere('address', 'like', '%' . $request->search . '%');

        })->latest()->paginate(5);

        return view('dashboard.clients.index', compact('clients'));

    } // End of Index


    public function create()
    {

        return view('dashboard.clients.create');

    } // End of Create


    public function store(Request $request)
    {
        // validation The Fields
        $request->validate([
            'name' => 'required',
            'phone' => 'required|array|min:1',
            'phone.0' => 'required',
            //'address' => 'required',
        ]); // End of Validation

        $request_data = $request->all();

        // Prepare The Phone Array
        $request_data['phone'] = array_filter($request->phone);
        //dd($request_data);

        Client::create($request_data);

        session()->flash('success', __('site.added_successfully'));

        return redirect()->route('clients.index');

    } // End of Store


    public function show(Client $client)
    {
        //
    }


    public function edit($id)
    {
        //dd($id);
        $client = Client::find($id);
        //dd($client->name);

        return view('dashboard.clients.edit', compact('client'));
    } // End of Edit


    public function update(Request $request, $id)
    {
        //dd($id);
        $client = Client::find($id);
        //dd($client->name);
        // validation The Fields
        $request->validate([
            'name' => 'required',
            'phone' => 'required|array|min:1',
            'phone.0' => 'required',
            //'address' => 'required',
        ]); // End of Validation

        $request_data = $request->all();

        // Prepare The Phone Array
        $request_data['phone'] = array_filter($request->phone);

        $client->update($request_data);

        session()->flash('success', __('site.updated_successfully'));
        return redirect()->route('clients.index');
    } // End of Update


    public function destroy($id)
    {
        //dd($id);
        $client = Client::find($id);
        //dd($client->name);
        $client->delete();

        session()->flash('success', __('site.deleted_successfully'));
        return redirect()->route('clients.index');
    } // End of Destroy


} // End of Controller
