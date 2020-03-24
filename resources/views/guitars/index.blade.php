@extends('layouts.layout')

@section('main')
      <div class='boxes'>
    @foreach ($guitars as $guitar)

        <div class="box">
          <a href="{{route('guitars.show', $guitar['id'])}}"><h2>{{$guitar['brand']}} {{$guitar['model']}} {{$guitar['year']}}</h2></a>
          <h3>Colore: {{$guitar['color']}}</h3>
          <h4>Prezzo: €{{$guitar['price']}}</h4>
          <p>Descrizione prodotto: {{$guitar['description']}}</p>
          <a class="edit" href="{{route('guitars.edit', $guitar['id'])}}">Modifica Articolo</a>
          <form action="{{route('guitars.destroy', $guitar->id)}}" method="POST">
            @csrf
            @method('DELETE')
            <button class="delete" type="submit">DELETE</button>
          </form>

        </div>
    @endforeach
      </div>

@endsection
