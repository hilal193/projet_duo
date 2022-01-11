<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\ContactController;
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
    Route::get('/admin/blog', [BlogController::class,"index"])->name('blog.index');
    Route::get('/admin/portfolio', [BlogController::class,"index"])->name('portfolio.index');



    Route::get('/admin/blog/create', [BlogController::class,"create"])->name('blog.create');
    Route::get('/admin/blog/portfolio', [PortfolioController::class,"create"])->name('portfolio.create');

    Route::post('/admin/blog/create', [BlogController::class,"store"])->name('blog.store');
    Route::post('/admin/blog/portfolio', [PortfolioController::class,"store"])->name('portfolio.store');







