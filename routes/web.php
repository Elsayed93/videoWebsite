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
});
require __DIR__ . '/auth.php';
