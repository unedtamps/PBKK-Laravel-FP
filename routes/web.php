<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPictureController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class,'getProduct']);

Route::prefix('user')->group(
    function () {
        Route::controller(UserController::class)->group(
            function () {
                Route::get('/register', 'viewRegister');
                Route::post('/register', 'register');
                Route::post('/login', 'login');
                Route::get('/login', 'viewLogin');
                Route::post('/logout', 'logout');
            }
        );
    }
);

Route::get('/product/{product}', [ProductController::class, 'getProduct'])->middleware('user');

/* Route::post('/register', [UserController::class, 'register']); */
/* Route::post('/login', [UserController::class, 'login']); */
Route::get(
    '/productpics',
    function () {
        return view('uploadfile');
    }
);
Route::post('/productpics', [ProductPictureController::class, 'upload']);

