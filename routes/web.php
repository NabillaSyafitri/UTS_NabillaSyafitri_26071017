<?php

use App\Http\Controllers\KurikulumController;
use App\Http\Controllers\PelajaranController;
use App\Http\Controllers\SiswaController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/siswa', function () {
    return view('siswa');
}); 

Route::get('/pelajaran', [PelajaranController::class, 'pelajaran']);
Route::get('/siswa', [SiswaController::class, 'siswa']);
Route::get('/kurikulum', [KurikulumController::class, 'kurikulum']);