@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="card">
        <img class="card-img-top w-25" src="image.png" alt="Immagine non disponibile :(">
        <div class="card-body">
            <h2 class="card-title">{{ $pizza->flavour }}</h2>
            <p class="card-text"><strong>Ingredienti: </strong> {{ $pizza->ingredients }}</p>
            <p class="card-text"><strong>Prezzo: </strong> {{ $pizza->price }}</p>
            <p class="card-text"><strong>Vegana: </strong> {{ $pizza->is_vegan === 0 ? 'No' : 'Si'}}</p>
        </div>
    </div>
</div>
@endsection