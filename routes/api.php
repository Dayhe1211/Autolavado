<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CitaController;

Route::middleware('auth:sanctum')->get('/citas', [CitaController::class, 'index']);
