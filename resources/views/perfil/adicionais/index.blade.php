@extends('perfil.layout')
@section('perfil_content')
    <h4>Adicionais</h4>
    <hr>
    <a class="btn pull-right" href="{{route('perfil.adicional.form')}}">Adicionar</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th width="100" class="text-right">Código</th>
            <th class="text-left">Descrição</th>
            <th class="text-center" width="40">#</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($adicionais as $adicional)
            <tr>
                <td class="text-right">{{$adicional->id}}</td>
                <td>{{$adicional->name}}</td>
                <td class="text-center">
                    <a href="{{route('perfil.adicional.form', ['id' => $adicional->id])}}">
                        <i class="fa fa-pencil"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection