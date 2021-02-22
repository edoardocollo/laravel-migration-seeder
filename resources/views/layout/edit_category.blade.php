@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
<form action="{{route('categorie.update', $categoria)}}" method="post">
  @csrf
  @method('patch')
  <div class="form-group">
    <label for="categoria">categoria:</label>
    <input type="text" class="form-control" id="categoria" name="categoria" value="{{$categoria->categoria}}">
  </div>
  <div class="form-group">
    <label for="descrizione">descrizione:</label>
    <input type="text" class="form-control" id="descrizione" name="descrizione" value="{{$categoria->descrizione}}">
  </div>
  <button type="submit" class="btn btn-success">Submit</button>
</form>
