<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $total_user = User::all()->count();
        $total_blog = Blog::all()->count();
        $total_category = Category::all()->count();
        $users = User::all();
        $blogs = Blog::all();
        $categories = Category::all();

        return view('dashboard',compact('total_user','total_blog','total_category','users',));

    }
}
