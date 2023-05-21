<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

Route::get('/pejs/53398/people/all', [PeopleController::class, 'index']);
Route::get('/pejs/53398/people/{id}', [PeopleController::class, 'show']);
Route::post('/pejs/53398/people/post', [PeopleController::class, 'post']);
Route::put('/pejs/53398/people/{id}', [PeopleController::class, 'update']);
Route::delete('/pejs/53398/people/destroy/{id}', [PeopleController::class, 'destroy']);