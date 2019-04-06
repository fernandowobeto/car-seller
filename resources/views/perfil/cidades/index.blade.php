@extends('perfil.layout')
@section('perfil_content')
    <h4>Cidades</h4>
    <hr>
    <div class="row margin-btm-20">
        <div class="col-md-6">
            <form action="{{route('perfil.cidades')}}" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" name="name" placeholder="Buscar por nome...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="fa fa-search"></i> Buscar
                        </button>
                      </span>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <a class="btn pull-right" href="{{route('perfil.cidade.form')}}">
                <i class="fa fa-plus"></i>  Adicionar
            </a>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
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
        </div>
    </div>
    <div class="row margin-btm-20">
        <div class="col-md-12">
            {{ $cidades->links() }}
        </div>
    </div>
@endsection
