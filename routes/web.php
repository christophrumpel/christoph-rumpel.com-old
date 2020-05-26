<?php

use App\Http\Controllers\PageHomeController;
use App\Http\Controllers\PagePostController;
use App\Http\Controllers\PageSpeakingController;
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

Route::get('/', '\\' . PageHomeController::class)->name('page.home');
Route::get('speaking', '\\' . PageSpeakingController::class)->name('page.speaking');

Route::get('/{year}/{month}/{slug}', '\\' .PagePostController::class)->name('page.post');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

