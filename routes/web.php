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

// 2.1 Vista home
//Route::get('/', function () {
    //1.1 
   /* echo "<a href=" . route('contactos') . ">Contacto</a><br/>";
    echo "<a href=" . route('contactos') . ">Contacto</a><br/>";
    echo "<a href=" . route('contactos') . ">Contacto</a><br/>";
    echo "<a href=" . route('contactos') . ">Contacto</a><br/>";*/

    //2.1 Retornar la vista con la funcion view

    /*return view('home');

   
});*/

// 2.1 Ruta contactos
/*Route::get('/', ['as' => 'home', function () {
   
    return view('home');
   
}]);
*/

//3.1

Route::get("/", ['as' => 'home', 'uses' => 'PagesController@home']);






Route::get('contactame', ['as' => 'contactos', function(){
    //return "Hola desde la pagina de contacto";     
    return view('contactos');
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
//Route::get('saludos/{nombre?}', function($nombre = "Invitado"){

        //2.1 paramtetros en la url
        //return view('saludo', ['nombre' => $nombre]);
        //return "Saludos $nombre";

        //2.1 Paso de variables
        //return view('saludo')->with(['nombre' => $nombre]);

        //2.1 Paso de parametros con la funcion de php compact
        /*return view('saludo', compact('nombre'));


    })->where('nombre', "[A-Za-z1-9]+");*/




Route::get('saludos/{nombre?}', ['as' => 'saludos', function($nombre = "Invitado"){

    $html = "<h2>Contenido de html</h2>"; //ingresado por formulario

    /*$script = "<script>alert('Problema XSS - Cross Site Scripting!')</script>"; //XSS por formulario*/

 /*   $consolas = [
        "Play Station 4", 
        "Xbox One", 
        "Wii U"
    ];*/


    $consolas = [];

   /* $consolas = [
        "Play Station 4"
    ];
*/
    return view('saludo', compact('nombre', 'html', 'consolas'));

}])->where('nombre', "[A-Za-z1-9]+");