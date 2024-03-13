<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::post('/register',[UserController::class,'register']);
Route::post('/login',[UserController::class,'login'])->name('user.login');
Route::get('/logout',[UserController::class,'logout'])->middleware('auth:sanctum')->name('user.logout');
Route::get('/user-login',[UserController::class,'user_login'])->name('login');
Route::get('/user-register',[UserController::class,'user_register'])->name('user_register');

Route::get('/profile',[UserController::class,'profile'])->middleware('auth:sanctum');


Route::group(['prefix' => 'admin'], function () {
    Route::get('/dashboard', [UserController::class, 'index']);
    Route::get('users/{id}', [UserController::class, 'show']);
    Route::post('users', [UserController::class, 'store']);
    Route::put('users/{id}', [UserController::class, 'update']);
    Route::delete('users/{id}', [UserController::class, 'destroy']);
});

Route::group(['prefix' =>'company'], function (){
    Route::get('', [CompanyController::class, 'index2']);
    Route::get('/{id}', [CompanyController::class, 'show']);
    Route::post('store', [CompanyController::class, 'store']);
    Route::put('update/{id}', [CompanyController::class, 'update']);
    Route::delete('destroy/{id}', [CompanyController::class, 'destroy']);
});

Route::group(['prefix'=>'profile'], function (){
    Route::get('', [ProfileController::class, 'index']);
    Route::get('/{id}', [ProfileController::class, 'show']);
    Route::post('store', [ProfileController::class, 'store']);
    Route::put('update/{id}', [UserController::class, 'update']);
    Route::delete('destroy/{id}', [UserController::class, 'destroy']);
});


//page routes

Route::group(['prefix'=>'/'], function (){
    Route::get('', [PageController::class, 'HomePage'])->name('home');
    Route::get('/about', [PageController::class, 'AboutPage'])->name('about');
    Route::get('/contact', [PageController::class, 'ContactPage'])->name('contact');
    Route::get('/job-list', [PageController::class, 'JobListPage'])->name('job-list');
    Route::get('/job-details', [PageController::class, 'JobDetailsPage'])->name('job-details');
    Route::get('/category', [PageController::class, 'CategoryPage'])->name('category');
    Route::get('/testimonials', [PageController::class, 'TestimonialPage'])->name('testimonial');
});