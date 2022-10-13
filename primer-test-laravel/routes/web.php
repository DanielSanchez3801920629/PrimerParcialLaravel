<?php

use App\Models\Fragrance;
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

Route::get('/', function () {
    return view ('homepage', [
        'fragrances' => Fragrance::all()
    ]);
});

Route::resource('fragrances', \App\Http\Controllers\FragranceController::class);

