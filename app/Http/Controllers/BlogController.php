<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Category;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function store (Request $request)
    {
        $request->validate([
                'title'=>'required',
                'description'=>'required',
                'status'=>'required',
                'category_id'=>'required'
            ]);
        $form = new Blog();
        $form->title=$request->title;
        $form->description=$request->description;
        $form->status=$request->status;
        $form->category_id=$request->category_id;
        if($request->hasfile('image'))
        {
            $file=$request->file('image');
            $extention=$file->getClientOriginalExtension();
            $filename=time().'.'.$extention;
            $file->move('uploads/blog_images/',$filename);
            $form->image=$filename;
        }
        $form->save();
        return redirect()->route('blog.table')->with('message','Added successfully');
    }
    public function form()
    {
        $category=Category::all();
        return view('blog.form',compact('category'));
    }
    public function table()
    {
        $form=Blog::with('category')->paginate(10);
        return view('blog.table',compact('form'));
    }
    public function edit($id)
    {
        $category=Category::all();
        $form=Blog::with('category')->find($id);
        return view('blog.edit',compact('form','category'));
        // return redirect()->route('user.index')->with('message','Edit successfully');
    }
    public function update (Request $request,$id)
    {
        $request->validate([
            'title'=>'required',
            'description'=>'required',
            'status'=>'required',
            'category_id'=>'required'
        ]);
        $form=Blog::find($id);
       $form->title=$request->title;
       $form->description=$request->description;
       $form->status=$request->status;
       $form->category_id=$request->category_id;
       if($request->hasfile('image'))
       {
           $file=$request->file('image');
           $extention=$file->getClientOriginalExtension();
           $filename=time().'.'.$extention;
           $file->move('upload/blog_images/',$filename);
           $form->image=$filename;
       }
       $form->update();
       return redirect()->route('blog.table')->with('message','Update successfully');
    }
    public function delete($id)
    {
        $form=Blog::find($id);
        $form->delete();
        return redirect()->route('blog.table')->with('message','Delete successfully');
    }
    public function show($id)
    {
        $blog = Blog::find($id);
        $category = Category::all();
        return view('blog.show',compact('blog','category'));
    }

}
