<?php

use App\Http\Controllers\productcontroller;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource("food",productcontroller::class);

