<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::view('/','/form');

Route::post('/add',[UserController::class,'addUser'])->name('addUser');