@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Le nostre PIZZE</h1>

        <div class="row row-cols-4">
            @foreach ($pizzas as $pizza)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title">{{ $pizza->flavour }}
                            <h6 class="card-subtitle mb-2 text-body-secondary">${{ $pizza->price }}</h6>
                            <a href="#" class="card-link">Card link</a>
                            <a href="#" class="card-link">Another link</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>

    </div>
@endsection