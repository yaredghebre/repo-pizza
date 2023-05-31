@extends('layouts.app')

@section('content')
<div class="container">

    <table class="table">
        <thead>
          <tr>
            <th scope="col">id</th>
            <th scope="col">Nome</th>
            <th scope="col">Ingredienti</th>
            <th scope="col">Prezzo</th>
            <th scope="col">Disponibilità</th>
            <th scope="col">Vegana</th>
            <th scope="col">Azioni</th>
          </tr>
        </thead>
        <tbody>
            @foreach ($pizzas as $pizza)
            <tr>
                <td>{{ $pizza->id }}</td>
                <th>{{ $pizza->flavour }}</th>
                <td>{{ $pizza->ingredients }}</td>
                <td>€ {{ $pizza->price }}</td>
                <td>{{ $pizza->is_available === 0 ? 'No' : 'Si' }}</td>
                <td>{{ $pizza->is_vegan === 0 ? 'No' : 'Si' }}</td>
                <td>
                    <a class="btn btn-success" href="{{ route('pizzas.show', $pizza->id) }}">
                        <i class="fa-solid fa-eye"></i>
                    </a>
                    <a class="btn btn-warning" href="{{ route('pizzas.edit', $pizza->id) }}">
                      <i class="fa-regular fa-pen-to-square"></i>
                  </a>
                </td>
              </tr>
            @endforeach
          
        </tbody>
      </table>

</div>
@endsection