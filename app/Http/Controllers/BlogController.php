<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
    //    $blogs = Blog::all();
    //    return view("pages.blog");
    //    return view("pages.blog",compact("blogs"));

    $blogs = Blog::all();
    return view("pages.blog",compact("blogs"));

    }

    // return la page formulaire de blog
    public function create()
    {
        return view("admin.blog.create");
    }
    public function store(Request $request)
    {
        // dd($request);
        //  dd($request);
         $zafar = new Blog();
         $zafar->image = $request->image;
         $zafar->titre = $request->titre;
         $zafar->description = $request->description;
         $zafar->save();
         return redirect()->route('home');
    }
    public function destroy(Blog $id)
    {
        $id->delete();
        return redirect()->back();
    }
}
