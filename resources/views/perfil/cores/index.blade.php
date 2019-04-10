@extends('perfil.layout')
@section('perfil_content')
    <h4>Cores</h4>
    <hr>
    <div class="row margin-btm-20">
        <div class="col-md-6">
            <form action="{{route('perfil.cores')}}" method="GET">
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
            <a class="btn pull-right" href="{{route('perfil.cor.form')}}">
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
    </div>
    <div class="row">
        <div class="col-md-12">
            {{ $cores->links() }}
        </div>
    </div>
@endsection