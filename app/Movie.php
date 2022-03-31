<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model
{
    // definisco il nome della tabella con una variabile
    // nel caso laravel non sapesse il nome della table sotto Model
    // laravel crea correttamente i casi quando per il plurale basta aggiungere un s

    // classe che identifica il mio model è movie
    // di conseguenza esprimo il nome della table in un formato diverso da quello che si aspetterebbe
    // fa eccezione il nome e lo definisco in modo esplicito
    protected $table = 'movies';
}
