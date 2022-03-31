<?php

namespace App\Http\Controllers;

// keyuse importata in auto
use App\Movie;
use Illuminate\Http\Request;

// richiamare key di use - struttura logica che è data da
// nome keyspace di Movie.php - struttura - in quale cartella si trova?
// e nome effettivo della classe 
// autoloadign classe inserito manualmente 
// use App\Movie;

class MovieController extends Controller
{
    //
    public function index() {
        // prova
        // echo 'funziona!';
        // die();

        // keyuse importa in auto e aggiunge in auto
        // in questo modo connessione al db - recupero dati
        // mette film in array associativo nella nostra variabile movie
        // INTERROGHI IL DB E FAI SELECT * FROM MOVIES

        // qui stampo tutti i film
        // $movies = Movie::all();

        // qui stampo solo i film con voto maggiore a nove
        $movies = Movie::where('vote', '>', 9)->get();


        // ritorna un array associativo che associa nome colonna al suo relativo valore
        // ritorna sulla vista un array associativo con nome variabili
        return view('index', ['movies' => $movies]);
        
        // stessa cosa ma in modo compatto
        // return view('index', compact('movies'));

    }
}
