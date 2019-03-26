@extends('perfil.layout')
@section('perfil_content')
    <h4>Modelos - Salvar</h4>
    <hr>
    <form action="{{$action}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Descrição</label>
            <input type="text" class="form-control"
                   id="name"
                   name="name"
                   value="{{$modelo->name ?? ''}}"
                   maxlength="40">
        </div>
        <div class="form-group">
            <label for="marca_id">Marca</label>
            <select name="marca_id" id="marca_id" class="form-control">
                @foreach($marcas as $marca)
                    <option
                        value="{{$marca->id}}"
                        {{$marca->id == ($modelo->marca_id ?? '') ? 'selected':''}}
                    >{{$marca->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-default">Salvar</button>
    </form>
@endsection