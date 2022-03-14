<?php

use App\Http\Controllers\TasksController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('tasks', [TasksController::class, 'index']);
Route::get('tasks/{task}', [TasksController::class, 'show']);
Route::post('tasks', [TasksController::class, 'store']);
