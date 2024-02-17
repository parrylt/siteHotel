@extends ('layout')
@section ('content')

<section class="container">
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">E-mail</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-6">
    <label for="inputPassword4" class="form-label">Nome</label>
    <input type="password" class="form-control" id="inputPassword4">
  </div>
  <div class="col-12">
    <label for="inputAddress" class="form-label">Telefone</label>
    <input type="tel" class="form-control" id="inputAddress" required placeholder="(xx) xxxxx-xxxx">
  </div>
  <div class="col-12">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" id="gridCheck">
      <label class="form-check-label" for="gridCheck">
        Check me out
      </label>
    </div>
  </div>
  <div class="col-12">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>
</section>

@endsection