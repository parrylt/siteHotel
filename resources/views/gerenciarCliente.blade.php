@extends('layout')
@section('content')
<section class="container m-5">
  <div class="container m-5">
    <h1 class="text-center">Gerenciar Dados do Cliente</h1>
    <form method='get' action='{{route("gerenciar-cliente")}}'>
      <div class="row center">
        <div class="col">
          <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o Nome do Cliente" aria-label="Primeiro Nome">
        </div>
        <div class="col">
          <button type="submit" class="btn btn-info">Buscar</button>
        </div>
      </div>
    </form>
  </div>
  <table class="table">
    <thead>
      <tr>
        <th scope="col">Código</th>
        <th scope="col">Nome</th>
        <th scope="col">E-mail</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
     @foreach($registrosClientes as $registrosClientesLoop)
      <tr>
        <th scope="row">{{$registrosClientesLoop->id}}</th>
        <td>{{$registrosClientesLoop->nome}}</td>
        <td>{{$registrosClientesLoop->email}}</td>
        <td>
          <a href="">
            <button type="button" class="btn btn-primary">O</button>
          </a>
        </td>
        
        <td>
        <form method="post" action='{{route("apaga-cliente", $registrosClientesLoop->id)}}'>
          @method('delete')
          @csrf
          <button type="submit" class="btn btn-danger"> X </button>
        </form>
        </td>
      </tr>
  @endforeach
    </tbody>
  </table>
</section>

@endsection