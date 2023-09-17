<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use App\Models\Event;
use Carbon\Carbon;
use Illuminate\Http\Request;

class BlogController extends Controller
{


    public function index()
    {
        $categories = Category::all();
        $top_news = Blog::where('top_news', 1)
            ->orderBy('publish_date', 'desc')
            ->take(6)
            ->limit(6)
            ->get();
        //dd($top_news);

        $blogs = Blog::where('top_news', 0)
            ->orderBy('publish_date', 'desc')
            ->take(8)
            ->limit(8)
            ->get();


        $events = Event::where('start_date', '<', now())
            ->orderBy('start_date')
            ->take(8)
            ->limit(8)
            ->get();
        //dd($events);

        /*$formattedDate = Carbon::createFromFormat('Y-m-d', $dateString)
            ->format('M d, Y at h:i A');

        echo $formattedDate;*/


        $upcoming_events = Event::where('start_date', '>', now())
            ->orderBy('start_date')
            ->take(1)
            ->limit(1)
            ->get();

        return view('frontend.index', compact('top_news', 'blogs', 'events', 'upcoming_events'));
    } // End of Index


    public function show_top_new($id)
    {
        // dd($id);
        $categories = Category::all();
        $top_new = Blog::find($id);
        // dd($top_new->title);
        return view('frontend.show_top_new', compact('categories', 'top_new'));
    } // End of Show Top New


    public function show_blog($id)
    {
        $categories = Category::all();
        $blog = Blog::find($id);
        return view('frontend.show_blog', compact('categories', 'blog'));
    } // End of Show Blog


    public function blogs()
    {
        $categories = Category::all();
        $blogs = Blog::orderBy('publish_date', 'desc')
            ->get();

        // dd($top_new->title);
        return view('frontend.blogs', compact('categories', 'blogs'));
    } // End of Blogs


    public function store(Request $request)
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
