<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
        public function index()
        {
           return view("pages.portfolio");
        }
        public function create()
        {
            return view("admin.portfolio.create");
        }
        public function store(Request $request)
        {
            // dd($request);
            $hilal = new Portfolio();
            $hilal->titre = $request->titre;
            $hilal->description = $request->description;
            $hilal->save();
            return redirect()->route('home');


        }
}
