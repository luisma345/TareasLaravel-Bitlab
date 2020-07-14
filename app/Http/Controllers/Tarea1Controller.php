<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Tarea1Controller extends Controller
{
    public function ejercicio1(){
        return view('Tarea#1.Ejercicio1-Form');
    }

    public function age(Request $request){
        return view(
            'Tarea#1/Ejercicio1-Result', 
            ['age' => $request->age]);
    }
    public function ejercicio2(){
        return view('Tarea#1.Ejercicio2-Form');
    }

    public function word(Request $request){
        $array = str_split($request->word);
        return view(
            'Tarea#1/Ejercicio2-Result', 
            ['array' => $array]);
    }
    public function ejercicio3(){
        return view('Tarea#1.Ejercicio3-Form');
    }
    public function num(Request $request){
        return view(
            'Tarea#1/Ejercicio3-Result', 
            ['num' => $request->num]);
    }

    public function ejercicio4(){
        return view('Tarea#1.Ejercicio4-Result');
    }

    public function ejercicio5(){
        return view('Tarea#1.Ejercicio5-Form');
    }
    public function ages(Request $request){
        $array = explode(",",$request->ages);
        $cant = array_count_values($array);
        $index=array_keys($cant);
        return view(
            'Tarea#1/Ejercicio5-Result', 
            ['cant' => $cant, 'index' => $index]);
    }
    public function ejercicio6(){
        return view('Tarea#1.Ejercicio6-Form');
    }
    public function primos(Request $request){
        return view(
            'Tarea#1/Ejercicio6-Result',
            ['num' => $request->num] );
    }
    public function ejercicio7(){
        return view('Tarea#1.Ejercicio7-Form');
    }
    public function books(Request $request){
        $books = array("El principito", "Los 7 hábitos", "La Vaca", "El moje que vendio su ferrari");
        $toRead = array();
        $notRead=0;

        $num = $request->num;
        
        for($i=0;$i<$request->num;$i++){
            $aleatorio = array_rand($books);
            $toRead[] = $books[$aleatorio];
            unset($books[$aleatorio]);
        }
        $notRead=array_values(array_diff($books,$toRead));
        

        return view(
            'Tarea#1/Ejercicio7-Result',
            ['result' => $toRead,
            'notRead' => $notRead] );
    }
    public function ejercicio8(){
        return view('Tarea#1.Ejercicio8-Form');
    }
    public function rango(Request $request){
        return view(
            'Tarea#1/Ejercicio8-Result',
            ['inicio' => $request->num1, 'fin' => $request->num2] );
    }
}
