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
      <input type="text" name="name" placeholder="Nome">
      <label for="title">Modello</label>
      <input type="text" name="name" placeholder="Nome">
      <label for="title">Anno</label>
      <input type="text" name="name" placeholder="Nome">
      <label for="title">Colore</label>
      <input type="text" name="name" placeholder="Nome">
      <label for="title">Prezzo</label>
      <input type="text" name="name" placeholder="Nome">
      <label for="content">Descrizione</label>
      <input type="text" name="lastname" placeholder="Cognome">
      <input type="submit" value="Invia">
      @method('POST')
      
    </form>
  </body>
</html>
