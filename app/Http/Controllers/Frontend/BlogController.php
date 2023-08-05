<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{


    public function index()
    {
        $categories = Category::all();
        $top_news = Blog::where('top_news', 1)
            ->orderBy('publish_date')
            ->take(3)
            ->limit(3)
            ->get();
        //dd($top_news);

        $blogs = Blog::where('top_news', 0)
            ->orderBy('publish_date')
            ->take(8)
            ->limit(8)
            ->get();

        return view('frontend.index', compact('blogs'));
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
