<?php

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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::resource('users', App\Http\Controllers\UserController::class);
Route::resource('departments', App\Http\Controllers\DepartmentController::class);
Route::resource('customers', App\Http\Controllers\CustomerController::class);
Route::resource('accounts', App\Http\Controllers\AccountController::class);
Route::resource('branches', App\Http\Controllers\BranchesController::class);
Route::resource('accountTypes', App\Http\Controllers\AccountTypeController::class);
Route::resource('secondaryAccountHolders', App\Http\Controllers\SecondaryAccountHolderController::class);
Route::resource('currency', App\Http\Controllers\CurrencyController::class);
Route::resource('transactionTypes', App\Http\Controllers\TransactionTypeController::class);
Route::resource('transactions', App\Http\Controllers\TransactionController::class);
