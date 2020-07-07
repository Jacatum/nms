@extends('layout.app')

@section('body')
        <table class="table table-striped">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Farm</th>
                    <th scope="col">Portal</th>
                    <th scope="col">Sentinela</th>
                    <th scope="col">Tempestade</th>
                    <th scope="col">Agua</th>
                    <th scope="col">Tipo</th>
                    <th scope="col">Clima</th>
                    <th scope="col">Sistema</th>
                    <th scope="col">Minerias</th>
                    <th scope="col">Biologicos</th>
                    <th style="text-align: center" scope="col">Editar</th>
                </tr>
            </thead>
            
                <tbody>
                    <tr>
                        <th scope="row">{{$planeta->id}}</th>
                        <td>{{$planeta->nome}}</td>
                        <td>{{$planeta->farm}}</td>
                        <td>{{$planeta->portal}}</td>
                        <td>{{$planeta->sentinela}}</td>
                        <td>{{$planeta->tempestade}}</td>
                        <td>{{$planeta->agua}}</td>
                        <td>{{$planeta->tipo->nome}}</td>
                        <td>{{$planeta->clima->nome}}</td>
                        <td>{{$planeta->sistema->nome}}</td>
                        <td>
                            @foreach ($planeta->minerais as $mi)
                                {{$mi->nome}},<br>
                            @endforeach
                        </td>
                        <td>
                            @foreach ($planeta->biologicos as $bi)
                                {{$bi->nome}},<br>
                            @endforeach
                        </td>
                        <td style="text-align: center">
                            <a class="btn btn-sm btn-primary" href=""><i class="fa fa-pencil"></i></a>
                            <a class="btn btn-sm btn-danger" href=""><i class="fa fa-trash"></i></a>
                        </td>
                    </tr>
                </tbody>
            
        </table>
@endsection