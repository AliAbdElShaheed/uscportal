<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Event;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class EventController extends Controller
{

    // Make Construct Function To Prevent Not Authorized Users That Not Have Permissions To Access Not Permission Pages
    public function __construct()
    {
        $this->middleware(['permission:events_read'])->only('index');
        $this->middleware(['permission:events_create'])->only(['create', 'store']);
        $this->middleware(['permission:events_update'])->only(['edit', 'update']);
        $this->middleware(['permission:events_delete'])->only('destroy');
    } // End of Constructor


    public function index(Request $request)
    {
        $categories = Category::all();

        $events = Event::when($request->search, function ($q) use ($request) {

            return $q->where('title->en', 'like', '%' . $request->search . '%')
                ->orwhere('title->ar', 'like', '%' . $request->search . '%');

        })->when($request->category_id, function ($q) use ($request) {

            return $q->where('category_id', $request->category_id);

        })->latest()->paginate(5);

        return view('dashboard.events.index', compact('categories', 'events'));
    }  // End of Index


    public function create()
    {
        $categories = Category::all();

        return view('dashboard.events.create', compact('categories'));
    }  // End of Create


    public function store(Request $request)
    {
        //dd($request->all());

        //validation on Event Title if Exist
        if (Event::where('title->ar', $request->title_ar)->orwhere('title->en', $request->title)->exists()) {

            return redirect()->back()->withErrors(__('message.Exist'));
        } // End Of Validation IF

        // validation For Required Fields
        $request->validate([
            'title' => 'required',
            'title_ar' => 'required',
            'content' => 'required',
            'content_ar' => 'required',
            'category_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'location' => 'required'
        ]); // End of Validation

        $request_data = $request->all();

        //dd($request_data);

        // Prepare The Request Image Size & Save It
        if ($request->image) {
            Image::make($request->image)->save(public_path('uploads/events_img/' . $request->image->hashName()), 100, 'png');

            $request_data['image'] = $request->image->hashName();
        } else {
            $request_data['image'] = 'default.png';
        } // End of IF
        //dd($request_data['image']);

        $event = new Event();
        //dd($request_data);
        $event->title = ['en' => $request_data['title'], 'ar' => $request_data['title_ar']];
        $event->content = ['en' => $request_data['content'], 'ar' => $request_data['content_ar']];
        $event->image = $request_data['image'];
        $event->start_date = $request_data['start_date'];
        $event->end_date = $request_data['end_date'];
        $event->location = $request_data['location'];
        $event->category_id = $request_data['category_id'];
        $event->notes = $request_data['notes'];
        $event->save();


        session()->flash('success', __('site.added_successfully'));

        return redirect()->route('events.index');
    }  // End of Store


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //dd($id);
        $categories = Category::all();
        $event = Event::find($id);
        //dd($event->title);

        return view('dashboard.events.edit', compact('categories', 'event'));

    } // End of Edit


    public function update(Request $request, $id)
    {
        //dd($id);
        $event = Event::find($id);
        //dd($event);

        // validation For Required Fields
        $request->validate([
            'title' => 'required',
            'title_ar' => 'required',
            'content' => 'required',
            'content_ar' => 'required',
            'category_id' => 'required',
            'start_date' => 'required',
            'end_date' => 'required',
            'location' => 'required'
        ]); // End of Validation

        $request_data = $request->all();

        //dd($request_data);

        // Prepare The Request Image Size & Save It
        if ($request->image) {

            if ($event->image != 'default.png') { // To Delete The Old Event Image
                File::delete(public_path('uploads/events_img/') . $event->image);
            } // End of Inner IF

            // To Save The New event Image (Update It)
            Image::make($request->image)->save(public_path('uploads/events_img/' . $request->image->hashName()), 100, 'png');

            $request_data['image'] = $request->image->hashName();
        } // End of IF
        //dd($request_data['image']);

        $event->title = ['en' => $request_data['title'], 'ar' => $request_data['title_ar']];
        $event->content = ['en' => $request_data['content'], 'ar' => $request_data['content_ar']];
        if ($request->image) {
            $event->image = $request_data['image'];
        };
        $event->start_date = $request_data['start_date'];
        $event->end_date = $request_data['end_date'];
        $event->location = $request_data['location'];
        $event->category_id = $request_data['category_id'];
        $event->notes = $request_data['notes'];
        $event->update();

        session()->flash('success', __('site.updated_successfully'));

        return redirect()->route('events.index');
    } // End of Update


    public function destroy($id)
    {
        //dd($id);
        $event = Event::find($id);

        // Delete The event Image
        //dd(public_path('uploads/events_img/'));
        if ($event->image != 'default.png') {
            File::delete(public_path('uploads/events_img/') . $event->image);
        }

        $event->delete();
        session()->flash('success', __('site.deleted_successfully'));

        return redirect()->route('events.index');

    }  // End of Destroy


} // End of Controller
