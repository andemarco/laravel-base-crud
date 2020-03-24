@extends('layouts.layout')

@section('main')
    <form action="{{route('guitars.update', $guitar['id'])}}" method="POST">
      @csrf

      <label for="title">Marca</label>
      <input type="text" name="brand" placeholder="Marca" value="{{$guitar['brand']}}">
      <label for="title">Modello</label>
      <input type="text" name="model" placeholder="Modello" value="{{$guitar['model']}}">
      <label for="title">Anno</label>
      <input type="text" name="year" placeholder="Anno" value="{{$guitar['year']}}">
      <label for="title">Colore</label>
      <input type="text" name="color" placeholder="Colore" value="{{$guitar['color']}}">
      <label for="title">Prezzo</label>
      <input type="text" name="price" placeholder="Prezzo" value="{{$guitar['price']}}">
      <label for="content">Descrizione</label>
      <input type="text" name="description" placeholder="Descrizione" value="{{$guitar['description']}}">
      <input type="hidden" name="id" value="{{$guitar['id']}}">
      <button type="submit" value="Invia">Aggiorna</button>
      @method('PATCH')
    </form>
@endsection
