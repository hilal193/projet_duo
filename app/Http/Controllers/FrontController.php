<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
      return view('home');
    }
    public function blog()
    {
        // $blogs = Blog::all();
    //    return view('pages.blog',compact('blogs'));
       return view('pages.blog');
    }
    public function portfolio()
    {
    //    $portfolios = Portfolio::all();
    //    return view('pages.portfolio',compact('portfolios'));
       return view('pages.portfolio');
    }
    public function dashboard()
    {
       return view('admin.dashboard');
    }
}
