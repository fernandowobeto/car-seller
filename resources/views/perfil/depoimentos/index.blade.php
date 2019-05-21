@extends('perfil.layout')
@section('perfil_content')
    <h4>Depoimentos</h4>
    <hr>
    <div class="row margin-btm-20">
        <div class="col-md-6">
        </div>
        <div class="col-md-6">
            <a class="btn pull-right" href="{{route('perfil.depoimento.form')}}">
                <i class="fa fa-plus"></i>  Adicionar
            </a>
        </div>
    </div>
    <div class="row">
        <table class="table table-striped">
            <thead>
            <tr>
                <th width="100" class="text-right">Código</th>
                <th class="text-left">Nome</th>
                <th class="text-left">Depoimento</th>
                <th class="text-center" width="40">#</th>
            </tr>
            </thead>
            <tbody>
            @foreach ($depoimentos as $depoimento)
                <tr>
                    <td class="text-right">{{$depoimento->id}}</td>
                    <td>{{$depoimento->name}}</td>
                    <td>{{$depoimento->testimonial}}</td>
                    <td class="text-center">
                        <a href="{{route('perfil.depoimento.form', ['id' => $depoimento->id])}}">
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
            {{ $depoimentos->links() }}
        </div>
    </div>
@endsection