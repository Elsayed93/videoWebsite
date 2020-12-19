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
})->name('frontend.landing');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::namespace('App\Http\Controllers\BackEnd')->prefix('admin')->middleware('admin')->group(function () {
    Route::get('/', 'Home@index')->name('admin.home');
    Route::resource('/users', 'usersController')->except('show');
    Route::resource('/categories', 'Categories')->except('show');
    Route::resource('/skills', 'Skills')->except('show');
    Route::resource('/tags', 'Tags')->except('show');
    Route::resource('/pages', 'Pages')->except('show');
    Route::resource('/videos', 'Videos')->except('show');
    Route::post('/comments', 'Videos@commentStore')->name('comment.store');
    Route::get('/comments/{id}', 'Videos@commentDelete')->name('comment.delete');
    Route::post('/comments/{id}', 'Videos@commentUpdate')->name('comment.update');
});
require __DIR__ . '/auth.php';

Route::get('/home', 'App\Http\Controllers\HomeController@index')->name('home');
Route::get('category/{id}', 'App\Http\Controllers\HomeController@category')->name('front.category');
Route::get('skill/{id}', 'App\Http\Controllers\HomeController@skills')->name('front.skill');
Route::get('tag/{id}', 'App\Http\Controllers\HomeController@tags')->name('front.tags');
Route::get('video/{id}', 'App\Http\Controllers\HomeController@video')->name('frontend.video');
// Route::get('tag/{id}', 'HomeController@tags')->name('front.tags');
// Route::get('video/{id}', 'HomeController@video')->name('frontend.video');
// Route::get('contact-us', 'HomeController@messageStore')->name('contact.store');
// Route::get('/', 'HomeController@welcome')->name('frontend.landing');
// Route::get('page/{id}/{slug?}', 'HomeController@page')->name('front.page');
// Route::get('profile/{id}/{slug?}', 'HomeController@profile')->name('front.profile');

// Route::middleware('auth')->group(function () {
//     Route::post('comments/{id}', 'HomeController@commentUpdate')->name('front.commentUpdate');
//     Route::post('comments/{id}/create', 'HomeController@commentStore')->name('front.commentStore');
//     Route::post('profile', 'HomeController@profileUpdate')->name('profile.update');
// });
