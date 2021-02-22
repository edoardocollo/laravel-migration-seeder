<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>






<button class="btn btn-success" type="button" name="button">
  <a href="{{route('prodotti.create')}}">aggiungi prodotto</a>
</button>
<table class="table table-striped">
<thead>
  <tr>
    <th>id</th>
    <th>prodotto</th>
    <th>descrizione</th>
    <th>prezzo</th>
    <th>creato</th>
    <th>modificato</th>
  </tr>
</thead>
<tbody>
  @foreach ($prodotti as $prodotto)
    <tr>
      <td>{{$prodotto->id}}</td>
      <td>{{$prodotto->titolo}}</td>
      <td>{{$prodotto->descrizione}}</td>
      <td>{{$prodotto->prezzo}}</td>
      <td>{{$prodotto->created_at}}</td>
      <td>{{$prodotto->updated_at}}</td>
      <td>
        <form action="{{route('prodotti.destroy', $prodotto)}}" method="post">
          @csrf
          @method('delete')
         <button type="submit" class="btn btn-success">delete</button>
        </form>
        <form action="{{route('prodotti.edit', $prodotto)}}" method="get">
          @csrf
         <button type="submit" class="btn btn-success">edit</button>
        </form>
        <form action="{{route('prodotti.show', $prodotto)}}" method="get">
          @csrf
         <button type="submit" class="btn btn-success">show</button>
      </td>
    </tr>
  @endforeach
</tbody>
