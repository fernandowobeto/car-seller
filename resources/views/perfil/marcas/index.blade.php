@extends('perfil.layout')
@section('perfil_content')
    <h4>Marcas</h4>
    <hr>
    <a class="btn pull-right" href="{{route('perfil.marca.form')}}">Adicionar</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th width="100" class="text-right">Código</th>
                <th class="text-left">Descrição</th>
                <th class="text-center" width="40">#</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($marcas as $marca)
            <tr>
                <td class="text-right">{{$marca->id}}</td>
                <td>{{$marca->name}}</td>
                <td class="text-center">
                    <a href="{{route('perfil.marca.form', ['id' => $marca->id])}}">
                        <i class="fa fa-pencil"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection