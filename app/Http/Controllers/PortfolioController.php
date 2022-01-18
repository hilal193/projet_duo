<?php

namespace App\Http\Controllers;

use App\Models\Portfolio;
use Blog;
use Illuminate\Http\Request;

class PortfolioController extends Controller
{
        public function index()
        {
           $portfolios = Portfolio::all();
           return view("pages.portfolio",compact('portfolios'));
        }

        // return la page formulaire de portfolio
        public function create()
        {
            return view("admin.portfolio.create");
        }
        public function store(Request $request)
        {
            // dd($request);
            $portfolio = new Portfolio();
            $portfolio->titre = $request->titre;
            $portfolio->image = $request->image;
            $portfolio->description = $request->description;
            $portfolio->save();
            return redirect()->route('portfolio.index');
        }
        public function destroy(Portfolio $id)
        {
            $id->delete();
            return redirect()->back();
        }
        public function show(Portfolio $portfolio)
        {
            return view("admin.portfolio.show",compact("portfolio"));
            // dd($portfolio);
        }
        public function edit(Portfolio $portfolio)
        {
            return view("admin.portfolio.edit",compact("portfolio"));
        }
        public function update(Portfolio $portfolio, Request $request)
        {
            // dump($portfolio);
            // dd($request);
            $portfolio -> titre = $request->titre;
            $portfolio -> image = $request->image;
            $portfolio -> description = $request->description;
            $portfolio -> save();
            return redirect()->back();
        }
        public function affichage()
        {
            $affichePortfolio = Portfolio::all();
            return view("admin.portfolio.affichage",compact("affichePortfolio"));
        }
}
