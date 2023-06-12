@extends('layouts.app')

@section('content')
<div class="container">
    <h2>NUOVA PIZZA</h2>

    <form action="{{route('pizzas.store')}}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="flavour" class="form-label">Flavour</label>
            <input type="text" class="form-control" id="flavour" name="flavour" placeholder="Inserisci nome pizza">
        </div>
        
        <div class="mb-3">
            <label for="price" class="form-label">Prezzo</label>
            <input type="number" step="0.01" class="form-control" id="price" name="price" placeholder="Inserire prezzo">
        </div>
        <div class="mb-3">
            <label for="is_available" class="form-label">Disponibile</label>
            <select id="is_available" name="is_available" class="form-select">
                
                <option value="1">Si</option>
                <option value="0">No</option>
               
            </select>
        </div>
        <div class="mb-3">
            <label for="is_vegan" class="form-label">Vegana</label>
            <select id="is_vegan" name="is_vegan" class="form-select">

                <option value="0">No</option>
                <option value="1">Si</option>
            </select>
        </div>
        
        <button type="submit" class="btn btn-primary mt-3">Salva</button>
        <a href="{{route('pizzas.index')}}" class="btn btn-warning mt-3 ms-3">Indietro</a>
    </form>
    
</div>
    
@endsection