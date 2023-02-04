<?php

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\SubcategoryController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\HomeController as ControllersHomeController;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Monolog\Processor\HostnameProcessor;

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
Route::get('/',[HomeController::class,'index'] )->name('frontend.home');

Auth::routes();

Route::get('/home', [DashboardController::class, 'index'])->name('dashboard');


// category routes

Route::prefix('/category')->name('category.')->group(function(){
Route::get('/add',[CategoryController::class,'addCategory'])->name('add');
Route::post('/store',[CategoryController::class,'storeCategory'])->name('store');
Route::get('/edit/{category:slug}',[CategoryController::class,'editCategory'])->name('edit');
Route::put('/update/{category:slug}',[CategoryController::class,'updateCategory'])->name('update');
Route::delete('/delete/{category:slug}',[CategoryController::class,'deletecategory'])->name('delete');


// sub-category

Route::prefix('/subcategory')->name('sub.')->group(function(){
Route::get('/add',[SubcategoryController::class,'addsubcategory'])->name('add');
Route::post('/store',[SubcategoryController::class,'storesubcategory'])->name('store');




});


});


// post routes
Route::prefix('/posts')->name('post.')->group(function(){
Route::get('/add',[PostController::class,'addpost'])->name('add');
Route::post('/store',[PostController::class,'storepost'])->name('store');



});






