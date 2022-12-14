<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;


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

Route::get('/', [SiswaController::class, 'index']);
Route::get('/tambah', [SiswaController::class, 'tambah']);

Route::post('/insert', [SiswaController::class, 'insert']);
Route::get('/tampil/{id}', [SiswaController::class, 'tampil']);
Route::post('/update/{id}', [SiswaController::class, 'update']);

Route::get('/delete/{id}', [SiswaController::class, 'delete']);
