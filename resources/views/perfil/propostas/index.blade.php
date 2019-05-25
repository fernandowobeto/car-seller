@extends('perfil.layout')
@section('perfil_content')
    <h4>Propostas</h4>
    <hr>
    <table class="table table-striped">
        <thead>
        <tr>
            <th width="100" class="text-right">Código</th>
            <th width="110" class="text-center ">Veículo</th>
            <th class="text-left">Nome</th>
            <th width="180" class="text-left">Telefone</th>
            <th class="text-center" width="40">#</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($propostas as $proposta)
            <tr>
                <td class="text-right">{{$proposta->id}}</td>
                <td class="text-center">{{$proposta->placa}}</td>
                <td>{{$proposta->name}}</td>
                <td>{{$proposta->phone}}</td>
                <td class="text-center">
                    <a href="{{route('perfil.propostas.detail', ['id' => $proposta->id])}}">
                        <i class="fa fa-eye"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection