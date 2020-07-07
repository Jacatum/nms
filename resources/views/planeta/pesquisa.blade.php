@extends('layout.app')

@if (isset($planetas))

    @section('body')
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Galaxia</th>
                        <th scope="col">Sistema</th>
                        <th scope="col">Planeta</th>
                        <th style="text-align: center" scope="col">Editar</th>
                    </tr>
                </thead>
                @foreach ($planetas as $planeta)
                    <tbody>
                        <tr>
                            <th scope="row">{{$planeta->id}}</th>
                            <td>{{$planeta->sistema->galaxia->nome}}</td>
                            <td>{{$planeta->sistema->nome}}</td>
                            <td>{{$planeta->nome}}</td>
                            <td style="text-align: center">
                                <a class="btn btn-sm btn-primary" href=""><i class="fa fa-eye"></i></a>
                                <a class="btn btn-sm btn-primary" href=""><i class="fa fa-pencil"></i></a>
                                <a class="btn btn-sm btn-danger" href=""><i class="fa fa-trash"></i></a>
                            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
    @endsection

@else

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

<form action="/planeta/pesquisa" method="post">
    @csrf
    
    <h1 style="text-align: center" class="h1">Pesquisar</h1>
    <div class="row">
        <div class="col-4">
            <label for="nome" class="label">Nome:</label>
            <input id="nome" type="text" class="form-control" placeholder="Nome do Planeta" name="nome">
        </div>
        <div class="col-2">
            <label for="galaxia_id">Galaxia:</label>
            <select id="galaxia_id" class="form-control" name="galaxia">
                <option selected value="">Galaxia</option>
                @foreach ($galaxia as $g)
                    <option value="{{$g->id}}">{{$g->nome}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-2">
            <label for="sistema_id">Sistema:</label>
            <select id="sistema_id" class="form-control" name="sistema">
                <option selected value="">Sistema</option>
                @foreach ($sistema as $s)
                <option value="{{$s->id}}">{{$s->nome}}</option>
                @endforeach
            </select>
        </div>
        <div class="col-2">
            <label for="sentinela">Sentinela:</label>
            <select id="sentinela" class="form-control" name="sentinela">
                <option selected value="">Sentinela</option>
                <option value="Baixo">Baixo</option>
                <option value="Tenso">Tenso</option>
                <option value="Agressivo">Agressivo</option>
            </select>
        </div>
        <div class="col-2">
            <label for="tempestade">Tempestade:</label>
            <select id="tempestade" class="form-control" name="tempestade">
                <option selected value="">Tempestade</option>
                <option value="1">Sim</option>
                <option value="0">Não</option>
            </select>
        </div>
        </div>
        
        <div class="row">
            <div class="col-2">
                <label for="farm">Farm:</label>
                <select id="farm" class="form-control" name="farm">
                    <option selected value="">Farm</option>
                    <option value="">N/D</option>
                    <option value="Ossos Antigos">Ossos Antigos</option>
                    <option value="Sucata Reciclavel">Sucata Reciclavel</option>
                </select>
            </div>
            <div class="col-2">
                <label for="agua">Agua:</label>
                <select id="agua" class="form-control" name="agua">
                    <option selected value="">Agua</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
            <div class="col-4">
                <label for="tipo">Tipo:</label>
                <select id="tipo" class="form-control" name="tipo">
                    <option selected value="">Tipo</option>
                    @foreach ($tipo as $ti)
                        <option value="{{$ti->id}}">{{$ti->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-2">
                <label for="clima">Clima:</label>
                <select id="clima" class="form-control" name="clima">
                    <option selected value="">Clima</option>
                    @foreach ($clima as $cl)
                        <option value="{{$cl->id}}">{{$cl->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-2">
                <label for="portal">Portal:</label>
                <select id="portal" class="form-control" name="portal">
                    <option selected value="">Portal</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="col-3">
                <label for="sol">Cor do Sol:</label>
                <select id="sol" class="form-control" name="sol">
                    <option selected value="">Cor do Sol</option>
                    <option value="Amarelo">Amarelo</option>
                    <option value="Amarelo">Azul</option>
                    <option value="Branco">Branco</option>
                    <option value="Verde">Verde</option>
                    <option value="Vermelho">Vermelho</option>
                </select>
            </div>
            <div class="col-3">
                <label for="estacao">Estação espacial:</label>
                <select id="estacao" class="form-control" name="estacao">
                    <option selected value="">Estação Espacial</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
            <div class="col-3">
                <label for="raca">Raça:</label>
                <select id="raca" class="form-control" name="raca">
                    <option selected value="">Raça</option>
                    @foreach ($racas as $ra)
                        <option value="{{$ra->id}}">{{$ra->nome}}</option>
                    @endforeach
                </select>
            </div>
            <div class="col-3">
                <label for="conflito">conflito:</label>
                <select id="conflito" class="form-control" name="conflito">
                    <option selected value="">Conflito</option>
                    @foreach ($conflitos as $co)
                        <option value="{{$co->id}}">{{$co->nome}}</option>
                    @endforeach
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
            <button class="btn btn-success" type="submit">Pesquisar</button>
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

@endif

