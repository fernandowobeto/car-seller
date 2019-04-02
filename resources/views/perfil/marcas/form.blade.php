@extends('perfil.layout')
@section('perfil_content')
    <h4>Marcas - Salvar</h4>
    <hr>
    @include('form_errors')
    <form action="{{$action}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Descrição</label>
            <input type="text" class="form-control"
                   id="name"
                   value="{{$marca->name ?? ''}}"
                   name="name" maxlength="40">
        </div>
        <button type="submit" class="btn btn-default">Salvar</button>
    </form>
@endsection