@extends('perfil.layout')
@section('perfil_content')
    <h4>Câmbios</h4>
    <hr>
    <a class="btn pull-right" href="{{route('perfil.cambio.form')}}">Adicionar</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th width="100" class="text-right">Código</th>
            <th class="text-left">Descrição</th>
            <th class="text-center" width="40">#</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($cambios as $cambio)
            <tr>
                <td class="text-right">{{$cambio->id}}</td>
                <td>{{$cambio->name}}</td>
                <td class="text-center">
                    <a href="{{route('perfil.cambio.form', ['id' => $cambio->id])}}">
                        <i class="fa fa-pencil"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection