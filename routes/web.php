<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;



Route::get('/', function () {
    return view('welcome');
});


Route::post('user', function (Request $request) {
    if ($request->filled('name')) {
        $request->input('name');
    } elseif ($request->filled('email')) {
        return "Email: " . $request->input('email');
    } else {
        return "No data found";
    }
});
