<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPictureController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TransactionController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get(
    '/',
    function () {
        return view('home');
    }
);
Route::get('/product/{id}', [ProductController::class, 'getProduct']);
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
Route::get(
    '/productpics',
    function () {
        return view('uploadfile');
    }
);
Route::get('/transaction', [TransactionController::class, 'getTransaction']);
Route::post('/transaction', [TransactionController::class, 'store']);
Route::post('/productpics', [ProductPictureController::class, 'upload']);
Route::post('/checkout/{id}', [TransactionController::class, 'addCart']);
Route::get('/products', [ProductController::class, 'viewProducts']);
