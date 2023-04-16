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
Route::get('/datatable', [App\Http\Controllers\DataTableController::class, 'datatabel'])->name('datatabel');
Route::get('/forma', [App\Http\Controllers\FormAController::class, 'forma'])->name('forma');
//Route Untuk User
Route::get('/formu', [App\Http\Controllers\UserListController::class, 'formu'])->name('formu');
Route::get('/userlist', [App\Http\Controllers\UserListController::class, 'userlist'])->name('userlist');
Route::post('insertuser', [App\Http\Controllers\UserListController::class, 'insertuser'])->name('insertuser');
Route::get('/edituser/{id}', [App\Http\Controllers\UserListController::class, 'edituser'])->name('edituser');
Route::post('/updateuser/{id}', [App\Http\Controllers\UserListController::class, 'updateuser'])->name('updateuser');
Route::get('/deleteuser/{id}', [App\Http\Controllers\UserListController::class, 'deleteuser'])->name('deleteuser');
//ROUTE PRINT
Route::get('/viewpdf/{id}', [App\Http\Controllers\PrintPageController::class, 'viewpdf'])->name('viewpdf');
Route::get('/printpdf/{id}', [App\Http\Controllers\PrintPageController::class, 'printpdf'])->name('printpdf');
//Route Hitung User
Route::get('/usercount', [App\Http\Controllers\UserCountController::class, 'usercount'])->name('usercount');
//customer
Route::get('/customer', [App\Http\Controllers\CustomerController::class, 'customer'])->name('customer');
Route::get('/customer/create', [App\Http\Controllers\CustomerController::class, 'create'])->name('create');
Route::post('/customer', 'App\Http\Controllers\CustomerController@input');
Route::get('/customer/delete/{id_customer}', 'App\Http\Controllers\CustomerController@delete');
Route::get('/customer/edit/{id_customer}', 'App\Http\Controllers\CustomerController@edit');
Route::post('/customer/update/{id_customer}', [App\Http\Controllers\CustomerController::class, 'update']);
Route::get('/customer/view/{id_customer}', [App\Http\Controllers\CustomerController::class,'view']);
Route::get('read/{id_customer}', [App\Http\Controllers\CustomerController::class,'read']);
Route::get('/customer/cetak_pdf/{id_customer}', [App\Http\Controllers\CustomerController::class,'cetak_pdf']);