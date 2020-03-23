@extends('layouts.layout')

@section('main')
    @foreach ($guitars as $guitar)
      <ul>
        <li>{{$guitar['brand']}}</li>
        <li>{{$guitar['model']}}</li>
        <li>{{$guitar['year']}}</li>
        <li>{{$guitar['color']}}</li>
        <li>{{$guitar['price']}}</li>
        <li>{{$guitar['description']}}</li>
      </ul>
    @endforeach
@endsection
