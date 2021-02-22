<form class="" action="{{route('categorie.create')}}" method="get">
  <button type="submit" class="btn btn-success">crea categoria</button>
</form>
<table class="table table-striped">
<thead>
  <tr>
    <th>id</th>
    <th>categoria</th>
    <th>descrizione</th>
    <th>creato</th>
    <th>modificato</th>
  </tr>
</thead>
<tbody>
  @foreach ($categorie as $categoria)
    <tr>
      <td>{{$categoria->id}}</td>
      <td>{{$categoria->categoria}}</td>
      <td>{{$categoria->descrizione}}</td>
      <td>{{$categoria->created_at}}</td>
      <td>{{$categoria->updated_at}}</td>
      <td>
        <form action="{{route('categorie.destroy', $categoria)}}" method="post">
          @csrf
          @method('delete')
         <button type="submit" class="btn btn-success">delete</button>
        </form>
        <form action="{{route('categorie.edit', $categoria)}}" method="get">
          @csrf
         <button type="submit" class="btn btn-success">edit</button>
        </form>
        <form action="{{route('categorie.show', $categoria)}}" method="get">
          @csrf
         <button type="submit" class="btn btn-success">show</button>
      </td>
    </tr>
  @endforeach
</tbody>
