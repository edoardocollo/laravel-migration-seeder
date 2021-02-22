<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>edit prodotto</title>
  </head>
  <body>
    <a href="{{route('home')}}">home</a>
    <a href="{{route('prodotti.index')}}">prodotti</a>
    <a href="{{route('about')}}">about</a>



    <h1>edit prodotto</h1>

    <form action="{{route('prodotti.update', $prodotto->id)}}" method="post">
      @csrf
      @method('patch')
      <div class="form-group">
        <label for="titolo">titolo:</label>
  <input type="text" class="form-control" id="titolo" name="titolo" value="{{$prodotto->titolo}}">
      </div>
      <div class="form-group">
        <label for="descrizione">descrizione:</label>
  <input type="text" class="form-control" id="descrizione" name="descrizione" value="{{$prodotto->descrizione}}">
      </div>
      <div class="form-group">
        <label for="prezzo">prezzo:</label>
  <input type="number" class="form-control" id="prezzo" name="prezzo" value="{{$prodotto->prezzo}}">
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>




  </body>
</html>
