@extends('perfil.layout')
@section('perfil_content')
    <h4>Modelos</h4>
    <hr>
    <a class="btn pull-right" href="{{route('perfil.modelo.add')}}">Adicionar</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th width="100" class="text-right">Código</th>
                <th class="text-left">Descrição</th>
                <th class="text-left">Marca</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($modelos as $modelo)
            <tr>
                <td class="text-right">{{$modelo->id}}</td>
                <td>{{$modelo->name}}</td>
                <td>{{$modelo->marca_name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection