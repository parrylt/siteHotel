@extends ('layout')
@section ('content')

<section class="container">
    <h1>Reserva de Quarto</h1>
<form class="row g-3" method="POST" action="{{route('envia-banco-reserva')}}">
@csrf
  <div class="col-md-6">
    <label for="inputIDcliente" class="form-label">ID do Cliente:</label>
    <input type="number" min="1" class="form-control" id="inputIDcliente" name="idcliente">
    <label for="inputnomecliente" class="form-label">Nome do Cliente:</label>
    <input type="text" class="form-control" id="inputnomecliente" name="nomecliente" readonly>
  </div>
  <div class="col-md-6">
    <label for="inputIDfunci" class="form-label">ID do Funcionário:</label>
    <input type="number" min="1" class="form-control" id="inputIDfunci" name="idfuncionario">
    <label for="inputnomefuncionario" class="form-label">Nome do Funcionário:</label>
    <input type="text" class="form-control" id="inputnomefuncionario" name="nomefuncionario" readonly>
  </div>
  <div class="col-md-6">
    <label for="inputIDquarto" class="form-label">ID do Quarto:</label>
    <input type="number" class="form-control" id="inputIDquarto" name="idquarto">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Situação</label>
    <select id="inputState" class="form-select" name="situacao">
      <option selected disabled></option>
      <option>Pago</option>
      <option>Pendente</option>
    </select>
  </div>
  <div class="col-md-6">
    <label for="inputdataEntrada" class="form-label">Data de Entrada:</label>
    <input type="date" class="form-control" id="inputdataEntrada" name="dataEntrada">
  </div>
  <div class="col-md-6">
    <label for="inputdataSaida" class="form-label">Data de Saída:</label>
    <input type="date" class="form-control" id="inputdataSaida" name="dataSaida">
  </div>
  <div class="col-md-6">
    <label for="inputvalorTotal" class="form-label">Valor Total:</label>
    <input type="number" min="1" class="form-control" id="inputvalorTotal" name="valorTotal">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</section>

@endsection