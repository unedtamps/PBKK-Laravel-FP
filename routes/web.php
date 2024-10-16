<?php

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
                Route::get('/register', 'viewRegister');
                Route::post('/register', 'register');
                Route::post('/login', 'login');
                Route::get('/login', 'viewLogin');
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

/* Route::get('/product/{product}', [ProductController::class, 'getProduct'])->middleware('user'); */

/* Route::post('/register', [UserController::class, 'register']); */
/* Route::post('/login', [UserController::class, 'login']); */
Route::get(
    '/productpics',
    function () {
        return view('uploadfile');
    }
);


Route::post('/productpics', [ProductPictureController::class, 'upload']);
// Route::post('/checkout', [TransactionController::class, 'addCart']);
Route::post('/checkout/{id}', [TransactionController::class, 'addCart']);
