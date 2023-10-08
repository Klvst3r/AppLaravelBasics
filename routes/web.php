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

Route::get("/", ['as' => 'home', 'uses' => 'PagesController@home'])->middleware('example');


Route::get('contactame', ['as' => 'contactos', 'uses' => 'PagesController@contact']);


//Procesamiento del formulario
Route::post('contacto', 'PagesController@mensajes');

Route::get('saludos/{nombre?}', ['as' => 'saludos', 'uses' => 'PagesController@saludo'])->where('nombre', "[A-Za-z1-9]+");





//6.4. Redirección a los mensajes a index y regresando todos los mensajes
Route::get('mensajes', ['as' => 'messages.index', 'uses' => 'MessagesController@index']);

//6.4. Implementación del REST"
Route::get('mensajes/create', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);

//6.4. Procesamiento del formulario 
Route::post('mensajes', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);

//6.4. Mostrar un mensaje.
Route::get('mensajes/{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);

//6.4. Ruta para editar los mensajes
Route::get('mensajes/{id}/edit', ['as' => 'messages.edit', 'uses' => 'MessagesController@edit']);

//6.4. Ruta para actualizar los mensajes
Route::put('mensajes/{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);


//6.4. Ruta para eliminar los mensajes
Route::delete('mensajes/{id}', ['as' => 'messages.destroy', 'uses' => 'MessagesController@destroy']);


//Route::get('contactame', ['as' => 'contactos', function(){
    //return "Hola desde la pagina de contacto";     
  //  return view('contactos');
  //  }]);

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




/*Route::get('saludos/{nombre?}', ['as' => 'saludos', function($nombre = "Invitado"){

    $html = "<h2>Contenido de html</h2>"; //ingresado por formulario
*/


    /*$script = "<script>alert('Problema XSS - Cross Site Scripting!')</script>"; //XSS por formulario*/

 /*   $consolas = [
        "Play Station 4", 
        "Xbox One", 
        "Wii U"
    ];*/


    //$consolas = [];

   /* $consolas = [
        "Play Station 4"
    ];
*/
/*    return view('saludo', compact('nombre', 'html', 'consolas'));

}])->where('nombre', "[A-Za-z1-9]+");
*/