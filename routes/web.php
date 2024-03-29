<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SparePartController;
use App\Http\Controllers\ComputerController;

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
    return view('homepage');
});

Route::resource('sparepart', SparePartController::class);

Route::resource('computer', ComputerController::class);
