<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::view('/alert', 'components.templates.alert');
Route::view('/button', 'components.templates.button');
Route::view('/heading', 'components.templates.heading');
Route::view('/form', 'components.templates.form');
Route::view('/link', 'components.templates.link');
Route::view('/list', 'components.templates.list');
Route::view('/table', 'components.templates.table');
Route::view('/icon', 'components.templates.icon');

// User
Route::get('/user', [UserController::class, 'index'])->name('user.index');
Route::get('/user/create', [UserController::class, 'create'])->name('user.create');

// Customer
Route::get('/customer', [CustomerController::class, 'index'])->name('customer.index');
Route::get('/customer/create', [CustomerController::class, 'create'])->name('customer.create');


/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
|
*/
Route::view('login', 'auth.login');
