<?php

namespace App\Controllers;

class Pelicula extends BaseController
{
    
    public function index()
    {
        echo  view('index', [
            'nombreVariableVista'=> 'contenido',
            'nombreVariableVista2'=> 'contenido 2',
            'nombreVariableVista3'=> 5,
            'miArray' => [1,2,3,4,],
        ]);
    }

}
