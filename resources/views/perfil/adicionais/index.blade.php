@extends('perfil.layout')
@section('perfil_content')
    <h4>Adicionais</h4>
    <hr>
    <div class="row margin-btm-20">
        <div class="col-md-6">
            <form action="{{route('perfil.adicionais')}}" method="GET">
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
            <a class="btn pull-right" href="{{route('perfil.adicional.form')}}">
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
    </div>
    <div class="row margin-btm-20">
        <div class="col-md-12">
            {{ $adicionais->links() }}
        </div>
    </div>
@endsection