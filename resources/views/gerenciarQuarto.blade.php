@extends('layout')
@section('content')
<section class="container m-5">
  <div class="container m-5">
    <h1 class="text-center">Gerenciar Dados dos Quartos</h1>
    <form method='get' action='{{route("gerenciar-quarto")}}'>
      <div class="row center">
        <div class="col">
          <input type="text" id="nome" name="nome" class="form-control" placeholder="Digite o Número do Quarto" aria-label="Número do Quarto">
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
        <th scope="col">ID do Quarto</th>
        <th scope="col">Número do Quarto</th>
        <th scope="col">Tipo do Quarto</th>
        <th scope="col">Editar</th>
        <th scope="col">Excluir</th>
      </tr>
    </thead>
    <tbody>
     @foreach($registrosQuartos as $registrosQuartosLoop)
      <tr>
        <th scope="row">{{$registrosQuartosLoop->id}}</th>
        <td>{{$registrosQuartosLoop->numeroquarto}}</td>
        <td>{{$registrosQuartosLoop->tipoquarto}}</td>
        <td>
          <a href="">
            <button type="button" class="btn btn-primary">O</button>
          </a>
        </td>
        
        <td>
        <form method="post" action='{{route("apaga-quarto", $registrosQuartosLoop->id)}}'>
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