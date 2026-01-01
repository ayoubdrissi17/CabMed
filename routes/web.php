<?php

use App\Http\Controllers\Controllerlogin;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControllerTest;
use App\Http\Controllers\Controllerinscription;
use App\Http\Controllers\Controllermedecin;
use App\Http\Controllers\Controllersecretaire;


//Route::get('/cabinet', [ControllerTest::class,'patient'])
//->name('cabinet.patient');
Route::get('/login', [Controllerlogin::class,'patient'])
->name('cabinet.patient');
Route::get('/inscription', [Controllerinscription::class,'patient'])
->name('cabinet.patient');
Route::get('/medecin', [App\Http\Controllers\MedecinController::class, 'medecin'])
->name('cabinet.medecin');
Route::get('/secretaire',[App\Http\Controllers\Controllersecretaire::class,'secretaire'])
->name('cabinet.secretaire');
