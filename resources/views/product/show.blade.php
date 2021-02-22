<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>show</title>
  </head>
  <body>
    <a href="{{route('home')}}">home</a>
    <a href="{{route('prodotti.index')}}">prodotti</a>
    <a href="{{route('about')}}">about</a>



    <h1>show</h1>
    <h2>{{$prodotto->titolo}}</h2>
    <p>{{$prodotto->descrizione}}</p>
    <span>{{$prodotto->prezzo}}</span>

  </body>
</html>
