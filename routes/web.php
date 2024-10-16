<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPictureController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/product/{id}', [ProductController::class, 'getProduct']);
Route::get(
    '/',
    function () {
        return view('home');
    }
);


Route::prefix('user')->group(
    function () {
        Route::controller(UserController::class)->group(
            function () {
                Route::get('/register', 'viewRegister')->middleware('guest');
                Route::post('/register', 'register')->middleware('guest');
                Route::post('/login', 'login')->middleware('guest');
                Route::get('/login', 'viewLogin')->middleware('guest');
                Route::post('/logout', 'logout')->middleware('user');
            }
        );
    }
);

Route::prefix('products')->group(
    function () {
        Route::controller(ProductController::class)->group(
            function () {
                Route::get('/', 'viewProducts');
            }
        );
    }
);



Route::prefix('admin')->group(
    function () {
        Route::controller(AdminController::class)->group(
            function () {
                Route::get('/transactions', 'admin_transaction')->middleware('admin');
                Route::post('/transaction/confirm/{transaction}', 'confirm')->middleware('admin');
                Route::post('/transaction/cancel/{transaction}', 'cancel')->middleware('admin');
                Route::get('/products', 'product')->middleware('admin');
                Route::get('/users', 'users')->middleware('admin');
                Route::post('/createproduct', 'createProduct')->middleware('admin');
                Route::post('/editproduct/{product}', 'editProduct')->middleware('admin');
                Route::post('/deleteproduct/{product}', 'deleteProduct')->middleware('admin');
                Route::post('/user/makeadmin/{user}', 'makeAdmin')->middleware('admin');
                Route::post('/user/delete/{user}', 'deleteUser')->middleware('admin');
            }
        );
    }
);

/* Route::get('/product/{product}', [ProductController::class, 'getProduct'])->middleware('user'); */

/* Route::post('/register', [UserController::class, 'register']); */
/* Route::post('/login', [UserController::class, 'login']); */
Route::get('/transaction', [TransactionController::class, 'getTransaction'])->middleware('user');
// Route::post('/checkout', [TransactionController::class, 'addCart']);
Route::post('/checkout/{id}', [TransactionController::class, 'addCart'])->middleware('user');
Route::post('/transaction/{product}', [TransactionController::class, 'store'])->middleware('user');
