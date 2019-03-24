@extends('perfil.layout')
@section('perfil_content')
    <h4>Marcas</h4>
    <hr>
    <a class="btn pull-right" href="{{route('perfil.marca.add')}}">Adicionar</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th width="100" class="text-right">Código</th>
                <th class="text-left">Descrição</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($marcas as $marca)
            <tr>
                <td class="text-right">{{$marca->id}}</td>
                <td>{{$marca->name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection