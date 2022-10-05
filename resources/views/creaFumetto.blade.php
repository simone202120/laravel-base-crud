@extends('layout.app')

@section('title', 'crea nuovo fumetto')

@section('content')

    <form action="{{route('comics.store')}}" method="POST">
        @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Titolo Fumetto</label>
        <input type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title">
        
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="description">
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">url immagine</label>
        <input type="string" class="form-control" id="exampleInputPassword1" name="thumb">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">prezzo</label>
        <input type="decimal" class="form-control" id="exampleInputPassword1" name="price">
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">serie</label>
        <input type="string" class="form-control" id="exampleInputPassword1" name="series">
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">data di uscita</label>
        <input type="date" class="form-control" id="exampleInputPassword1" name="sale_date">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">tipo</label>
        <input type="string" class="form-control" id="exampleInputPassword1" name="type">
    </div>
    
    <button type="submit" class="btn btn-primary">Aggiungi Fumetto</button>
    </form>

@endsection