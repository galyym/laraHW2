<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CarsControllers;
use Illuminate\Http\Request;

Route::get('/', [CarsControllers::class,'trucks']);
Route::get('/addCars', [CarsControllers::class,'addCars']);
Route::get('/toAddCars', [CarsControllers::class,'toAddCars']);
Route::get('/toAddCarsTrucks', [CarsControllers::class,'toAddCarsTrucks']);