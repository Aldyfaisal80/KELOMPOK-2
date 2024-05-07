<?php

use App\Http\Controllers\UTSController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/uts', function () {
    return view('ujian.index');
});

Route::get('/uts/create', function () {
    return view('ujian.create');
});
Route::post('/uts/create', [UTSController::class, 'store']);

// Route::get('/ujian',[UTSController::class, 'index']);

// Route::post('/siswa', [UTSController::class, 'simpan']);
