<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Ppp\Models\Animal;

class Animal extends Controller
{
    //camelCase
    function animal(){
        return view ('animal');
    }

    function inserir(Request $request){
        $animal = new Animal();
        $animal -> create($request->all());

    }
}