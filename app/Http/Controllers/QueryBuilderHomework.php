<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class QueryBuilderHomework extends Controller
{
    public function exercise1(){
        $cities = DB::table('cities')->select('name')->orderBy('name','ASC')->get();
        echo "Nombre: <br>";
        foreach ($cities as $key) {
            echo $key->name."<br>";
        }
        // print_r($cities);
    }

    public function exercise2(){
        $cities = DB::table('cities')->select('name')->orderBy('name','DESC')->get();
        echo "Nombre: <br>";
        foreach ($cities as $key) {
            echo $key->name."<br>";
        }
        // print_r($cities);
    }
    public function exercise3(){
        $countries = DB::table('countries')->select('name_en','name')->orderBy('name_en','ASC')->get();
        echo "Nombre: <br>";
        foreach ($countries as $key) {
            echo $key->name."<br>";
        }
        // print_r($countries);
    }
    public function exercise4(){
        $cities = DB::table('cities')->select('name')->where('name','LIKE','San %')->get();
        echo "Nombre: <br>";
        foreach ($cities as $key) {
            echo $key->name."<br>";
        }
        // print_r($cities);
    }
    public function exercise5(){
        $guate = DB::table('countries')->select('id')->where('name','Guatemala')->get();

        echo "Código país Guatemala: ".$guate[0]->id;
        // print_r($guate);
    }
    public function exercise6(){
        $guate = DB::table('states')->select('name')->where('country_id','70')->get();
        echo "Nombre: <br>";
        foreach ($guate as $key) {
            echo $key->name."<br>";
        }
        // print_r($guate);
    }
    public function exercise7(){
        $students = DB::table('students')->select('email','primer_nombre','primer_apellido')
                    ->where('teléfono','LIKE','6%')
                    ->get();

        echo "Primer Nombre -|- Primer Apellido  -|- e-mail <br>";
        foreach ($students as $key) {
            echo $key->primer_nombre." -|- ".$key->primer_apellido." -|- ".$key->email."<br>";
        }
        // print_r($students);
    }
    public function exercise8(){
        $students = DB::table('students')->select('carrera')->where('carrera','LIKE','Ingeniería %')->count();
        echo "Cantidad de estudiantes de Ingeniería: ".$students;

        // print_r($students);
    }
    public function exercise9(){
        $students = DB::table('students')
            ->select('primer_nombre','segundo_nombre','primer_apellido','segundo_apellido')
            ->whereBetween('ano_ingreso',[2000,2010])
            ->orderBy('nota_paes','ASC')
            ->get();
        echo "Estudantes entrantes entre 2000 y 2010: <br>";
        foreach ($students as $key) {
            echo $key->primer_nombre." ".$key->segundo_nombre." ".$key->primer_apellido." ". $key->segundo_apellido."<br>";
        }
        // print_r($students);
    }
    public function exercise10(){
        $students = DB::table('students')->avg('nota_paes');
        echo "Promedio Nota de PAES: ".$students;

        // print_r($students);
    }
    public function exercise11(){
        $students = DB::table('students')->avg('nota_admision');
        echo "Promedio Nota de admison: ".$students;
        // print_r($students);
    }
    public function exercise12(){
        $students = DB::table('students')
                    ->select(DB::raw("avg(nota_paes+nota_admision)/2 AS 'promedio'"))
                    ->groupBy('primer_nombre')
                    ->orderBy('promedio','ASC')
                    ->get();
        echo "Primer Nombre -|- Primer Apellido -|- Promedio Notas <br>";
        foreach ($students as $key) {
            echo $key->promedio."<br>";
        }
        // print_r($students);
    }
    public function exercise13(){
        $students= DB::table('students')
                    ->select('primer_nombre','primer_apellido','teléfono','nota_paes')
                    ->orderBy('nota_paes','DESC')
                    ->limit(20)
                    ->get();
        echo "Primer Nombre -|- Primer Apellido -|- Teléfono -|- Nota PAES <br>";
        foreach ($students as $key) {
            echo $key->primer_nombre." -|- ".$key->primer_apellido." -|- ".$key->teléfono." -|- ".$key->nota_paes."<br>";
        }
        // var_dump($students);
    }
    public function exercise14(){
        $students=DB::table('students')
                ->select('carrera')
                ->addSelect(DB::raw("avg(nota_admision) AS 'promedio_notas_admision'"))
                ->groupBy('carrera')
                ->get();
        echo "Carrera -|- Promedio Notas de Admisión <br>";
        foreach ($students as $key) {
            echo $key->carrera." -|- ".$key->promedio_notas_admision."<br>";
        }
        // var_dump($students);
    }
    public function exercise15(){
        $students=DB::table('students')
                ->select('ano_ingreso')
                ->addSelect(DB::raw("count(ano_ingreso) as cantidad"))
                ->groupBy('ano_ingreso')
                ->orderBy('ano_ingreso')
                ->get();
        echo "Año -|- Cantidad Estudiantes Ingresados <br>";
        foreach ($students as $key) {
            echo $key->ano_ingreso." -|- ".$key->cantidad."<br>";
        }
        // var_dump($students);
    }
    public function exercise16(){
        $students=DB::table('students')
                ->select('id','primer_nombre','primer_apellido','nota_paes')
                ->where('nota_paes','<',6)
                ->get();
        echo "Id -|- Primer Nombre -|- Primer Apellido -|- Nota Paes <br>";
        foreach ($students as $key) {
            echo $key->id." -|- ".$key->primer_nombre." -|- ".$key->primer_apellido.
                    " -|- ".$key->nota_paes."<br>";
        }
        // var_dump($students);
    }
    public function exercise17(){
        $students=DB::table('students')
                ->select('id','primer_nombre','primer_apellido','nota_paes','nota_admision')
                ->where('nota_paes','<',6)
                ->where('nota_admision','<',6)
                ->get();
        echo "Id -|- Primer Nombre -|- Primer Apellido -|- Nota Paes -|- Nota Admisión <br>";
        foreach ($students as $key) {
            echo $key->id." -|- ".$key->primer_nombre." -|- ".$key->primer_apellido.
                    " -|- ".$key->nota_paes." -|- ".$key->nota_admision."<br>";
        }
        // var_dump($students);
    }
    public function exercise18(){
        $students=DB::table('students')
                ->select('carrera')
                ->addSelect(DB::raw("min(nota_admision) AS nota_mas_baja"))
                ->groupBy('carrera')
                ->orderBy('nota_mas_baja','ASC')
                ->get();
        echo "Carrera -|- Nota más baja Examen Admisión <br>";
        foreach ($students as $key) {
            echo $key->carrera." -|- ".$key->nota_mas_baja."<br>";
        }
        // var_dump($students);
    }
    public function exercise19(){
        $students=DB::table('students')
                ->select('carrera')
                ->addSelect(DB::raw("max(nota_paes) AS nota_mas_alta_PAE"))
                ->where('nota_paes','>',7)
                ->groupBy('carrera')
                ->orderBy('nota_mas_alta_PAE','DESC')
                ->get();
        
        echo "Carrera -|- Nota más alta PAE <br>";
        foreach ($students as $key) {
            echo $key->carrera." -|- ".$key->nota_mas_alta_PAE."<br>";
        }
        // var_dump($students);
    }
    public function exercise20(){
        $students=DB::table('students')
                ->select(DB::raw('*'))
                ->where('primer_apellido','LIKE','A%')
                // ->where('email','LIKE','%@gmail.com')
                // ->whereRaw('(nota_paes+nota_admision)>=11')
                ->get();
        echo "Estudiante apellido -|- email <br>";
        foreach ($students as $key) {
            echo $key->primer_apellido." -|- ".$key->email."<br>";
        }
        // var_dump($students);
    }
    public function exercise21(){
        $countries=DB::table('countries')
                ->select('id','name')
                ->whereIn('name',['El Salvador', 'Honduras', 'Belice', 'Guatemala', 'Nicaragua', 'Costa Rica', 'Panama'])
                ->get();
        echo "Id -|-   Nombre <br>";
        foreach ($countries as $key) {
            echo $key->id." -|- ".$key->name."<br>";
        }
        // var_dump($countries);
    }
    public function exercise22(){
        $states=DB::table('states')
                ->select('country_id')
                ->addSelect(DB::raw("COUNT('country_id') AS 'cantidad'"))
                ->whereIn('country_id',[4,30,70,90,99,154,159])
                ->groupBy('country_id')
                ->get();
        echo "Id País -|- Cantidad de Estados <br>";
        foreach ($states as $key) {
            echo $key->country_id." -|- ".$key->cantidad."<br>";
        }
        // var_dump($states);
    }
    public function exercise23(){
        $states=DB::table('states')
                ->select('id','name')
                ->where('country_id',90)
                ->get();
        echo "Id Departamento -|-   Nombre <br>";
        foreach ($states as $key) {
            echo $key->id." -|- ".$key->name."<br>";
        }
        // var_dump($states);
    }
    public function exercise24(){
        $cities=DB::table('cities')
                ->select('state_id')
                ->addSelect(DB::raw("COUNT('id') AS cantidad"))
                ->whereIn(
                    'state_id',
                    [1167, 1168, 1169, 1170, 1171, 1172, 1173, 1174, 1175, 1176, 1177, 1178, 1179, 1180]
                )
                ->groupBy('state_id')
                ->get();
        echo "Id Departamento -|-   Cantidad <br>";
        foreach ($cities as $key) {
            echo $key->state_id." -|- ".$key->cantidad."<br>";
        }
        // var_dump($cities);
    }
    public function exercise25(){
        $cities=DB::table('cities')
                ->select('state_id','id','name')
                ->whereIn(
                    'state_id',
                    [1167, 1168, 1169, 1170, 1171, 1172, 1173, 1174, 1175, 1176, 1177, 1178, 1179, 1180]
                )
                ->orderBy('state_id')
                ->get();
        echo "Id Departamento -|-   ID  -|-   Nombre <br>";
        foreach ($cities as $key) {
            echo $key->state_id." -|- ".$key->id." -|- ".$key->name."<br>";
        }
        // var_dump($cities);
    }
}
