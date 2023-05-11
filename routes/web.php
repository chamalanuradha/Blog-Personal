<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\WelcomeController;
use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', [WelcomeController::class, 'index'])->name('welcome');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// //post

// Route::get('/posts/{postId}/show',[PostController::class, 'show'])->name('posts.show');
// Route::group (['middleware' => 'auth'], function(){
//     Route::post('/posts/store',[PostController::class, 'store'])->name('posts.store');
//     Route::get('/posts/all',[HomeController::class, 'allPosts'])->name('posts.all');
//     Route::get('/posts/{postId}/edit',[PostController::class, 'edit'])->name('posts.edit');
//     Route::post('/posts/{postId}/update',[PostController::class, 'update'])->name('posts.update');
//     Route::get('/posts/{postId}/delete',[PostController::class, 'delete'])->name('posts.delete');
// });
// Route::group(['middleware' => 'admin'], function(){
//     Route::get('/admin/dashboard',[DashboardController::class, 'index'])->name('admin.dashboard')->middleware('admin');
// });
