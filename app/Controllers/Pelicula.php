<?php

namespace App\Controllers;

use App\Models\PeliculaModel;

class Pelicula extends BaseController
{

     public function show($id)
    {
        $peliculaModel = new PeliculaModel();

            echo view('pelicula/show', [
                'pelicula' => $peliculaModel->find($id)
        ]);
    }


    public function new()
    {
        echo 'new';
    }

   
    public function index()
    {
        $peliculaModel = new PeliculaModel();

        // Guardas el resultado
        $peliculas = $peliculaModel->findAll();

        // Lo envías a la vista
        return view('index', [
            'peliculas' => $peliculas,

            // si quieres conservar tus otras variables, no estorban:
            'nombreVariableVista'=> 'contenido',
            'nombreVariableVista2'=> 'contenido 2',
            'nombreVariableVista3'=> 5,
            'miArray' => [1,2,3,4],
        ]);
    }
}