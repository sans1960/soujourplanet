<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FrontController;
use App\Http\Controllers\PageArticleController;
use App\Http\Controllers\RssFeedController;
use App\Http\Controllers\ContactController;
use Illuminate\Support\Facades\Auth;

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

Route::get('/', [FrontController::class,'index'])->name('index');
Route::get('destination/{destination}',[FrontController::class,'postsdestination'])->name('posts.destination');
Route::get('destination/{destination}/category/{category}',[FrontController::class,'postsDestCat'])->name('posts.destcat');
Route::get('post/{post}',[FrontController::class,'viewpost'])->name('posts.post');
Route::get('country/{country}',[FrontController::class,'postscountries'])->name('posts.countries');
Route::get('category/{category}',[FrontController::class,'postscategory'])->name('posts.categories');
Route::get('country/{country}/category/{category}',[FrontController::class,'postscountcat'])->name('posts.countcat');
Route::get('blog',[PageArticleController::class,'index'])->name('blog');
Route::get('blog/{blog}',[PageArticleController::class,'pageArticles'])->name('blog.articles');
Route::get('/contact/{slug}/subregion/{subregion}',[ContactController::class,'viewForm'])->name('contact');
Route::post('sendform',[ContactController::class,'sendForm'])->name('sendform');
Route::get('/feed/europe', [RssFeedController::class,'rssEurope'])->name('feed.europe');
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->middleware('auth')->name('home');
