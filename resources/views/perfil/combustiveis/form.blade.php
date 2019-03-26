@extends('perfil.layout')
@section('perfil_content')
    <h4>Combustíveis - Salvar</h4>
    <hr>
    <form action="{{$action}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Descrição</label>
            <input type="text" class="form-control"
                   id="name"
                   name="name"
                   value="{{$combustivel->name ?? ''}}"
                   maxlength="80">
        </div>
        <button type="submit" class="btn btn-default">Salvar</button>
    </form>
@endsection