<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\PanelController;
use App\Http\Controllers\Admin\DestinationController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;
use App\Http\Controllers\Admin\PhotoController;
use App\Http\Controllers\Admin\LocationController;
use App\Http\Controllers\Admin\PageController;
use App\Http\Controllers\Admin\ArticleController;
use App\Http\Controllers\Admin\DataContactsController;
use App\Http\Controllers\Admin\SubregionController;



Route::get('/admin',[PanelController::class,'index'])->name('admin.home');
Route ::get('data',[DataContactsController::class,'index'])->name('admin.data');
Route::resource('destinations',DestinationController::class)->names('admin.destinations');
Route::resource('subregions',SubregionController::class)->names('admin.subregions');
Route::resource('countries',CountryController::class)->names('admin.countries');
Route::resource('categories',CategoryController::class)->names('admin.categories');
Route::resource('posts',PostController::class)->names('admin.posts');
Route::get('find',[PostController::class,'find'])->name('find');
Route::post('search',[PostController::class,'search'])->name('search');

Route::resource('photos',PhotoController::class)->names('admin.photos');
Route::resource('locations',LocationController::class)->names('admin.locations');
Route::resource('pages',PageController::class)->names('admin.pages');
Route::resource('articles',ArticleController::class)->names('admin.articles');
Route::get('get-countries',[PostController::class,'getCountries'])->name('getcountries');







