<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ListarAnimais extends Controller
{
    //camelCase
    function listarAnimal(){
        return view ('listar-animais');
    }
}
