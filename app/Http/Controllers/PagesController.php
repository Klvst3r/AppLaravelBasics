<?php

    namespace App\Http\Controllers;

    use Illuminate\Http\Request; 

    //use App\Http\Request;

    class PagesController extends Controller
    {
        public function home()
        {
            return view('home');
        }
    }