@extends('perfil.layout')
@section('perfil_content')
    <h4>Cidades - Salvar</h4>
    <hr>
    @include('form_errors')
    <form action="{{route('perfil.cidade.create')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Descrição</label>
            <input type="text" class="form-control"
                   id="name"
                   name="name"
                   maxlength="255">
        </div>
        <div class="form-group">
            <label for="estado_id">Estado</label>
            <select name="estado_id" id="estado_id" class="form-control">
                @foreach($estados as $estado)
                    <option value="{{$estado->id}}">{{$estado->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-default">Salvar</button>
    </form>
@endsection