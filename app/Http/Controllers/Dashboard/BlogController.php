<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Intervention\Image\ImageManagerStatic as Image;

class BlogController extends Controller
{


    // Make Construct Function To Prevent Not Authorized Users That Not Have Permissions To Access Not Permission Pages
    public function __construct()
    {
        $this->middleware(['permission:blogs_read'])->only('index');
        $this->middleware(['permission:blogs_create'])->only(['create', 'store']);
        $this->middleware(['permission:blogs_update'])->only(['edit', 'update']);
        $this->middleware(['permission:blogs_delete'])->only('destroy');
    } // End of Constructor


    public function index(Request $request)
    {
        $categories = Category::all();

        $blogs = Blog::when($request->search, function ($q) use ($request) {

            return $q->where('title->en', 'like', '%' . $request->search . '%')
                ->orwhere('title->ar', 'like', '%' . $request->search . '%');

        })->when($request->category_id, function ($q) use ($request) {

            return $q->where('category_id', $request->category_id);

        })->latest()->paginate(5);

        return view('dashboard.blogs.index', compact('categories', 'blogs'));
    }  // End of Index


    public function create()
    {
        $categories = Category::all();

        return view('dashboard.blogs.create', compact('categories'));
    }  // End of Create


    public function store(Request $request)
    {
        //dd($request->all());

        //validation on Blog Title if Exist
        if (Blog::where('title->ar', $request->title_ar)->orwhere('title->en', $request->title)->exists()) {

            return redirect()->back()->withErrors(__('message.Exist'));
        } // End Of Validation IF

        // validation For Required Fields
        $request->validate([
            'title' => 'required',
            'title_ar' => 'required',
            'content' => 'required',
            'content_ar' => 'required',
            'category_id' => 'required'

        ]); // End of Validation

        $request_data = $request->all();
        $brief_content = strip_tags($request_data['content']);
        $brief_content_ar = strip_tags($request_data['content_ar']);
        //dd(strlen($brief_content));

        //dd($request_data);

        // Prepare The Request Image Size & Save It
        if ($request->image) {
            Image::make($request->image)->resize(226, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/blogs_img/' . $request->image->hashName()), 80, 'png');

            $request_data['image'] = $request->image->hashName();
        } else {
            $request_data['image'] = 'default.png';
        } // End of IF
        //dd($request_data['image']);

        $blog = new Blog();
        //dd($request_data);
        $blog->title = ['en' => $request_data['title'], 'ar' => $request_data['title_ar']];
        $blog->brief_content = ['en' => substr($brief_content, 0, 5), 'ar' => substr($brief_content_ar, 0, 5)];
        $blog->content = ['en' => $request_data['content'], 'ar' => $request_data['content_ar']];
        $blog->image = $request_data['image'];
        $blog->publish_date = $request_data['publish_date'];
        $blog->top_news = $request_data['top_news'];
        $blog->category_id = $request_data['category_id'];
        $blog->notes = $request_data['notes'];
        $blog->save();


        session()->flash('success', __('site.added_successfully'));

        return redirect()->route('blogs.index');
    }  // End of Store


    public function show(Blog $blog)
    {
        //
    }  // End of Show


    public function edit($id)
    {
        //dd($id);
        $categories = Category::all();
        $blog = Blog::find($id);
        //dd($blog->title);

        return view('dashboard.blogs.edit', compact('categories', 'blog'));

    } // End of Edit


    public function update(Request $request, $id)
    {
        //dd($id);
        $blog = Blog::find($id);
        //dd($blog);

        // validation For Required Fields
        $request->validate([
            'title' => 'required',
            'title_ar' => 'required',
            'content' => 'required',
            'content_ar' => 'required',
            'category_id' => 'required'

        ]); // End of Validation

        $request_data = $request->all();
        $brief_content = $request_data['content'];
        $brief_content_ar = $request_data['content_ar'];


        //dd($request_data);

        // Prepare The Request Image Size & Save It
        if ($request->image) {

            if ($blog->image != 'default.png') { // To Delete The Old Blog Image
                File::delete(public_path('uploads/blogs_img/') . $blog->image);
            } // End of Inner IF

            // To Save The New Blog Image (Update It)
            Image::make($request->image)->resize(226, null, function ($constraint) {
                $constraint->aspectRatio();
            })->save(public_path('uploads/blogs_img/' . $request->image->hashName()), 80, 'png');

            $request_data['image'] = $request->image->hashName();
        } // End of IF
        //dd($request_data['image']);

        $blog->title = ['en' => $request_data['title'], 'ar' => $request_data['title_ar']];
        $blog->brief_content = ['en' => substr($brief_content, 0, 3), 'ar' => substr($brief_content_ar, 0, 3)];
        $blog->content = ['en' => $request_data['content'], 'ar' => $request_data['content_ar']];
        if ($request->image) {
            $blog->image = $request_data['image'];
        };
        $blog->category_id = $request_data['category_id'];
        $blog->notes = $request_data['notes'];
        $blog->publish_date = $request_data['publish_date'];
        $blog->top_news = $request_data['top_news'];
        $blog->update();

        session()->flash('success', __('site.updated_successfully'));

        return redirect()->route('blogs.index');
    } // End of Update


    public function destroy($id)
    {
        //dd($id);
        $blog = Blog::find($id);

        // Delete The Blog Image
        //dd(public_path('uploads/blogs_img/'));
        if ($blog->image != 'default.png') {
            File::delete(public_path('uploads/blogs_img/') . $blog->image);
        }

        $blog->delete();
        session()->flash('success', __('site.deleted_successfully'));

        return redirect()->route('blogs.index');

    }  // End of Destroy


} // End of Controller
