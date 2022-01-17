<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\PortfolioController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


// Route::get('/', function () {
//     return view('home');
// })->name("home");

// Route::get('/blog', function () {
//     return view('pages/blog');
// })->name('blog');


// Route::get('/contact', function () {
    //     return view('pages/contact');
    // })->name('contact');



    // Route::get('/portfolio', function () {
        //     return view('pages/portfolio');
        // })->name('portfolio');

    Route::get('/', [HomeController::class,"index"])->name('home');
    Route::get('/blog', [BlogController::class,"index"])->name('blog');
    Route::get('/contact', [ContactController::class,"index"])->name('contact');
    Route::get('/portfolio', [PortfolioController::class,"index"])->name('portfolio');

    // admin
    Route::get('/admin/dashboard', [FrontController::class,"dashboard"])->name('dashboard');
    Route::get('/dashboard',[DashboardController::class,"index"])->name(('dashboard'));


    Route::get('/admin/blog', [BlogController::class,"index"])->name('blog.index');
    Route::get('/admin/blog/create', [BlogController::class,"create"])->name('blog.create');
    Route::post('/admin/blog/store', [BlogController::class,"store"])->name('blog.store');


    Route::get('/admin/portfolio', [PortfolioController::class,"index"])->name('portfolio.index');
    Route::get('/admin/portfolio/create', [PortfolioController::class,"create"])->name('portfolio.create');
    Route::post('/admin/portfolio/store', [PortfolioController::class,"store"])->name('portfolio.store');


    // delete
    Route::delete('/blog/{id}/deleteblog', [BlogController::class,"destroy"])->name("blog.destroy");
    Route::delete('/portfolio/{id}/deleteportfolio', [PortfolioController::class,"destroy"])->name("portfolio.destroy");

    //show
    Route::get('/blog/{blog}/showblog', [BlogController::class,"show"])->name("blog.show");
    Route::get('/portfolio/{portfolio}/showportfolio', [PortfolioController::class,"show"])->name("portfolio.show");




