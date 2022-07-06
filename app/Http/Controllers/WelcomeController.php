<?php

namespace App\Http\Controllers;
use App\Models\Category;
use App\Models\Blog;
use Illuminate\Http\Request;

class WelcomeController extends Controller
{
    public function index()
    {
        $categories = Category::all();
        $blogs = Blog::paginate(4);
        $featured_blogs = Blog::paginate(1);
        $status_blogs = Blog::all();
        $status_categories = Category::all();
        return view('welcome',compact('categories','blogs','featured_blogs','status_blogs','status_categories'));

    }
}
