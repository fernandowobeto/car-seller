@extends('perfil.layout')
@section('perfil_content')
    <h4>Veículos</h4>
    <hr>
    <table class="table table-striped">
        <thead>
        <tr>
            <th class="text-right" width="70">Código</th>
            <th width="80" class="text-center">Placa</th>
            <th>Marca</th>
            <th>Modelo</th>
            <th>Cor</th>
        </tr>
        </thead>
        <tbody>
        @foreach($veiculos as $veiculo)
            <tr>
                <td class="text-right">{{$veiculo->id}}</td>
                <td class="text-center">{{$veiculo->placa}}</td>
                <td>{{$veiculo->marca_name}}</td>
                <td>{{$veiculo->modelo_name}}</td>
                <td>{{$veiculo->cor_name}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection