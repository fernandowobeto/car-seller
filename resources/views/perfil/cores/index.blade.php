@extends('perfil.layout')
@section('perfil_content')
    <h4>Cores</h4>
    <hr>
    <a class="btn pull-right" href="{{route('perfil.cor.form')}}">Adicionar</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th width="100" class="text-right">Código</th>
                <th class="text-left">Descrição</th>
                <th class="text-center" width="40">#</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($cores as $cor)
            <tr>
                <td class="text-right">{{$cor->id}}</td>
                <td>{{$cor->name}}</td>
                <td class="text-center">
                    <a href="{{route('perfil.cor.form', ['id' => $cor->id])}}">
                        <i class="fa fa-pencil"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection