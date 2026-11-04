<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

Route::get('/buku', [BukuController::class, 'index']);
Route::get('/buku/{kode}', [BukuController::class, 'show']);

Route::get('/', function () {
    return view('welcome');
});