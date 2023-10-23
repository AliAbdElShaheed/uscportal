<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\NavigationMenu;
use App\Models\SubNav;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class SubNavController extends Controller
{


    // Make Construct Function To Prevent Not Authorized Users That Not Have Permissions To Access Not Permission Pages
    public function __construct()
    {
        $this->middleware(['permission:navigations_read'])->only('index');
        $this->middleware(['permission:navigations_create'])->only(['create', 'store']);
        $this->middleware(['permission:navigations_update'])->only(['edit', 'update']);
        $this->middleware(['permission:navigations_delete'])->only('destroy');
    } // End of Constructor


    public function index(Request $request)
    {
        $sub_navs = SubNav::when($request->search, function ($q) use ($request) {
            return $q->where('name->en', 'like', '%' . $request->search . '%')
                ->orwhere('name->ar', 'like', '%' . $request->search . '%');
        })->orderBy('priority', 'asc')->paginate(10);

        return view('dashboard.sub_nav.index', compact('sub_navs'));
    } // End of Index


    public function create()
    {
        $navmenus = NavigationMenu::all();
        $sub_navs = SubNav::all();
        return view('dashboard.sub_nav.create', compact('navmenus', 'sub_navs'));
    } // End of Create


    public function store(Request $request)
    {
        // dd($request->all());
        // validation on Required Fields
        $request->validate([
            'nav_menu_id' => 'required',
            'name' => 'required',
            'name_ar' => 'required',
            "priority" => 'required|numeric|min:1',
            'href' => 'required',
        ]); // End of Validation

        $nav_link = new SubNav();
        $nav_link->nav_menu_id = $request->nav_menu_id;
        $nav_link->name = ['en' => $request['name'], 'ar' => $request['name_ar']];
        $nav_link->status = $request->status;
        $nav_link->priority = $request->priority;
        $nav_link->href = $request->href;
        $nav_link->special = $request->special;
        $nav_link->save();

        session()->flash('success', __('site.added_successfully'));
        return redirect()->route('sub_nav.index');
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
            'nav_menu_id' => 'required',
            'name' => [
                'required',
                Rule::unique('navigation_menus')->ignore($id),
            ], // This not Work for my code because of translatable of the name field
            'priority' => [
                'required',
                'numeric',
                'min:1',
                Rule::unique('navigation_menus')->ignore($id),
                'href' => 'required',
            ],
        ]); // End of Validation

        // dd('ali');

        $nav->name = ['en' => $request->name, 'ar' => $request->name_ar];
        $nav->status = $request->status;
        $nav->priority = $request->priority;
        $nav->href = $request->href;
        $nav->special = $request->special;
        $nav->notes = $request->notes;
        $nav->update();

        session()->flash('success', __('site.updated_successfully'));

        return redirect()->route('nav-menu.index');
    } // End of Update


    public function destroy($id)
    {
        // dd($id);
        $nav = SubNav::find($id);

        $nav->delete();
        session()->flash('success', __('site.deleted_successfully'));

        return redirect()->route('sub_nav.index');
    }  // End of Destroy

} // End of Controller
