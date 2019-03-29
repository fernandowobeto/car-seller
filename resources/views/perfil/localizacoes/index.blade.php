@extends('perfil.layout')
@section('perfil_content')
    <h4>Localizações</h4>
    <hr>
    <a class="btn pull-right" href="{{route('perfil.localizacao.form')}}">Adicionar</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th width="100" class="text-right">Código</th>
                <th class="text-left">Descrição</th>
                <th class="text-center" width="60">UF</th>
                <th class="text-center" width="40">#</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($localizacoes as $localizacao)
            <tr>
                <td class="text-right">{{$localizacao->id}}</td>
                <td>{{$localizacao->name}}</td>
                <td class="text-center">{{$localizacao->uf}}</td>
                <td class="text-center">
                    <a href="{{route('perfil.localizacao.form', ['id' => $localizacao->id])}}">
                        <i class="fa fa-pencil"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection