@extends ('layout')
@section ('content')

<section class="container">
<form class="row g-3" method="POST" action="{{route('envia-banco-cliente')}}">
@csrf
<div class="col-md-12">
    <label for="InputNome" class="form-label">Nome</label>
    <input type="text" class="form-control" id="inputNome" name="nome" required placeholder="Seu nome">
  </div>
  <div class="col-md-12">
    <label for="inputEmail" class="form-label">E-mail</label>
    <input type="email" class="form-control" id="inputEmail" name="email" required placeholder="seuemail@algumemail.com">
  </div>
  <div class="col-2">
    <label for="inputFone" class="form-label">Telefone</label>
    <input type="tel" class="form-control" id="inputFone" name="fone" required placeholder="(xx) xxxxx-xxxx">
  </div>
  <div class="col-12">
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Cadastrar</button>
  </div>
</form>
</section>

@endsection