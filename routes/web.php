<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

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

Route::get('/', [PageController::class, 'index1']);
Route::get('/index-2', [PageController::class, 'index2']);
Route::get('/index-3', [PageController::class, 'index3']);
Route::get('/index-4', [PageController::class, 'index4']);
Route::get('/index-5', [PageController::class, 'index5']);
Route::get('/index-6', [PageController::class, 'index6']);
