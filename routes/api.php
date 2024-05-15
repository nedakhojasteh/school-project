<?php

use App\Http\Controllers\SchoolController;
use Illuminate\Support\Facades\Route;

Route::get('school/', [SchoolController::class, 'index']);
Route::post('school/', [SchoolController::class, 'store']);
Route::get('school/{school}', [SchoolController::class, 'show']);
Route::put('school/{school}', [SchoolController::class, 'update']);
Route::delete('school/{school}', [SchoolController::class, 'destroy']);

