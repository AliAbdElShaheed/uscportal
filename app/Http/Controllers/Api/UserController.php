<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{

    // Function to Get All Users Data
    public function index()
    {
        $users = User::all();
        // return $users;
        return response()->json(['data' => $users, 'error' => ''], 200);

    } // end Of index


} // end of Controller
