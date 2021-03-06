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

Route::get('/' , [PageController::class , 'index']);
Route::get('/index' , [PageController::class , 'index']);
Route::get('/about' , [PageController::class , 'about']);
Route::get('/tour' , [PageController::class , 'tour']);

Route::get('/contact' , [PageController::class , 'contact']);
Route::post('/contact' , [PageController::class , 'submit']);

Route::Post('/submit' , [PageController::class , 'submit']);
