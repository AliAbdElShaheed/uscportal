<?php

namespace App\Http\Controllers\Dashboard;


use App\Models\Blog;
use App\Models\Category;
use App\Models\Client;
use App\Models\Event;
use App\Models\Product;
use App\Models\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;

class WelcomeController extends Controller
{
    public function index()
    {
        $categories_count = Category::count();
        $top_news_count = Blog::where('top_news', 1)->count();
        $blogs_count = Blog::where('top_news', 0)->count();
        $events_count = Event::count();
        // $users_count = User::whereRoleIs(['admin', 'user'])->count();

        /*        $sales_data = Order::select(
                    DB::raw('YEAR(created_at) as year'),
                    DB::raw('MONTH(created_at) as month'),
                    DB::raw('SUM(total_price) as sum')
                )->groupBy('month')->get();*/

        // dd($sales_data);

        return view('dashboard.index', compact('categories_count', 'top_news_count', 'blogs_count', 'events_count'));

    }//end of index

}//end of controller
