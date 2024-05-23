<?php

use App\Http\Controllers\EmploymentController;
use App\Http\Controllers\SchoolController;
use Illuminate\Support\Facades\Route;

Route::get('school/', [SchoolController::class, 'index']);
Route::post('school/', [SchoolController::class, 'store']);
Route::get('school/{school}', [SchoolController::class, 'show']);
Route::put('school/{school}', [SchoolController::class, 'update']);
Route::delete('school/{school}', [SchoolController::class, 'destroy']);

Route::get('employment/', [EmploymentController::class, 'index']);
Route::post('employment/', [EmploymentController::class, 'store']);

