<?php

use App\Http\Controllers\PageController;
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


Route::get('/', [PageController::class , 'index']);
Route::get('/index.html', [PageController::class , 'index']);
Route::get('/courses.html', [PageController::class , 'courses']);
Route::get('/generic.html', [PageController::class , 'generic']);
Route::post('/form', [PageController::class , 'submit']);
Route::get('/submited', [PageController::class, 'list']);
