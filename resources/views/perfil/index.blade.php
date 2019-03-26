@extends('perfil.layout')
@section('perfil_content')
    <h4>Perfil</h4>
    <hr>
    <form action="{{route('perfil.update')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control"
                   id="name"
                   name="name"
                   value="{{$user->name}}"
                   maxlength="255">
        </div>
        <div class="form-group">
            <label for="name">E-mail</label>
            <input type="text" class="form-control"
                   value="{{$user->email}}"
                   maxlength="255" disabled>
        </div>
        <button type="submit" class="btn btn-default">Salvar</button>
    </form>
@endsection