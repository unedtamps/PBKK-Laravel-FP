<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ProductPictureController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get(
    '/', function () {
        return view('product');
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


Route::prefix('admin')->group(
    function () {
        Route::controller(AdminController::class)->group(
            function () {
                Route::get('/transactions', 'admin_transaction');
                Route::post('/transaction/confirm/{transaction}', 'confirm');
                Route::post('/transaction/cancel/{transaction}', 'cancel');
                Route::get('/products', 'product');
                Route::get('/users', 'users');
                Route::post('/createproduct', 'createProduct');
                Route::post('/editproduct/{product}', 'editProduct');
                Route::post('/deleteproduct/{product}', 'deleteProduct');
                Route::post('/user/makeadmin/{user}', 'makeAdmin');
                Route::post('/user/delete/{user}', 'deleteUser');
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

