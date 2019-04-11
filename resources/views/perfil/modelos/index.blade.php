@extends('perfil.layout')
@section('perfil_content')
    <h4>Modelos</h4>
    <hr>
    <div class="row margin-btm-20">
        <div class="col-md-6">
            <form action="{{route('perfil.modelos')}}" method="GET">
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
            <a class="btn pull-right" href="{{route('perfil.modelo.form')}}">
                <i class="fa fa-plus"></i>  Adicionar
            </a>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
            <tr>
                <th width="100" class="text-right">Código</th>
                <th class="text-left">Descrição</th>
                <th class="text-left">Marca</th>
                <th class="text-center" width="40">#</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($modelos as $modelo)
                <tr>
                    <td class="text-right">{{$modelo->id}}</td>
                    <td>{{$modelo->name}}</td>
                    <td>{{$modelo->marca->name}}</td>
                    <td class="text-center">
                        <a href="{{route('perfil.modelo.form', ['id' => $modelo->id])}}">
                            <i class="fa fa-pencil"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
    <div class="row">
        <div class="col-md-12">
            {{ $modelos->links() }}
        </div>
    </div>
@endsection