<?php

namespace App\Controllers;

use App\Models\PeliculaModel;

class Pelicula extends BaseController
{
    
    public function index()
    {
        

        $peliculaModel = new PeliculaModel();

        $peliculaModel->findAll();

        echo  view('index', [
            'nombreVariableVista'=> 'contenido',
            'nombreVariableVista2'=> 'contenido 2',
            'nombreVariableVista3'=> 5,
            'miArray' => [1,2,3,4,],
        ]);
    }

}
