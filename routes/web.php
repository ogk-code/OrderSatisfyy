<?php

use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/', [\App\Http\Controllers\HomeController::class, 'IndexAction']);
Route::get('/login2', [\App\Http\Controllers\HomeController::class, 'LoginAction']);
Route::get('/logout', [\App\Http\Controllers\HomeController::class, 'logout']);
Route::get('/register', [\App\Http\Controllers\HomeController::class, 'RegisterAction']);
Route::get('/create-order', [\App\Http\Controllers\HomeController::class, 'CreateOrderAction']);
Route::get('/order-list', [\App\Http\Controllers\HomeController::class, 'OrderListAction']);
Route::get('/user-profile/{id}', [\App\Http\Controllers\HomeController::class, 'UserProfileAction']);

Route::get('/FAQ', function () {
    return view('FAQ');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/my-orders', function () {
    return view('my-orders');
});
Route::get('/edit-order', function () {
    return view('edit-order');
});

Route::resource('/order', \App\Http\Controllers\OrdersController::class);

