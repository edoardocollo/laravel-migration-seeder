@if ($errors->any())
<div class="alert alert-danger">
  <ul>
    @foreach ($errors->all() as $error)
    <li>{{ $error }}</li>
    @endforeach
  </ul>
</div>
@endif
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
