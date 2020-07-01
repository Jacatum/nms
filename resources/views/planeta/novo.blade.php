@extends('layout.app')

@section('body')

    <style>
        .row {
            padding: 10px;
        }

        h1 {
            padding: 10px;
        }

        #botoes {
            margin-top: 40px;
        }

        #espaco {
            margin-top: 10px;
        }
    </style>

    <form action="/galaxia/nova" method="post">
        @csrf
        <h1 style="text-align: center">Novo Planeta</h1>
        <div class="row">
            <div class="col-3">
                <label for="nome">Nome:</label>
                <input id="nome" type="text" class="form-control" placeholder="Nome do Planeta" name="nome">
            </div>
            <div class="col-3">
                <label for="farm">Farm:</label>
                <select id="farm" class="form-control" name="farm">
                    <option selected value="">Farm</option>
                    <option value="">N/D</option>
                    <option value="Ossos Antigos">Ossos Antigos</option>
                    <option value="Sucata Reciclavel">Sucata Reciclavel</option>
                </select>
            </div>
            <div class="col-3">
                <label for="sentinela">Sentinela:</label>
                <select id="sentinela" class="form-control" name="sentinela">
                    <option selected value="">Sentinela</option>
                        <option value="Baixo">Baixo</option>
                        <option value="Tenso">Tenso</option>
                        <option value="Agressivo">Agressivo</option>
                </select>
            </div>
            <div class="col-3">
                <label for="tempestade">Tempestade:</label>
                <select id="tempestade" class="form-control" name="tempestade">
                    <option selected value="">Tempestade</option>
                        <option value="1">Sim</option>
                        <option value="0">Não</option>
                </select>
            </div>
        </div>

            <div class="row" id="form-mineral">
                <div class="col-3">
                    <label for="mineral">Mineral:</label>
                    <select id="mineral" class="form-control" name="mineral[]">
                        <option selected value="">Mineral</option>
                        @foreach ($mineral as $m)
                            <option value="{{$m->id}}">{{$m->nome}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

            <div class="row" id="form-biologico">
                <div class="col-3">
                    <label for="biologico">Biologico:</label>
                    <select id="biologico" class="form-control" name="biologico[]">
                        <option selected value="">Biologico</option>
                        @foreach ($biologico as $b)
                            <option value="{{$b->id}}">{{$b->nome}}</option>
                        @endforeach
                    </select>
                </div>
            </div>    

        <div style="text-align: center;" id="botoes">   
            <button type="button" class="btn btn-primary" id="add-mineral">Mais Minerais</button>
            <button type="button" class="btn btn-primary" id="add-biologico">Mais Biologicos</button>
            <button class="btn btn-success" type="submit">Cadastrar</button>
        </div>

    </form>

    @endsection
    
    
    @section('javascript')
        <script>
            $('#add-mineral').click(function() {
                $("#form-mineral").append('<div class="col-3"><label for="mineral">Mineral:</label><select id="mineral" class="form-control" name="mineral[]"><option selected value="">Mineral</option>@foreach ($mineral as $m)<option value="{{$m->id}}">{{$m->nome}}</option>@endforeach</select></div>');
            });

            $('#add-biologico').click(function() {
                $("#form-biologico").append('<div class="col-3"><label for="biologico">Biologico:</label><select id="biologico" class="form-control" name="biologico[]"><option selected value="">Biologico</option>@foreach ($biologico as $b)<option value="{{$b->id}}">{{$b->nome}}</option>@endforeach</select></div>');
            });
        </script>
        
    @endsection