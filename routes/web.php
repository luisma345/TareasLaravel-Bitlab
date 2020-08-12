<?php

use App\Http\Controllers\QueryBuilderHomework;
use App\Http\Controllers\Tarea1Controller;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::prefix('exercise')->name('exercise.')->group(
    function(){
        for ($i=1; $i <= 25; $i++) { 
            Route::get($i,[QueryBuilderHomework::class,'exercise'.$i])->name('');
        }
    }
);

// Route::prefix('ejercicio1')->name('ejercicio1.')->group(
//     function(){
//         Route::get('', [ Tarea1Controller::class,'ejercicio1'])->name('');
//         Route::post('age', [ Tarea1Controller::class,'age'])->name('age');
//     }
// );
// Route::prefix('ejercicio2')->name('ejercicio2.')->group(
//     function(){
//         Route::get('', [ Tarea1Controller::class,'ejercicio2'])->name('');
//         Route::post('word', [ Tarea1Controller::class,'word'])->name('word');
//     }
// );
// Route::prefix('ejercicio3')->name('ejercicio3.')->group(
//     function(){
//         Route::get('', [ Tarea1Controller::class,'ejercicio3'])->name('');
//         Route::post('num', [ Tarea1Controller::class,'num'])->name('num');
//     }
// );
// Route::get('ejercicio4', [ Tarea1Controller::class,'ejercicio4'])->name('ejercicio4');

// Route::prefix('ejercicio5')->name('ejercicio5.')->group(
//     function(){
//         Route::get('', [ Tarea1Controller::class,'ejercicio5'])->name('');
//         Route::post('ages', [ Tarea1Controller::class,'ages'])->name('ages');
//     }
// );
// Route::prefix('ejercicio6')->name('ejercicio6.')->group(
//     function(){
//         Route::get('', [ Tarea1Controller::class,'ejercicio6'])->name('');
//         Route::post('primos', [ Tarea1Controller::class,'primos'])->name('primos');
//     }
// );
// Route::prefix('ejercicio7')->name('ejercicio7.')->group(
//     function(){
//         Route::get('', [ Tarea1Controller::class,'ejercicio7'])->name('');
//         Route::post('books', [ Tarea1Controller::class,'books'])->name('books');
//     }
// );
// Route::prefix('ejercicio8')->name('ejercicio8.')->group(
//     function(){
//         Route::get('', [ Tarea1Controller::class,'ejercicio8'])->name('');
//         Route::post('rango', [ Tarea1Controller::class,'rango'])->name('rango');
//     }
// );