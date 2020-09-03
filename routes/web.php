<?php

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

//Ruta de prueba
Route::get('hola' , function(){
echo "hola";
})
;
// Ruta de arreglo
Route:: get('arreglo' , function(){

// defino un arreglo
    $estudiantes = ["AN" => "Ana" ,
                    "M" => "Maria",
                    "VA" => "valeria" ,
                    "CA" => " Carlos"];

    // clicos foreach: recorrer arreglo
    foreach($estudiantes as $indice => $e ) {
        echo "$e  tiene el indice: $indice <br />" ;
    }
});

//Ruta de paises
route::get('paises' , function(){

    $paises=[
        "colombia" => [
                        "capital" => "Bogotá",
                        "moneda" => "Peso",
                        "población" => "50372424" ,
                        "Ciudades"=>["Medellín", "Cali", "Santa Marta"]

        ],
        "peru" => [
                        "capital" => "Lima",
                        "moneda" => "Sol",
                        "población" => "33050325",
                        "Ciudades"=>["Cuzco", "Arequipa", "Trujillo"]

        ],
        "Ecuador" => [
                        "capital" => "Quito",
                        "moneda" => "Dolar",
                        "población" => "17517141",
                        "Ciudades"=>["Guataquil", "Manta", "Tulcán"]

        ],
        "Brazil" => [
                        "capital" => "Brasilia",
                        "moneda" => "Real",
                        "población" => "212216052",
                        "Ciudades"=>["Rio de Janeiro", "Recife", "Sao Pablo"]

        ],
        "Venezuela" => [
            "capital" => "Caracas",
            "moneda" => "Bolivar",
            "población" => "32606000",
            "Ciudades"=>["Maracibo", "Valencia", "Colonia tovor"]

        ]
    ];

    //Enviar datos de paises a una vista
    //con la funcion view
    return view ('paises')->with("paises" , $paises);
});
//Rutas de controlador 
Route::get('artistas', "ArtistaController@index");
Route::get('artistas/create', 'ArtistaController@create');
Route::post('artistas/store', 'ArtistaController@store');

Route::resource('empleados', 'EmpleadoController');