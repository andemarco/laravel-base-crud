<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="{{asset('/css/app.css')}}">
    <link href="https://fonts.googleapis.com/css?family=Rubik:300,400,700&display=swap" rel="stylesheet">
  </head>
    <body>
      <div class="container">
        <nav class='nav_bar'>
          <ul>
            <li class='nav_bar_logo'><a href="http://127.0.0.1:8000/">LOGO</a></li>
            <li class='nav_bar_ins'><a href="{{Route('guitars.create')}}">VENDI LA TUA CHITARRA</a></li>
            <li class=''><a href="{{Route('guitars.index')}}">LE NOSTRE CHITARRE</a></li>
          </ul>
        </nav>
      </div>
