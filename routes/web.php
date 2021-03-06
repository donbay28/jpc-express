<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;

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

Route::get('/', function () {
    return view('master.dashboard');
});

Route::get('/customer', [CustomerController::class, 'index']);
Route::get('/customer/dt', [CustomerController::class, 'dt']);
Route::get('/customer/create', [CustomerController::class, 'create']);
Route::post('/customer/store', [CustomerController::class, 'store']);
Route::get('customer/edit/{id}', [CustomerController::class, 'edit']);
Route::put('/customer/update/{id}', [CustomerController::class, 'update']);
Route::get('/customer/destroy/{id}', [CustomerController::class, 'destroy']);

