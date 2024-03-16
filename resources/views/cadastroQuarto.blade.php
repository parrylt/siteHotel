@extends ('layout')
@section ('content')

<section class="container">
<form class="row g-3" method="POST" action="{{route('envia-banco-quarto')}}">
@csrf
  <div class="col-md-6">
    <label for="inputNumero" class="form-label">Número</label>
    <input type="number" class="form-control" id="inputNumero" name="numeroquarto">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Tipo</label>
    <select id="inputState" class="form-select" name="tipoquarto">
      <option selected disabled></option>
      <option value ="Classe A">Classe A</option>
      <option value ="Comercial">Comercial</option>
      <option value ="Suite">Suite</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputValor" class="form-label">Valor</label>
    <input type="number" min="1" step="any" class="form-control" id="inputValor" name="valordiaria">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</section>

@endsection