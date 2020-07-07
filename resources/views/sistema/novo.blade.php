@extends('layout.app')

@section('body')


    <form action="/sistema/novo" method="post">
        @csrf
        <h1 style="text-align: center">Novo Sistema</h1>
        <div class="row">
            <div class="col-3">
                <label for="nome">Nome:</label>
                <input id="nome" type="text" class="form-control" placeholder="Nome do Planeta" name="nome">
            </div>

            <div class="col-3">
                <label for="sol">Cor do Sol:</label>
                <select id="sol" class="form-control" name="sol">
                    <option selected value="">Cor do Sol</option>
                    <option value="Amarelo">Amarelo</option>
                    <option value="Azul">Azul</option>
                    <option value="Branco">Branco</option>
                    <option value="Verde">Verde</option>
                    <option value="Vermelho">Vermelho</option>
                </select>
            </div>

            <div class="col-3">
                <label for="num_planetas">Quantidade de Planetas:</label>
                <input id="num_planetas" type="text" class="form-control" placeholder="Quantidade de Planetas" name="num_planetas">
            </div>

            <div class="col-3">
                <label for="estacao">Estação espacial:</label>
                <select id="estacao" class="form-control" name="estacao">
                    <option selected value="">Estação Espacial</option>
                    <option value="1">Sim</option>
                    <option value="0">Não</option>
                </select>
            </div>
        </div>

        
            <div class="row">
                <div class="col-4" id="form-galaxia">
                    <label for="galaxia">Galaxia:</label>
                    <select id="galaxia" class="form-control" name="galaxia">
                        <option selected value="">Galaxia</option>
                        @foreach ($galaxias as $g)
                            <option value="{{$g->id}}">{{$g->nome}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-4" id="form-raca">
                    <label for="raca">Raça:</label>
                    <select id="raca" class="form-control" name="raca">
                        <option selected value="">Raça</option>
                        @foreach ($racas as $r)
                            <option value="{{$r->id}}">{{$r->nome}}</option>
                        @endforeach
                    </select>
                </div>

                <div class="col-4" id="form-conflito">
                    <label for="conflito">conflito:</label>
                    <select id="conflito" class="form-control" name="conflito">
                        <option selected value="">Conflito</option>
                        @foreach ($conflitos as $c)
                            <option value="{{$c->id}}">{{$c->nome}}</option>
                        @endforeach
                    </select>
                </div>
            </div>

        <div style="text-align: center;" id="botoes">   
            <button class="btn btn-primary" type="submit">Cadastrar</button>
        </div>
        
    </form>
    
    @endsection
    
    