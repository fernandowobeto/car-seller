@extends('perfil.layout')
@section('perfil_content')
    <h4>Tipos</h4>
    <hr>
    <a class="btn pull-right" href="{{route('perfil.tipo.form')}}">Adicionar</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th width="100" class="text-right">Código</th>
            <th class="text-left">Descrição</th>
            <th class="text-center" width="40">#</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($tipos as $tipo)
            <tr>
                <td class="text-right">{{$tipo->id}}</td>
                <td>{{$tipo->name}}</td>
                <td class="text-center">
                    <a href="{{route('perfil.tipo.form', ['id' => $tipo->id])}}">
                        <i class="fa fa-pencil"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection