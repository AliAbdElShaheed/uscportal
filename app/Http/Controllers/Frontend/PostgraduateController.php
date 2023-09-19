<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PostgraduateController extends Controller
{

    public function index()
    {
        return view('frontend.postgraduate');
    } // End of Index

} // End of Controller
