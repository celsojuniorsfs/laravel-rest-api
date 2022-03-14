<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get("tasks", function () {
    $tasks = [
        [
            "id" => 1,
            "name" => "Estudar PHP 7",
            "complete" => false
        ],
        [
            "id" => 2,
            "name" => "Estudar JavaScript",
            "complete" => true
        ]
    ];

    return $tasks;
});

/*
Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
*/
