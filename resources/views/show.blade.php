@extends('layout.app')

@section('title','dettagli formato')

@section('content')
    <div class="containerShow">
        <img src="{{$fumetto->thumb}}" alt="">
        <h1>{{$fumetto->title}}</h1>
        <p>DESCRIZIONE:{{$fumetto->description}}</p>
        <p>PREZZO:{{$fumetto->price}}</p>
        <p>SERIE:{{$fumetto->series}}</p>
        <p>Data di uscita:{{$fumetto->sale_date}}</p>



        
    </div>
@endsection

