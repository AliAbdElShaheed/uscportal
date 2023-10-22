<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\NavigationMenu;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

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
        })->orderBy('priority', 'asc')->paginate(8);

        return view('dashboard.nav_menu.index', compact('navmenus'));
    } // End of Index


    public function create()
    {
        $navmenus = NavigationMenu::all();
        return view('dashboard.nav_menu.create', compact('navmenus'));
    } // End of Create


    public function store(Request $request)
    {
        // dd($request->all());
        //validation on Nav Priority or Name if Exist
        /*if (NavigationMenu::where('name', $request->name)->orwhere('name', $request->name_ar)->orwhere('priority', $request->priority)->exists()) {
            return redirect()->back()->withErrors(__('message.Exist'));
        } // End Of Validation IF*/

        // validation on Required Fields
        $request->validate([
            'name' => 'required|unique:navigation_menus',
            'name_ar' => 'required',
            "priority" => 'required|numeric|min:1|unique:navigation_menus',
        ]); // End of Validation

        $nav_link = new NavigationMenu();
        $nav_link->name = ['en' => $request['name'], 'ar' => $request['name_ar']];
        $nav_link->status = $request->status;
        $nav_link->priority = $request->priority;
        $nav_link->special = $request->special;
        $nav_link->save();

        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('nav-menu.index');
    } // End of Store


    public function show($id)
    {
        //
    } // End of Show


    public function edit($id)
    {
        // dd($id);
        $nav = NavigationMenu::find($id);
        return view('dashboard.nav_menu.edit', compact('nav'));
    } // End of Edit


    public function update(Request $request, $id)
    {
        // dd($id, $request);
        $nav = NavigationMenu::find($id);
        // dd($nav);

        // validation on Required Fields
        $request->validate([
            'name' => [
                'required',
                Rule::unique('navigation_menus')->ignore($id),
            ], // This not Work for my code because of translatable of the name field
            'priority' => [
                'required',
                'numeric',
                'min:1',
                Rule::unique('navigation_menus')->ignore($id),
            ],
        ]); // End of Validation

        // dd('ali');

        $nav->name = ['en' => $request->name, 'ar' => $request->name_ar];
        $nav->status = $request->status;
        $nav->priority = $request->priority;
        $nav->special = $request->special;
        $nav->notes = $request->notes;
        $nav->update();

        session()->flash('success', __('site.updated_successfully'));

        return redirect()->route('nav-menu.index');
    } // End of Update


    public function destroy($id)
    {
        // dd($id);
        $nav = NavigationMenu::find($id);

        $nav->delete();
        session()->flash('success', __('site.deleted_successfully'));

        return redirect()->route('nav-menu.index');
    }  // End of Destroy

} // End of Controller
