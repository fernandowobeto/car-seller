@extends('perfil.layout')
@section('perfil_content')
    <h4>Localizações - Salvar</h4>
    <hr>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="{{$action}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Descrição</label>
            <input type="text" class="form-control"
                   id="name"
                   name="name"
                   value="{{$localizacao->name ?? ''}}"
                   maxlength="40">
        </div>
        <div class="form-group">
            <label for="name">UF</label>
            <select name="uf" id="uf" class="form-control">
                @foreach($ufs as $uf)
                    <option
                            value="{{$uf}}"
                            {{$uf == ($localizacao->uf ?? '') ? 'selected':''}}
                    >{{$uf}}</option>
                @endforeach;
            </select>
        </div>
        <button type="submit" class="btn btn-default">Salvar</button>
    </form>
@endsection