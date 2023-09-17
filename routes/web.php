<?php

use App\Http\Controllers\Frontend\AboutController;
use App\Http\Controllers\Frontend\BlogController;
use Illuminate\Support\Facades\Route;
use Mcamara\LaravelLocalization\Facades\LaravelLocalization;

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


Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'middleware' => ['localeSessionRedirect', 'localizationRedirect', 'localeViewPath']
    ], function () {
    /** ADD ALL LOCALIZED ROUTES INSIDE THIS GROUP **/
    // Landing Page Route
    Route::get('/', [BlogController::class, 'index'])->name('front.index');
    Route::get('/index', [BlogController::class, 'index'])->name('front.index');
    Route::get('/top-new/{id}', [BlogController::class, 'show_top_new'])->name('top_new.show');
    Route::get('/blog/{id}', [BlogController::class, 'show_blog'])->name('blog.show');
    Route::get('/blogs', [BlogController::class, 'blogs'])->name('all_blogs.index');

    // About Page Route
    Route::get('/about', [AboutController::class, 'index'])->name('front.about');


    Route::get('/management', function () {
        return view('management');
    });

    // Colleges Page Route
    Route::get('/colleges', function () {
        return view('colleges');
    });

}); //End of All Routes


Auth::routes(['register' => false]);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

