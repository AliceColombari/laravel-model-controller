@extends('layouts.base')

{{-- @section('pageTitle', 'Lista dei film') --}}

@section('pageTitle', 'Lista dei film')

@section('content')

    {{-- qui ci va il ciclo per stampare tutto il contenuto del db cioè tutti i miei film --}}
    <ul>
        @foreach($movies as $movie)
            <li>
                {{-- stesso modo per richiamare i dati --}}
                {{$movie['id']}} - {{$movie['title']}} - {{$movie['original_title']}}
                {{$movie->nationality}} - {{$movie->date}} - {{$movie->vote}}
            </li>
        @endforeach
    </ul>

    

    

@endsection