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

Route::get('prueba/{alex}','PruebaController@prueba');

Route::resource('trainers','TrainerController');

Route::get('/user/{name}&{last?}',function($name,$last = " "){
    return "Hola soy " . $name ." ". $last;
});

Route::get("/mi_primer_ruta",function(){
    return "Hello World";
});