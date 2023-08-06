<?php

use App\Http\Controllers\Dashboard\BlogController;
use App\Http\Controllers\Dashboard\CategoryController;
use App\Http\Controllers\Dashboard\Client\OrderController;
use App\Http\Controllers\Dashboard\ClientController;
use App\Http\Controllers\Dashboard\ProductController;
use App\Http\Controllers\Dashboard\Supplier\SupplyOrderController;
use App\Http\Controllers\Dashboard\SupplierController;
use App\Http\Controllers\Dashboard\UserController;
use App\Http\Controllers\Dashboard\WelcomeController;
use Illuminate\Support\Facades\Route;

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
    Route::prefix('dashboard')->middleware(['auth'])->group(function () {


        // Dashboard Route
        Route::get('/', [WelcomeController::class, 'index'])->name('dashboard.index');
        /*Route::get('/', function () {
            return view('dashboard.index');
        })->name('dashboard.index');*/
        /*Route::get('/index', function () {
            return view('dashboard.index');
        })->name('dashboard.index');*/


        // Here Will Be All Routes To UserController
        // User Routes
        //Route::resource('users', UserController::class)->except('show');
        Route::group(['prefix' => 'users', 'namespace' => 'users'], function () {

            Route::get('/add', [UserController::class, 'create'])->name('user.add');
            Route::post('/store', [UserController::class, 'store'])->name('user.store');
            Route::get('/index', [UserController::class, 'index'])->name('users.index');
            Route::get('/', [UserController::class, 'index'])->name('users.index');
            Route::get('/edit/{id}', [UserController::class, 'edit'])->name('user.edit');
            Route::post('/user/update/{id}', [UserController::class, 'update'])->name('user.update');
            Route::get('/user/delete/{id}', [UserController::class, 'destroy'])->name('user.destroy');
        }); // End of Users Routes


        // Here Will Be All Routes To CategoryController
        Route::group(['prefix' => 'categories', 'namespace' => 'categories'], function () {

            Route::get('/add', [CategoryController::class, 'create'])->name('category.add');
            Route::post('/store', [CategoryController::class, 'store'])->name('category.store');
            Route::get('/index', [CategoryController::class, 'index'])->name('categories.index');
            Route::get('/', [CategoryController::class, 'index'])->name('categories.index');
            Route::get('/edit/{id}', [CategoryController::class, 'edit'])->name('category.edit');
            Route::post('/category/update/{id}', [CategoryController::class, 'update'])->name('category.update');
            Route::get('/category/delete/{id}', [CategoryController::class, 'destroy'])->name('category.destroy');
        }); // End of Categories Routes


        // Here Will Be All Routes To BlogController
        Route::group(['prefix' => 'blogs', 'namespace' => 'blogs'], function () {

            Route::get('/add', [BlogController::class, 'create'])->name('blog.add');
            Route::post('/store', [BlogController::class, 'store'])->name('blog.store');
            Route::get('/index', [BlogController::class, 'index'])->name('blogs.index');
            Route::get('/', [BlogController::class, 'index'])->name('blogs.index');
            Route::get('/edit/{id}', [BlogController::class, 'edit'])->name('blog.edit');
            Route::post('/blog/update/{id}', [BlogController::class, 'update'])->name('blog.update');
            Route::get('/blog/delete/{id}', [BlogController::class, 'destroy'])->name('blog.destroy');
        }); // End of Blogs Routes


        // Here Will Be All Routes To EventController
        Route::group(['prefix' => 'events', 'namespace' => 'events'], function () {

            Route::get('/add', [EventController::class, 'create'])->name('event.add');
            Route::post('/store', [EventController::class, 'store'])->name('event.store');
            Route::get('/index', [EventController::class, 'index'])->name('events.index');
            Route::get('/', [EventController::class, 'index'])->name('events.index');
            Route::get('/edit/{id}', [EventController::class, 'edit'])->name('event.edit');
            Route::post('/blog/update/{id}', [EventController::class, 'update'])->name('event.update');
            Route::get('/blog/delete/{id}', [EventController::class, 'destroy'])->name('event.destroy');
        }); // End of Events Routes


    });// End of Dashboard Routes (Url/dashboard/....)


}); //End of All Routes






