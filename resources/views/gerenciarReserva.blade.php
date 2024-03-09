@extends('layout')
@section('content')
<section class="container m-5">
  <div class="container m-5">
    <h1 class="text-center">Gerenciar Dados da Reserva</h1>
    <form >
      <div class="row center">
        <div class="col">
          <input type="number" id="nome" name="nome" class="form-control" placeholder="Digite o Nome do Cliente" aria-label="Número">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-info">Pesquisar</button>
        </div>
      </div>
    </form>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome do Cliente</th>
        <th scope="col">Código da Reserva</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
     
      <tr>
        <th scope="row">01</th>
        <td>119897-999</td>
        <td>
          <a href="">
            <button type="button" class="btn btn-primary">X</button>
          </a>
        </td>
        xx
        <td>
         xxx
        </td>
      </tr>
   
    </tbody>
  </table>
</section>

@endsection