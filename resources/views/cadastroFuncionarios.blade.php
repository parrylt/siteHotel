@extends ('layout')
@section ('content')

<section class="container">
<form class="row g-3">
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Nome</label>
    <input type="email" class="form-control" id="inputEmail4">
  </div>
  <div class="col-md-4">
    <label for="inputState" class="form-label">Função</label>
    <select id="inputState" class="form-select">
      <option selected disabled></option>
      <option>Chefe</option>
      <option>Subalterno</option>
    </select>
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