<?php

use App\Http\Controllers\PageBcwpController;
use App\Http\Controllers\PageCategoryController;
use App\Http\Controllers\PageHomeController;
use App\Http\Controllers\PagePostController;
use App\Http\Controllers\PagePrivacyLcaPolicyController;
use App\Http\Controllers\PagePrivacyPolicyController;
use App\Http\Controllers\PageProductsController;
use App\Http\Controllers\PageSpeakingController;
use App\Http\Controllers\PageUsesController;
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
Route::get('/category/{category}', '\\' . PageCategoryController::class)->name('page.category');

Route::get('/{year}/{month}/{slug}', '\\' .PagePostController::class)->name('page.post');
Route::get('/privacy-policy', '\\' .PagePrivacyPolicyController::class)->name('page.privacy-policy');
Route::get('/privacy-policy-lca', '\\' .PagePrivacyLcaPolicyController::class)->name('page.privacy-policy-lca');
Route::get('uses', '\\'. PageUsesController::class)->name('page.uses');
Route::get('products', '\\'. PageProductsController::class)->name('page.products');
Route::get('build-chatbots-with-php', '\\'. PageBcwpController::class)->name('page.bcwp');


Auth::routes(['register' => false]);

Route::get('/home', 'HomeController@index')->name('home');

