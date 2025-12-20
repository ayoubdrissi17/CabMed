<?php

use App\Http\Controllers\Controllerlogin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerTest;

Route::get('/cabinet', [ControllerTest::class,'patient'])
->name('cabinet.patient');
Route::get('/login', [Controllerlogin::class,'patient'])
->name('cabinet.patient');

