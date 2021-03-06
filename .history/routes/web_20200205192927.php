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

Route::get('/name/{name}/lastname/{lastname}' , function($name, $lastname = null){
    return 'Hola yo soy '. $name . $lastname;
});

Route::get('/mi_primer_ruta' , function(){
    return 'Hello Word.';
});