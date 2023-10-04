<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Middleware\Authenticate as Middleware;

use App\Http\Controllers\TemplateController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Teamcontroller;
use App\Http\Controllers\FeaturesController;
use App\Http\Controllers\Auth\DashboardController;
use App\Http\Controllers\Auth\WebsiteController;
use App\Http\Controllers\Auth\PostController;


Route::get('/',[App\Http\Controllers\WebsiteController::class, 'index'])->name('index');
Route::get('/',[App\Http\Controllers\AboutusController::class , 'showAboutUs'])->name('showAboutUs');
// Route::get('pages/ourservices',[App\Http\Controllers\servicesController::class , 'services'])->name('services');
// Route::get('pages/latestnews',[App\Http\Controllers\newsController::class , 'news'])->name('news');
// Route::get('pages/features',[App\Http\Controllers\featuresController::class , 'features'])->name('features');
Route::get('auth/posts/teams', [App\Http\Controllers\Teamcontroller::class, 'index'])->name('teams.index');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('auth/home', [App\Http\Controllers\Auth\DashboardController::class, 'dashboard'])->name('auth.home')->middleware('auth');
Route::get('auth/posts/featuresform', [App\Http\Controllers\FeaturesController::class, 'index'])->name('index');
Route::get('auth/posts/servicesform', [App\Http\Controllers\ServicesController::class, 'services'])->name('services');
Route::get('auth/posts/create', [App\Http\Controllers\AboutusFormController::class, 'aboutusform'])->name('aboutusform');

Route::get('auth/posts/news', [App\Http\Controllers\NewsController::class, 'news'])->name('news');

// post methods
Route::post('auth/posts/create', [App\Http\Controllers\AboutusFormController::class, 'storedata'])->name('storedata');
Route::post('auth/posts/featuresform', [App\Http\Controllers\FeaturesController::class, 'store'])->name('store');
Route::post('auth/posts/servicesform',[App\Http\Controllers\ServicesController::class, 'store'])->name('store');
Route::post('auth/posts/news',[App\Http\Controllers\NewsController::class, 'store'])->name('store');
// Route::post('auth/posts/indexAboutus/{id}', [App\Http\Controllers\AboutusFormController::class, 'publish'])->name('publish');

// Route::resource('auth/posts',App\Http\Controllers\Auth\PostController::class);
Route::resource('auth/posts/teams', App\Http\Controllers\Teamcontroller::class);




// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
