<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', function () {
    echo "<h2>This is Home Pege</h2>";
});

Route::get('/about', function () {
    echo "<h2>This is About Page</h2>";
});

Route:: get('/contact', function () {
    echo "<h2>This is Contact Page</h2>";
});

Route:: get('test',function() {
    return view('test',['name' => 'Masud Alam']);
});


Route:: get('students/{name}', function($name) {
    echo 'Student Name is ' . $name;
});

Route:: get('users/{name?}',function($name= "Masud Alam") {
   echo 'User Name is '. $name;
});

Route:: get('/','homeController@index');