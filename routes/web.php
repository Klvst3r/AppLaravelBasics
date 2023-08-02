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

/*Route::get('/', function () {
    //return view('welcome');
    return "Hola desde la pagina de inicio";
});*/

Route::get('/', function () {
    echo "<a href=" . route('contactos') . ">Contacto</a><br/>";
    echo "<a href=" . route('contactos') . ">Contacto</a><br/>";
    echo "<a href=" . route('contactos') . ">Contacto</a><br/>";
    echo "<a href=" . route('contactos') . ">Contacto</a><br/>";
   
});

Route::get('contactame', ['as' => 'contactos', function(){
    return "Hola desde la pagina de contacto";     
    }]);

/*Route::get('saludos/{nombre}', function($nombre){
        return "Saludos $nombre";
    });*/

/*Route::get('saludos/{nombre?}', function($nombre = "Invitado"){
        return "Saludos $nombre";
    });*/


Route::get('saludos/{nombre?}', function($nombre = "Invitado"){

        return "Saludos $nombre";

    })->where('nombre', "[A-Za-z]+");
