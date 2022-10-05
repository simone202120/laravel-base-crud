@extends('layout.app')

@section('title', 'homepage')

@section('content')
   <div class="containerHome">
    <h1>PREMI SUL BOTTONE PER GESTIRE\AGGIUNGERE O ELIMINARE FUMETTI</h1>
    <a href="{{route('comics.index')}}"><button type="button" class="btn btn-primary">GESTISCI FUMETTI</button></a>

   </div>

@endsection