@extends('layouts.layout')

@section('main')
      <div class='boxes'>
    @foreach ($guitars as $guitar)

        <div class="box">
          <a href="{{route('guitars.show', $guitar['id'])}}"><h2>{{$guitar['brand']}} {{$guitar['model']}} {{$guitar['year']}}</h2></a>
          <h3>Colore: {{$guitar['color']}}</h3>
          <h4>Prezzo: €{{$guitar['price']}}</h4>
          <p>Descrizione prodotto: {{$guitar['description']}}</p>
          <a class="edit" href="{{route('guitars.update', $guitar['id'])}}">Modifica Articolo</a>
          <a class="delete" href="#">Elimina articolo</a>
        </div>
    @endforeach
      </div>

@endsection
