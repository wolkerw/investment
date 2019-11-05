@extends('base')
@section('main')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Editar cliente</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br />
        @endif
        <form method="post" action="{{ route('clients.update', $client->id) }}">
            @method('PATCH')
            @csrf
            <div class="form-group">

                <label for="name">Nome:</label>
                <input type="text" class="form-control" name="name" value={{ $client->name }} />
            </div>

            <div class="form-group">
                <label for="phone">Telefone:</label>
                <input type="text" class="form-control" name="phone" value={{ $client->phone }} />
            </div>

            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value={{ $client->email }} />
            </div>
            <div class="form-group">
                <label for="city">Cidade:</label>
                <input type="text" class="form-control" name="city" value={{ $client->city }} />
            </div>
            <div class="form-group">
                <label for="agency">Agência:</label>
                <input type="text" class="form-control" name="agency" value={{ $client->agency }} />
            </div>
            <div class="form-group">
                <label for="agency">Investimentos:</label>
                <input type="text" class="form-control" name="investments" value={{ $client->investments }} />
            </div>
            <button type="submit" class="btn btn-primary">Editar</button>
        </form>
    </div>
</div>
@endsection
