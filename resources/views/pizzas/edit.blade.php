@extends('layouts.app')

@section('content')
<div class="container">
    <h2>{{ $pizza->flavour}}</h2>

    <form action="{{route('pizzas.update', $pizza->id )}}" method="POST">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="flavour" class="form-label">Flavour</label>
            <input type="text" class="form-control" id="flavour" name="flavour" placeholder="Inserisci nome pizza" value="{{ $pizza->flavour }}">
        </div>
        <div class="mb-3">
            <label for="ingredients" class="form-label">Ingredients</label>
            <input class="form-control" id="ingredients" name="ingredients" value="{{ $pizza->ingredients }}">
        </div>
        
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Inserire prezzo" value="{{ $pizza->price }}">
        </div>
        <div class="mb-3">
            <label for="is_available" class="form-label">Disponibile</label>
            <select id="is_available" name="is_available" class="form-select">
                
                <option @selected($pizza->is_available === '1') value="1">Si</option>
                <option @selected($pizza->is_available === '0') value="0">No</option>
               
            </select>
        </div>
        <div class="mb-3">
            <label for="is_vegan" class="form-label">Vegana</label>
            <select id="is_vegan" name="is_vegan" class="form-select">

                <option @selected($pizza->is_vegan === '0') value="0">No</option>
                <option @selected($pizza->is_vegan === '1') value="1">Si</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary mt-3">Salva</button>
        <a href="{{route('pizzas.index')}}" class="btn btn-warning mt-3 ms-3">Indietro</a>
    </form>
    
</div>
    
@endsection