<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\UlasanController;
use App\Http\Controllers\RatingController;
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


// landing page
Route::get('/', function () {
    return view('index');
});
//landing page


// Auth page
Route::get('/auth', function () {
    return view('login');
});

Route::get('/auth', function () {
    return view('register');
});
// Auth page

Route::prefix('admin')->name('admin.')->group(function(){
Route::get('dashboard',[DashboardController::class, 'index'])->name('index');

Route::get('/wisata', [WisataController::class, 'index' ]);
    Route::get('/wisata/create', [WisataController::class, 'create']);
    Route::post('/wisata/store', [WisataController::class, 'store']);
    Route::get('/wisata/edit/{id}', [WisataController::class, 'edit']);
    Route::post('/wisata/update', [WisataController::class, 'update']);
    Route::get('/wisata/show/{id}', [WisataController::class, 'show']);
    Route::get('/wisata/delete/{id}', [WisataController::class, 'destroy']);

    Route::get('/ulasan', [UlasanController::class, 'index']);
    Route::get('ulasan/create', [UlasanController::class, 'create']);
    Route::post('/ulasan/store', [UlasanController::class, 'store']);
    Route::get('/ulasan/edit/{id}', [UlasanController::class,'edit']);
    Route::post('/ulasan/update', [UlasanController::class, 'update']);
    Route::get('/ulasan/show/{id}', [UlasanController::class, 'show']);
    Route::get('/ulasan/delete/{id}', [UlasanController::class,'destroy']);

    Route::get('/rating', [RatingController::class, 'index']);
    Route::get('rating/create', [RatingController::class, 'create']);
    Route::post('/rating/store', [RatingController::class, 'store']);
    Route::get('/rating/edit/{id}', [RatingController::class,'edit']);
    Route::post('/rating/update', [RatingController::class, 'update']);
    Route::get('/rating/show/{id}', [RatingController::class, 'show']);
    Route::get('/rating/delete/{id}', [RatingController::class,'destroy']);

});