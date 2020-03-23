@extends('layouts.layout')

@section('main')
      <div class='boxes'>
    @foreach ($guitars as $guitar)

        <div class="box">
          <h2>{{$guitar['brand']}} {{$guitar['model']}} {{$guitar['year']}}</h2>
          <h3>Colore: {{$guitar['color']}}</h3>
          <h4>Prezzo: €{{$guitar['price']}}</h4>
          <p>Descrizione prodotto: {{$guitar['description']}}</p>
        </div>
    @endforeach
      </div>

@endsection
