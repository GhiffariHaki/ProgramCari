<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MahasiswaController;
use App\Http\Controllers\SearchController;
use App\Http\Controllers\ImageController;

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
    return view('auth/login');
});

// Route::get('/image-view', [ImageController::class, "index"]);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Route::group(['middleware' => 'auth'], function () {
    Route::get('/cari', [SearchController::class, "index"])->name("search");

    #Route Buat Kepeluarn Import Export Database
    Route::get('/database', [MahasiswaController::class, "index"])->name("database");
    Route::get('/exportdatabase', [MahasiswaController::class, "export"])->name("database-export");
    Route::post('/importdatabase', [MahasiswaController::class, "import"])->name("database-import");
    Route::get('/uploadfiles', [ImageController::class, "index"]);
    Route::get('/uploadpiagam', [ImageController::class, "piagam"]);
    Route::get('/uploadtranskrip', [ImageController::class, "transkrip"]);
    Route::post('/piagam-submit', [ImageController::class, "store_piagam"]);
    Route::post('/transkrip-submit', [ImageController::class, "store_transkrip"]);

});
