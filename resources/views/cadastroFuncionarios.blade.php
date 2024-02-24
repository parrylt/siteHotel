@extends ('layout')
@section ('content')

<section class="container">
<form class="row g-3" method="POST" action="{{route('envia-banco-funci')}}">
@csrf
  <div class="col-md-6">
    <label for="inputNome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="inputNome" name="nome">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Função</label>
    <select id="inputState" class="form-select" name="funcao">
      <option selected disabled></option>
      <option>Chefe</option>
      <option>Subalterno</option>
    </select>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</section>

@endsection