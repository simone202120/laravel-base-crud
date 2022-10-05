@extends('layout.app')
@section('title', 'gestione dei fumetti dei fumetti')

@section('content')
    <div class="containerElenco">
        <a href="{{route('comics.create')}}"><button type="button" class="btn btn-warning">Aggiungi nuovo fumetto</button></a>

    <table class="table">
      <thead>
        <tr>
          <th scope="col">id</th>
          <th scope="col">Title</th>
          <th scope="col">Price</th>
          <th scope="col">Series</th>
          <th scope="col">Type</th>
          <th scope="col">Gestione</th>


        </tr>
      </thead>
      <tbody>

      @foreach ($fumetti as $fumetto)
        <tr>
          <th scope="row">{{$fumetto->id}}</th>
          <td>{{$fumetto->title}}</td>
          <td>{{$fumetto->price}}</td>
          <td>{{$fumetto->series}}</td>
          <td>{{$fumetto->type}}</td>
          <td><a href="{{route('comics.show', ['comic' => $fumetto->id])}}"><button type="button" class="btn btn-success">Dettagli</button></td>
          <td><a href="{{route('comics.edit', ['comic' => $fumetto->id])}}"><button type="button" class="btn btn-warning">Modifica</button></td>
          <td>
            <form action="{{route('comics.destroy', ['comic' => $fumetto->id])}}" method="POST" onsubmit="return conferma()">
            @csrf
            @method('DELETE')
            <BUTTOn type="submit" class="btn btn-danger">Elimina</BUTTOn>
            </form>
          </td>
            

        </tr>
      @endforeach
        
        
      </tbody>
    </table>
    </div>

@endsection