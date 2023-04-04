<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/hello",function(){
    return view('app');
});

Route::get("/prueba",function(){
    return "Hola a tod@s..." ;
});

Route::get("/do",function(){
    return  view('toDos.index') ;
});

Route::get("json",function(){
    return "Aqui va el json" ;
});

