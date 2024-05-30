<?php

use App\Http\Controllers\UserRegistrationController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('register',[UserRegistrationController::class, 'register']);
