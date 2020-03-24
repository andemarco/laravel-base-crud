@extends('layouts.layout')

@section('main')
      <div class='boxes'>
        <div class="box">
          <h2>{{$guitar['brand']}} {{$guitar['model']}} {{$guitar['year']}}</h2>
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
      </div>
@endsection
