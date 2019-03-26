@extends('perfil.layout')
@section('perfil_content')
    <h4>Combustíveis</h4>
    <hr>
    <a class="btn pull-right" href="{{route('perfil.combustivel.form')}}">Adicionar</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th width="100" class="text-right">Código</th>
                <th class="text-left">Descrição</th>
                <th class="text-center" width="40">#</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($combustiveis as $combustivel)
            <tr>
                <td class="text-right">{{$combustivel->id}}</td>
                <td>{{$combustivel->name}}</td>
                <td class="text-center">
                    <a href="{{route('perfil.combustivel.form', ['id' => $combustivel->id])}}">
                        <i class="fa fa-pencil"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection