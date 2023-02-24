<?php

use App\Http\Controllers\backend\CategoryController;
use App\Http\Controllers\backend\DashboardController;
use App\Http\Controllers\backend\PostController;
use App\Http\Controllers\backend\SubcategoryController;
use App\Http\Controllers\frontend\HomeController;
use App\Http\Controllers\HomeController as ControllersHomeController;
use App\Http\Controllers\SocialLoginController;
use App\Models\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Monolog\Processor\HostnameProcessor;

Route::get('/',[HomeController::class,'index'] )->name('frontend.home');

Route::get('/category/{category:slug}',[HomeController::class,'showcategorypost'])->name('frontend.category');
Route::get('/subcategory/{subcategory:slug}',[HomeController::class,'showsubcategorypost'])->name('frontend.subcategory');

Route::get('/post/{slug}',[HomeController::class,'showpost'])->name('frontend.showpost');
Route::get('/search',[HomeController::class,'searchpost'])->name('frontend.searchpost');

Route::get('/google/login',[SocialLoginController::class,'googlelogin'])->name('google.login');
Route::get('/google/redirect',[SocialLoginController::class,'googleredirect'])->name('google.redirect');