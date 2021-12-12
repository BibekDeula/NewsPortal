<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TagController;

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

// Category
Route::resource('category',CategoryController::class);

//Role
Route::resource('role',RoleController::class);

//users
Route::resource('users', UserController::class);
Route::get('users',[UserController::class,'index']);
Route::get('users/edit/{id}',[UserController::class,'edit']);
Route::put('/users/update',[UserController::class,'update'])->name('user.update');
Route::put('/users/show',[UserController::class,'show'])->name('user.show');

//Tags
Route::get('tags',[TagController::class,'index']);
Route::get('create',[TagController::class,'create'])->name('tags.create');       
Route::post('store',[TagController::class,'store']);
Route::get('tags/{id}',[TagController::class,'show']);
Route::get('tags/{id}/edit',[TagController::class,'edit']);    
Route::put('tags/update',[TagController::class,'update'])->name('tags.update');   
