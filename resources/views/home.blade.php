@extends('layouts.app')
@section('content')

<div class="container">
    <h1>My movies</h1>

    @forelse($movies as $movie)
    <h3>Titolo film: {{ $movie->title }}</h3>
    <div class="d-flex">
        <h4>Titolo originale film: {{ $movie->original_title }}</h4>
        <h4>Nazionalità film: {{ $movie->nationality }}</h4>
        <h4>Data uscita film: {{ $movie->date }}</h4>
        <hr>
    </div>

    @empty
    <p>Sorry nothing to movie found </p>
    @endforelse
</div>

@endsection