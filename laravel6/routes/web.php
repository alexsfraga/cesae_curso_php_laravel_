<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\CoursesController;
use App\Http\Controllers\ContactController;
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

Route::get('/', [HomeController::class , 'index']);
Route::get('/index', [HomeController::class , 'index']);
Route::get('/about', [AboutController::class , 'about']);
Route::get('/courses', [CoursesController::class , 'courses']);
Route::get('/contact', [ContactController::class , 'contact']);
Route::post('/resultform', [ContactController::class , 'resultform']);

