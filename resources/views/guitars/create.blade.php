@extends('layouts.layout')

@section('main')
  @if ($errors->any())
    <div class="alert alert-danger">
      <ul>
        @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  @endif
    <form action="{{route('guitars.store')}}" method="post">
      @csrf

      <label for="title">Marca</label>
      <input type="text" name="brand" placeholder="Marca">
      <label for="title">Modello</label>
      <input type="text" name="model" placeholder="Modello">
      <label for="title">Anno</label>
      <input type="text" name="year" placeholder="Anno">
      <label for="title">Colore</label>
      <input type="text" name="color" placeholder="Colore">
      <label for="title">Prezzo</label>
      <input type="text" name="price" placeholder="Prezzo">
      <label for="content">Descrizione</label>
      <input type="text" name="description" placeholder="Descrizione">
      <button type="submit" value="Invia">Inserisci</button>
      @method('POST')
    </form>
@endsection
