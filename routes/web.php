<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataDiriController;
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
    return view('welcome');
});


Route::post('/simpan', [DataDiriController::class, 'simpan'])->name('submitdata');
Route::get('/tables', [DataDiriController::class, 'tampiltables'])->name('tables');

Route::prefix('ziki')->group(function(){
    Route::get('/', [DataDiriController::class, 'tampildashboard'])->name('dashboard');
    Route::get('/data', [DataDiriController::class, 'getdata']);
});