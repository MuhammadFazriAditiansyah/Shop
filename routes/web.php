<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;

//untuk ke halaman home nya
Route::get('/', function () {
    return view('home'); // Mengembalikan view home
});


Route::resource('items', ItemController::class);
