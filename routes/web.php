<?php

use Illuminate\Http\request;
use Illuminate\Support\Facades\Route;

// Route::get('/', function (Request $request) {
//     return redirect('/profile');
// });

// Route::redirect('/', '/profile');

// Route::get('/profile', function (Request $request) {
//     return "PROFILE";
// });

// Route::get('/{id}/{status}', function ($id, $status) {
//     return $status;
// });

//optional parameter routes have a ?

// Route::get('/{id?}', function (?int $id = null) {
//     return $id;
// });

// Route::get('/user/{id}', function ($id) {
//     return $id;
// })->where('id', 23);

//Advanced routes that handle uppercase routes
// Route::get('/user/{name}', function ($name) {
//     return $name;
// })->where('name', '[A-Za-z]+');

//undocumented way of passing a specific route

// Route::get('/user/{name}/{id}', function ($name) {
//     return $name;
// })->where('name', '[A-Za-z]+')->where('id', 23);

//documented way of passing a specific route

// Route::get('/user/{name}/{id}', function ($name) {
//     return $name;
// })->where(['name', '[A-Za-z]+', 'id' => 23]);

//documented way of passing all ids

// Route::get('/user/{name}/{id}', function (string $name, int $id) {
//     return $name;
// })->where(['name', '[A-Za-z]+', 'id' => '[0-9]+']);

//Docemented Where commands to do the same things

// Route::get('/user/{name}', function ($name) {
//     return $name;
// })->whereAlpha('name');

// Route::get('/user/{name}', function ($name) {
//     return $name;
// })->whereNumber('name');

// Route::get('/user/{categories}', function ($categories) {
//     return $categories;
// })->whereIn('categories', ['php', 'python', 'java']);

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/company-contactfl;kajsdkflja;s', function () {
    return 'contact';
})->name('company.contact');

Route::get('/profile', function () {
    return view('welcome');
})->name('profile');

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
