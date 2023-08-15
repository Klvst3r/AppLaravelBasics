<?php

   namespace App\Http\Controllers;
   
    use App\Http\Requests;

   //use App\Http\Request;    
   //use Illuminate\Http\Requests;

   //use App\Http\Requests\CreateMessageRequest;


    class PagesController extends Controller
    {
            
        


        public function home()
        {
            return view('home');
        }


        public function contact()
        {

            return view('contactos');
        }

        public function mensajes(\App\Http\Requests\CreateMessageRequest $request)
        {
            
            //return 'Procesando el mensaje';
                        
            //Procesamiento de la clase Request en este metodo
            //return $request->all();


            //Verificación de campos del formulario
            // if($request->has('nombre'))
            // {
            //     return "Si tiene nombre. Es " . $request->input('nombre');
            // }
            // else{ 
            //     return "No tiene nombre";
            // }
            

            //5.2. Validación del formulario
            
            //$this->validate($request, [
            //    'nombre' => 'required',
                //'email' => 'required | email'
            //    'email' => ['required' , 'email'],
            //    'mensaje' => 'required | min:5'
            //]);
            return $request->all();


        }

        public function saludo($nombre = "Invitado...")
        {
            $html = "<h2>Contenido de html</h2>"; //ingresado por formulario

            $script = "<script>alert('Problema XSS - Cross Site Scripting!')</script>"; //XSS por formulario

            $consolas = [
                "Play Station 4", 
                "Xbox One", 
                "Wii U"
            ];


            return view('saludo', compact('nombre', 'html', 'consolas'));
        }
    }