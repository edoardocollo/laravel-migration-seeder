<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>cteate</title>
  </head>
  <body>
    <a href="{{route('home')}}">home</a>
    <a href="">prodotti</a>
    <a href="{{route('about')}}">about</a>



    <h1>create prodotto</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

    <!-- <form class="" action="{{route('prodotti.store')}}" method="post">

    </form> -->
    <form action="{{route('prodotti.store')}}" method="post">
      @csrf
      <div class="form-group">
        <label for="titolo">titolo:</label>
        <input type="text" class="form-control" id="titolo" name="titolo">
      </div>
      <div class="form-group">
        <label for="descrizione">descrizione:</label>
        <input type="text" class="form-control" id="descrizione" name="descrizione">
      </div>
      <div class="form-group">
        <label for="prezzo">prezzo:</label>
        <input type="number" class="form-control" id="prezzo" name="prezzo">
      </div>
      <button type="submit" class="btn btn-success">Submit</button>
    </form>



  </body>
</html>
