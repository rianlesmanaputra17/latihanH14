<?php

use App\Http\Controllers\CastController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/table', function () {
    return view('table');
});

Route::get('/data-tables', function () {
    return view('dataTables');
});

Route::get('/cast', [CastController::class, 'index']);

Route::get('/cast/create', [CastController::class, 'create']);

Route::post('/cast', [CastController::class, 'store']);

Route::get('/cast/{id}', [CastController::class, 'show']);

Route::get('/cast/update/{id}', [CastController::class, 'edit']);

Route::post('/cast/update/{id}', [CastController::class, 'update']);

Route::get('/cast/delete/{id}', [CastController::class, 'destroy']);