<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;

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

Route::get('/', function () {
    return view('search');
});

Route::get('/database', [MahasiswaController::class, "index"])->name("database");
Route::get('/exportdatabase', [MahasiswaController::class, "export"])->name("database-export");
Route::post('/importdatabase', [MahasiswaController::class, "import"])->name("database-import");

Route::get('/upload', function () {
    return view('upload');
});