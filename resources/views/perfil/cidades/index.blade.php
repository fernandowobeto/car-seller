@extends('perfil.layout')
@section('perfil_content')
    <h4>Cidades</h4>
    <hr>
    <a class="btn pull-right" href="{{route('perfil.cidade.form')}}">Adicionar</a>
    <table class="table table-striped">
        <thead>
        <tr>
            <th width="100" class="text-right">Código</th>
            <th class="text-left">Nome</th>
            <th width="80">UF</th>
        </tr>
        </thead>
        <tbody>
        @foreach ($cidades as $cidade)
            <tr>
                <td class="text-right">{{$cidade->id}}</td>
                <td>{{$cidade->name}}</td>
                <td class="text-center">{{$cidade->estado->uf}}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <div>
        {{ $cidades->links() }}
    </div>
@endsection
