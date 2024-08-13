<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\request;

// Route::get('/', function (Request $request) {
//     return redirect('/profile');
// });

Route::redirect('/', '/profile');

Route::get('/profile', function (Request $request) {
    return "PROFILE";
});

// Route::get('/user', 'CONTROLLER', 'METHOD');
// Route::get('/posts', 'CONTROLLER', 'METHOD');
// Route::get('/categories', 'CONTROLLER', 'METHOD');
// Route::get('/chat', 'CONTROLLER', 'METHOD');


// Route::post('/', function () {
//     return view('welcome');
// });

// Route::put('/', function () {
//     return view('welcome');
// });

// Route::patch('/', function () {
//     return view('welcome');
// });

// Route::delete('/', function () {
//     return view('welcome');
// });

// Route::options('/', function () {
//     return view('welcome');
// });


