<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>prodotti</title>
  </head>
  <body>
    <a href="{{route('home')}}">home</a>
    <a href="{{route('prodotti.index')}}">prodotti</a>
    <a href="{{route('about')}}">about</a>



    <h1>product</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <a href="{{route('prodotti.create')}}">crea prodotto</a>

    @foreach ($prodotti as $prodotto)
      <h2>{{$prodotto->titolo}}</h2>
      <p>{{$prodotto->descrizione}}</p>
      <span>{{$prodotto->prezzo}}</span>
      <p>Prodotto id: {{$prodotto->id}}</p>
      <a href="{{route('prodotti.show', $prodotto)}}">show</a>
      <a href="{{route('prodotti.edit', $prodotto)}}">edit</a>
      <form class="" action="{{route('prodotti.destroy', $prodotto)}}" method="post">
        @csrf
        @method('delete')

        <button type="submit" class="btn btn-success">delete</button>
      </form>
    @endforeach




  </body>
</html>
