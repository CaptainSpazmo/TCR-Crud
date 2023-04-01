<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentenController;

//dit is de route van de homepage
Route::get('/', function () {
    return view('welcome');
});
//dit is de route voor de read om data op te halen
Route::get('read',[StudentenController::class,'index']);
//dit is de route om dingen te createn
Route::get('toevoegen',[StudentenController::class,'toevoegen']);
//dit is de route om de aangemaakte student opteslaan
Route::post('opslaan',[StudentenController::class,'opslaan']);
//dit is de route om data terug te halen om voor te bereiden op een update
Route::get('aanpassen/{id}',[StudentenController::class,'aanpassen']);
// dit is de route om te updaten dus dat werkt samen met de route hier boven
Route::post('update',[StudentenController::class,'update']);
// dit is de route voor de delete functie
Route::get('verwijderen/{id}',[StudentenController::class,'verwijderen']);