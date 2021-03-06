<?php

use App\Http\Controllers\MainController;
use App\Http\Controllers\FactController;
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

Route::get('/main', [FactController::class, 'main']) -> name("main");

Route::get('/add', [MainController::class, 'add'])->name('add');
Route::post('/add/data', [MainController::class, 'data']);
