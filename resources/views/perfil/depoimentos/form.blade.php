@extends('perfil.layout')
@section('perfil_content')
    <h4>Depoimentos - Salvar</h4>
    <hr>
    @include('form_errors')
    <form action="{{$action}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="name">Nome</label>
            <input type="text" class="form-control"
                   id="name"
                   name="name"
                   value="{{$depoimento->name ?? ''}}"
                   maxlength="100">
        </div>
        <div class="form-group">
            <label for="name">Depoimento</label>
            <textarea name="testimonial" id="testimonial" class="form-control" rows="6">{{$depoimento->testimonial ?? ''}}</textarea>
        </div>
        <button type="submit" class="btn btn-default">Salvar</button>
    </form>
@endsection