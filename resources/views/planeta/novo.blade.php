@extends('layout.app')

@section('body')

    <form action="/galaxia/nova" method="post">
        @csrf
        <h1 style="text-align: center">Novo Planeta</h1>
        <div class="row">
            <div class="col-9 offset-2">
                <label for="nome">Nome:</label>
                <input id="nome" type="text" class="form-control" placeholder="Nome do Planeta" name="nome">
            </div>
        </div>

            <div class="row" id="form-mineral">
                <div class="form-group col-2">
                    <label for="mineral">Mineral:</label>
                    <select id="mineral" class="form-control" name="mineral[]">
                        <option selected value="">Mineral</option>
                        @foreach ($mineral as $m)
                            <option value="{{$m->id}}">{{$m->nome}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

        <div style="text-align: center;" id="botoes">   
            <button class="btn btn-primary" type="submit">Cadastrar</button>
            <button type="button" class="btn btn-primary" id="add-mineral">Mais Minerais</button>
        </div>

    </form>

    @endsection
    
    
    @section('javascript')
        <script>
            $('#add-mineral').click(function() {
                $("#form-mineral").append('<div class="form-group col-2"><label for="mineral">Mineral:</label><select id="mineral" class="form-control" name="mineral[]"><option selected value="">Mineral</option>@foreach ($mineral as $m)<option value="{{$m->id}}">{{$m->nome}}</option>@endforeach</select></div>');
            });
        </script>
        
    @endsection