@extends ('layout')
@section ('content')

<section class="container mt-5">
<form class="row g-3" method="POST" action="{{route('alterar-funci', $registrosFuncionarios->id)}}">
    @method('put')
@csrf
  <div class="col-md-12">
  <label for="inputNome" class="form-label">Nome:</label>
    <input type="text" class="form-control" id="inputNome" value="{{old('nome', $registrosFuncionarios->nome)}}" name="nome" placeholder="Paula da Silva">
    @error('nome')
    <div class="text-sm-start text-light">*Preencher o campo Nome. </div>
    @enderror
  </div>

  <div class="col-md-12">
    <label for="inputFuncao" class="form-label">Função:</label>
    <input type="text" class="form-control" id="inputFuncao" value="{{old('funcao', $registrosFuncionarios->funcao)}}" name="funcao" placeholder="Chefe">
    @error('funcao')
    <div class="text-sm-start text-light">*Preencher o campo Função.</div>
    @enderror
</div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Alterar</button>
  </div>
</form>
</section>
@endsection