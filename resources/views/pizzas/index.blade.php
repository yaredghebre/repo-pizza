@extends('layouts.app')

@section('content')
<div class="container">

    <table class="table">
      <div class="my-2 text-end">
        <a href="{{ route('pizzas.create') }}">Crea la tua PIZZA</a>
      </div>
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
                  <form class="d-inline-block" action="{{ route('pizzas.destroy', $pizza->id) }}" method="POST">
                    @method('DELETE')
                    @csrf
                    <button type="submit" class="btn btn-danger" id="delete_btn">
                        <i class="fa-solid fa-trash"></i>
                    </button>
                </form>
                </td>
              </tr>
            @endforeach
          
        </tbody>
      </table>

</div>
@endsection