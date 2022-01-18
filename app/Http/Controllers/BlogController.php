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
         return redirect()->route('blog.index');
    }
    public function destroy(Blog $id)
    {
        $id->delete();
        return redirect()->back();
    }
    public function show(Blog $blog)
    {
        // dd($blog);
        return view("admin.blog.show",compact("blog"));
    }
    public function edit(Blog $blog)
    {
        return view("admin.blog.edit",compact("blog"));
    }
    public function update(Request $request, Blog $blog)
    {
        // dump($blog);
        // dd($request);
        $blog -> image = $request->image;
        $blog -> titre = $request->titre;
        $blog -> description = $request->description;
        $blog->save();
        return redirect()->back();


    }
    public function affichage()
    {
        $afficheBlog = Blog::all();
        return view("admin.blog.affichage",compact("afficheBlog"));
    }
}
