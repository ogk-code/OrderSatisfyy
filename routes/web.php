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
Route::get('/email', [\App\Http\Controllers\HomeController::class, 'EmailTest']);
Route::get('/login2', [\App\Http\Controllers\HomeController::class, 'LoginAction']);
Route::get('/logout', [\App\Http\Controllers\HomeController::class, 'logout']);
//Route::get('/register', [\App\Http\Controllers\HomeController::class, 'RegisterAction']);
Route::get('/create-order', [\App\Http\Controllers\HomeController::class, 'CreateOrderAction']);
Route::get('/order-list', [\App\Http\Controllers\HomeController::class, 'OrderListAction']);
Route::get('/user-profile/{id}', [\App\Http\Controllers\HomeController::class, 'UserProfileAction']);
Route::get('/my-orders', [\App\Http\Controllers\HomeController::class, 'MyOrdersAction']);
Route::post('/delete-order', [\App\Http\Controllers\HomeController::class, 'deleteOrder']);
Route::post('/update-order', [\App\Http\Controllers\HomeController::class, 'updateOrderAction']);
Route::post('/edit-order-status', [\App\Http\Controllers\HomeController::class, 'editOrderStatusAction']);
Route::get('/edit-order/{id}', [\App\Http\Controllers\HomeController::class, 'editOrderAction']);
Route::get('/take-order/{id}', [\App\Http\Controllers\HomeController::class, 'TakeOrderAction']);

Route::get('/confirm', [\App\Http\Controllers\HomeController::class, 'ConfirmAction']);
Route::get('/reject', [\App\Http\Controllers\HomeController::class, 'RejectAction']);



Route::get('/FAQ', function () {
    return view('FAQ');
});
Route::get('/contacts', function () {
    return view('contacts');
});
Route::get('/about-us', function () {
    return view('about-us');
});
Route::get('/user-profile', function () {
    return view('user-profile');
});
Route::get('/edit-profile', function () {
    return view('edit-profile');
});
Route::get('/status-change', function () {
    return view('/email/status-change');
});

Route::resource('/order', \App\Http\Controllers\OrdersController::class);
Route::get('/search/{search_data}', [\App\Http\Controllers\ApiController::class, 'search']);

