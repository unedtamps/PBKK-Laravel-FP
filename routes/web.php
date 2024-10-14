<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPictureController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get(
    '/', function () {
        return view('welcome');
    }
);



Route::get(
    "/logout", function () {
        Auth::logout();
        return redirect()->intended('login');
    }
);
Route::get('/product/{product}', [ProductController::class, 'getProduct'])->middleware('user');

Route::post('/register', [UserController::class,'register']);
Route::post('/login', [UserController::class,'login']);
Route::get(
    '/productpics', function () {
        return view('uploadfile');
    }
);
Route::post('/productpics', [ProductPictureController::class, 'upload']);

Route::get(
    "/register", function () {
        return view('register');
    }
);

Route::get(
    "/login", function () {
        return view('login');
    }
);

