<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\pageController;
use App\Http\Controllers\contactsController;
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
Route::get('/', [pageController::class, 'index']);
Route::get('/about', [aboutController::class, 'about']);
Route::get('/contacts', [contactsController::class, 'contacts']);
Route::post('/contacts', [contactsController::class, 'success']);

