@extends ('layout')
@section ('content')

<section class="container mt-5">
<form class="row g-3" method="POST" action="{{route('alterar-quarto', $registrosQuartos->id)}}">
    @method('put')
@csrf
  <div class="col-md-12">
  <label for="inputNumero" class="form-label">Número:</label>
    <input type="number" min="1" class="form-control" id="inputNumero" value="{{old('numeroquarto', $registrosQuartos->numeroquarto)}}" name="numeroquarto" placeholder="5264">
    @error('numeroquarto')
    <div class="text-sm-start text-light">*Preencher o campo Número. </div>
    @enderror
  </div>

  <div class="col-md-12">
    <label for="inputTipoQuarto" class="form-label">Tipo do Quarto:</label>
    <input type="text" class="form-control" id="inputTipoQuarto" value="{{old('tipoquarto', $registrosQuartos->tipoquarto)}}" name="tipoquarto" placeholder="Comercial">
    @error('tipoquarto')
    <div class="text-sm-start text-light">*Preencher o campo Tipo do Quarto.</div>
    @enderror
</div>
  <div class="col-3">
    <label for="inputValorDiaria" class="form-label">Valor da Diária:</label>
    <input type="number" min="1" class="form-control" id="inputValorDiaria" value="{{old('valordiaria', $registrosQuartos->valordiaria)}}" name="valordiaria" placeholder="156416">
    @error('valordiaria')
    <div class="text-sm-start text-light">*Preencher o campo Valor da Diária.</div>
    @enderror
</div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Alterar</button>
  </div>
</form>
</section>
@endsection