@extends('layout.app')

@section('title', 'modifica fumetto')

@section('content')

    <form action="{{route('comics.update', ['comic'=> $comic->id])}}" method="POST">
        @method('PUT')
        @csrf
    <div class="mb-3">
        <label for="title" class="form-label">Titolo Fumetto</label>
        <input type="string" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="title" value="{{$comic->title}}">
        
    </div>
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <input type="text" class="form-control" id="exampleInputPassword1" name="description" value="{{$comic->title}}">
    </div>
    <div class="mb-3">
        <label for="thumb" class="form-label">url immagine</label>
        <input type="string" class="form-control" id="exampleInputPassword1" name="thumb" value="{{$comic->thumb}}">
    </div>
    <div class="mb-3">
        <label for="price" class="form-label">prezzo</label>
        <input type="decimal" class="form-control" id="exampleInputPassword1" name="price" value="{{$comic->price}}">
    </div>
    <div class="mb-3">
        <label for="series" class="form-label">serie</label>
        <input type="string" class="form-control" id="exampleInputPassword1" name="series" value="{{$comic->series}}">
    </div>
    <div class="mb-3">
        <label for="sale_date" class="form-label">data di uscita</label>
        <input type="date" class="form-control" id="exampleInputPassword1" name="sale_date" value="{{$comic->sale_date}}">
    </div>
    <div class="mb-3">
        <label for="type" class="form-label">tipo</label>
        <input type="string" class="form-control" id="exampleInputPassword1" name="type" value="{{$comic->type}}">
    </div>
    
    <button type="submit" class="btn btn-primary">Modifica Dtai</button>
    </form>

@endsection