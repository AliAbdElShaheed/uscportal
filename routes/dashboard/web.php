<?php

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


        // Here Will Be All Routes To ProductController
        Route::group(['prefix' => 'products', 'namespace' => 'products'], function () {

            Route::get('/add', [ProductController::class, 'create'])->name('product.add');
            Route::post('/store', [ProductController::class, 'store'])->name('product.store');
            Route::get('/index', [ProductController::class, 'index'])->name('products.index');
            Route::get('/', [ProductController::class, 'index'])->name('products.index');
            Route::get('/edit/{id}', [ProductController::class, 'edit'])->name('product.edit');
            Route::post('/product/update/{id}', [ProductController::class, 'update'])->name('product.update');
            Route::get('/product/delete/{id}', [ProductController::class, 'destroy'])->name('product.destroy');
        }); // End of Products Routes


        // Here Will Be All Routes To ClientController And Its Orders
        Route::group(['prefix' => 'clients', 'namespace' => 'clients'], function () {

            Route::get('/add', [ClientController::class, 'create'])->name('client.add');
            Route::post('/store', [ClientController::class, 'store'])->name('client.store');
            Route::get('/index', [ClientController::class, 'index'])->name('clients.index');
            Route::get('/', [ClientController::class, 'index'])->name('clients.index');
            Route::get('/edit/{id}', [ClientController::class, 'edit'])->name('client.edit');
            Route::post('/update/{id}', [ClientController::class, 'update'])->name('client.update');
            Route::get('/delete/{id}', [ClientController::class, 'destroy'])->name('client.destroy');

            // Here Will Be Routes To Add, store, Edit & Update Orders Assigned To A Client
            Route::group(['prefix' => 'orders', 'namespace' => 'orders'], function () {

                Route::get('/add/{id}', [OrderController::class, 'create'])->name('order.add');
                Route::post('/store/{id}', [OrderController::class, 'store'])->name('order.store');
                Route::get('/edit/{order}{client}', [OrderController::class, 'edit'])->name('order.edit');
                Route::post('/update/{order}{client}', [OrderController::class, 'update'])->name('order.update');
            }); // End of Client's Orders Routes

        }); // End of Client Routes


        // Here Will Be All Routes To OrderController
        Route::group(['prefix' => 'orders', 'namespace' => 'orders'], function () {

            Route::get('/index', [App\Http\Controllers\Dashboard\OrderController::class, 'index'])->name('orders.index');
            Route::get('/', [App\Http\Controllers\Dashboard\OrderController::class, 'index'])->name('orders.index');
            Route::get('/order/{id}', [App\Http\Controllers\Dashboard\OrderController::class, 'show'])->name('order.show');
            Route::get('/delete/{id}', [App\Http\Controllers\Dashboard\OrderController::class, 'destroy'])->name('order.destroy');

        }); // End of Orders Routes


        // Here Will Be All Routes To SupplierController And Its Supply Orders
        Route::group(['prefix' => 'suppliers', 'namespace' => 'suppliers'], function () {

            Route::get('/add', [SupplierController::class, 'create'])->name('supplier.add');
            Route::post('/store', [SupplierController::class, 'store'])->name('supplier.store');
            Route::get('/index', [SupplierController::class, 'index'])->name('suppliers.index');
            Route::get('/', [SupplierController::class, 'index'])->name('supplier.index');
            Route::get('/edit/{id}', [SupplierController::class, 'edit'])->name('supplier.edit');
            Route::post('/update/{id}', [SupplierController::class, 'update'])->name('supplier.update');
            Route::get('/delete/{id}', [SupplierController::class, 'destroy'])->name('supplier.destroy');

            // Here Will Be Routes To Add, store, Edit & Update Supply Orders Assigned To A Supplier
            Route::group(['prefix' => 'supply-orders', 'namespace' => 'supply-orders'], function () {

                Route::get('/add/{id}', [SupplyOrderController::class, 'create'])->name('supply_order.add');
                Route::post('/store/{id}', [SupplyOrderController::class, 'store'])->name('supply_order.store');
                Route::get('/edit/{supply_order}{supplier}', [SupplyOrderController::class, 'edit'])->name('supply_order.edit');
                Route::post('/update/{supply_order}{supplier}', [SupplyOrderController::class, 'update'])->name('supply_order.update');
            }); // End of Client's Orders Routes

        }); // End of Supplier Routes


        // Here Will Be All Routes To SupplyOrderController
        Route::group(['prefix' => 'supply-orders', 'namespace' => 'supply-orders'], function () {

            Route::get('/index', [App\Http\Controllers\Dashboard\SupplyOrderController::class, 'index'])->name('supply_orders.index');
            Route::get('/', [App\Http\Controllers\Dashboard\SupplyOrderController::class, 'index'])->name('supply_orders.index');
            Route::get('/supply_order/{id}', [App\Http\Controllers\Dashboard\SupplyOrderController::class, 'show'])->name('supply_order.show');
            Route::get('/delete/{id}', [App\Http\Controllers\Dashboard\SupplyOrderController::class, 'destroy'])->name('supply_order.destroy');

        }); // End of Orders Routes


    });// End of Dashboard Routes (Url/dashboard/....)


}); //End of All Routes






