<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ManagementController extends Controller
{

    public function index()
    {
        return view('frontend.management');
    } // End of Index

} // End of Controller
