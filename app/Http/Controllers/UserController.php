<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function index()
    {
//        $allUsers = DB::table('users')->get();
//        return view('dashboard', ['allusers' => $allUsers]);
        return view('dashboard', User::with('getUsersPost')->get());
    }
}
