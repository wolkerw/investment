@extends('base')

@section('main')
<div class="row">
 <div class="col-sm-8 offset-sm-2">
    <h1 class="display-3">Adicionar cliente</h1>
  <div>
    @if ($errors->any())
      <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
              <li>{{ $error }}</li>
            @endforeach
        </ul>
      </div><br />
    @endif
      <form method="post" action="{{ route('clients.store') }}">
          @csrf
          <div class="form-group">
              <label for="first_name">Nome:</label>
              <input type="text" class="form-control" name="name"/>
          </div>

          <div class="form-group">
              <label for="last_name">Telefone:</label>
              <input type="text" class="form-control" name="phone"/>
          </div>

          <div class="form-group">
              <label for="email">Email:</label>
              <input type="text" class="form-control" name="email"/>
          </div>
          <div class="form-group">
              <label for="city">Cidade:</label>
              <input type="text" class="form-control" name="city"/>
          </div>
          <div class="form-group">
              <label for="country">Agência:</label>
              <input type="text" class="form-control" name="agency"/>
          </div>
          <button type="submit" class="btn btn-primary-outline">Adicionar cliente</button>
      </form>
  </div>
</div>
</div>
@endsection
