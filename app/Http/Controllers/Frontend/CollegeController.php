<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollegeController extends Controller
{

    public function index()
    {
        return view('frontend.colleges');
    } // End of Index

    
}  // End of Controller
