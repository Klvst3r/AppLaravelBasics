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
    //1.1 
   /* echo "<a href=" . route('contactos') . ">Contacto</a><br/>";
    echo "<a href=" . route('contactos') . ">Contacto</a><br/>";
    echo "<a href=" . route('contactos') . ">Contacto</a><br/>";
    echo "<a href=" . route('contactos') . ">Contacto</a><br/>";*/

    //2.1 Retornar la vista con la funcion view

    return view('home');

   
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

//1.1 
/*Route::get('saludos/{nombre?}', function($nombre = "Invitado"){

        return "Saludos $nombre";

    })->where('nombre', "[A-Za-z]+");
*/

//2.1 Vistas con parametros
Route::get('saludos/{nombre?}', function($nombre = "Invitado"){

        return view('saludo', ['nombre' => $nombre]);
        //return "Saludos $nombre";

    })->where('nombre', "[A-Za-z1-9]+");