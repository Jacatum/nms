@extends('layout.app')

@section('body')
    <form action="/galaxia/nova" method="post">
        @csrf
        <h1 style="text-align: center">Novo Mineral</h1>
        <div class="row">
            <div class="col-9 offset-2">
                <label for="nome">Nome:</label>
                <input id="nome" type="text" class="form-control" placeholder="Nome do mineral" name="nome">
            </div>
        </div>
        <button class="btn btn-primary" type="submit" style="text-align: center">Cadastrar</button>
    </form>
@endsection