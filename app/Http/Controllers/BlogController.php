<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
       return view("pages.blog");
    }

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
}
