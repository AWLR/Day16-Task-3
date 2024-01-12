<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pagecontroller;

Route::controller(pagecontroller::class)->group(function()
{
Route::get('/','showhome')-> name ('home');
Route::get('/users','showuse')-> name ('user');
Route::get('/about','showabout')-> name ('about');
});