@extends('perfil.layout')
@section('perfil_content')
    <h4>Opcionais</h4>
    <hr>
    <a class="btn pull-right" href="{{route('perfil.opcional.form')}}">Adicionar</a>
    <table class="table table-striped">
        <thead>
            <tr>
                <th width="100" class="text-right">Código</th>
                <th class="text-left">Descrição</th>
                <th class="text-center" width="40">#</th>
            </tr>
        </thead>
        <tbody>
        @foreach ($opcionais as $opcional)
            <tr>
                <td class="text-right">{{$opcional->id}}</td>
                <td>{{$opcional->name}}</td>
                <td class="text-center">
                    <a href="{{route('perfil.opcional.form', ['id' => $opcional->id])}}">
                        <i class="fa fa-pencil"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection