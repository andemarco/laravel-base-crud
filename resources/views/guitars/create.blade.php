<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
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
      <input type="submit" value="Invia">
      @method('POST')
    </form>
  </body>
</html>
