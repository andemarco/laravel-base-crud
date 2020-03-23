<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <a href="{{Route('guitars.create')}}">INSERISCI ANNUNCIO</a>
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
  </body>
</html>
