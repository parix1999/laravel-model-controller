<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
// Bisogna collegarlo al model perchè lui possa usare i dati:
use App\Movie;

class HomePage extends Controller

{
    public function index() {
        // return view('home');

        // Qui ora possiamo utilizzare i nostri dati del database
        $allMovies = Movie::all();
        /*
        Mi mette gli oggetti dentro ad una array:
        dump($allMovies);
        Essendo un'array posso prendere il primo elemento e i suoi dati
        dump($allMovies[0]->title);
        */

        // Ora semplicemente devo passare TUTTO alla vie:
        return view('Home', compact('allMovies'));


    }

}
