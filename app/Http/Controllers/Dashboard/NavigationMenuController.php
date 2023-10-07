<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\NavigationMenu;
use Illuminate\Http\Request;

class NavigationMenuController extends Controller
{


    // Make Construct Function To Prevent Not Authorized Users That Not Have Permissions To Access Not Permission Pages
    public function __construct()
    {
        $this->middleware(['permission:navigationMenu_read'])->only('index');
        $this->middleware(['permission:navigationMenu_create'])->only(['create', 'store']);
        $this->middleware(['permission:navigationMenu_update'])->only(['edit', 'update']);
        $this->middleware(['permission:navigationMenu_delete'])->only('destroy');
    } // End of Constructor


    public function index(Request $request)
    {

        $navmenus = NavigationMenu::when($request->search, function ($q) use ($request) {
            return $q->where('name->en', 'like', '%' . $request->search . '%')
                ->orwhere('name->ar', 'like', '%' . $request->search . '%');
        })->latest()->paginate(10);

        return view('dashboard.nav_menu.index', compact('navmenus'));
    } // End of Index


    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }

} // End of Controller
