<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function store (Request $request)
    {
        $request->validate([
            'name'=>'required',
            'status'=>'required'
        ]);
        $category = new Category();
        $category->name=$request->name;
        $category->status=$request->status;
        $category->save();
        return redirect()->route('category.index')->with('message','Added successfully');

    }
    public function index()
    {
        $category=Category::paginate(10);
        return view('category.index',compact('category'));
    }
    public function edit($id)
    {
        $category=Category::find($id);
        return view('category.edit',compact('category'));
        // return redirect()->route('user.index')->with('message','Edit successfully');
    }
    public function update (Request $request,$id)
    {
        $request->validate([
            'name'=>'required',
            'status'=>'required'
        ]);
        $category=Category::find($id);
       $category->name=$request->name;
       $category->status=$request->status;
       $category->update();
       return redirect()->route('category.index')->with('message','Update successfully');
    }
    public function delete($id)
    {
        $category=Category::find($id);
        $category->delete();
        return redirect()->route('category.index')->with('message','Delete successfully');
    }
}
