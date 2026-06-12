<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OperacionesController extends Controller
{

    public function saludar(){

    return "hola desde la funcion saludar..";

    }

    public function sumar($num1,$num2){

        $resultado=$num1+$num2;


        return $resultado;

    }

    public function areaTriangulo($base,$altura){

        $areaT=($base*$altura)/2;

        return $areaT;


    }




}
