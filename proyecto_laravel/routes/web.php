<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});


//crear un archivo de api.php para las rutas de la api, y luego importarlo aqui