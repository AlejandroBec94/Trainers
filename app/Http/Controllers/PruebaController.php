<?php

namespace LaraDex\Http\Controllers;

use LaraDex\Http\Controllers\Controller;

class PruebaController extends Controller{

    public function prueba($param){
        
        if (!$param){
            return "Nope";
        }
        return 'Estoy dentro de prueba controller bla bla' . $param;
    }

}