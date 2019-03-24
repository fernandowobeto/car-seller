@extends('perfil.layout')
@section('perfil_content')
    <h4>Marcas - Adicionar</h4>
    <hr>
    <form action="{{route('perfil.marca.create')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Descrição</label>
            <input type="text" class="form-control" id="name" name="name" maxlength="40">
        </div>
        <button type="submit" class="btn btn-default">Salvar</button>
    </form>
@endsection