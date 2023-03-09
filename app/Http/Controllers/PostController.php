<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class PostController extends Controller
{
    public function index()
    {
        $categories = DB::table('posts')->get();
        return view('dashboard', ['categories' => $categories]);
    }
}
