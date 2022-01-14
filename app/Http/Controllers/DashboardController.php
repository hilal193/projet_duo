<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Portfolio;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        $afficheBlog = Blog::all();
        $affichePortfolio = Portfolio::all();
        return view('admin.dashboard',compact("afficheBlog","affichePortfolio"));
    }
}
