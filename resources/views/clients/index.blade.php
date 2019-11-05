@extends('base')

@section('main')
<div class="row">
<div class="col-sm-12">
    <h1 class="display-3">Banco de investimentos Max</h1>

    <div class="col-sm-12">

        @if(session()->get('success'))
          <div class="alert alert-success">
            {{ session()->get('success') }}
          </div>
        @endif
      </div>

    <div>
        <a style="margin: 19px;" href="{{ route('clients.create')}}" class="btn btn-primary">Criar cliente</a>
    </div><br/><br/>

  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Nome</td>
          <td>Telefone</td>
          <td>E-mail</td>
          <td>Cidade</td>
          <td>Agência</td>
          <td colspan = 2>Ações</td>
        </tr>
    </thead>
    <tbody>
        @foreach($clients as $client)
        <tr>
            <td>{{$client->id}}</td>
            <td>{{$client->name}}</td>
            <td>{{$client->phone}}</td>
            <td>{{$client->email}}</td>
            <td>{{$client->city}}</td>
            <td>{{$client->agency}}</td>
            <td>
                <a href="{{ route('clients.edit',$client->id)}}" class="btn btn-primary">Editar</a>
            </td>
            <td>
                <form action="{{ route('clients.destroy', $client->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Deletar</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>
<div>
</div>
@endsection
