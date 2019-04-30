@extends('perfil.layout')
@section('perfil_content')
    <h4>Perfil</h4>
    <hr>
    <form id="form_perfil" action="{{route('perfil.update')}}" method="POST">
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
        <div class="form-group">
            <label for="name">Estado</label>
            <select name="estado_id" id="estado_id" class="form-control">
                <option value="">Selecione</option>
                @foreach($estados as $estado)
                    <option value="{{$estado->id}}"
                            {{($user->cidade && $estado->id == $user->cidade->estado->id) ? 'selected': ''}}>{{$estado->name}}</option>
                @endforeach
            </select>
        </div>
        <div class="form-group">
            <label for="name">Cidade</label>
            <select name="cidade_id" id="cidade_id" class="form-control">
                @foreach($cidades as $cidade)
                    <option value="{{$cidade->id}}"
                            {{$cidade->id == $user->cidade->id ? 'selected': ''}}>{{$cidade->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-default">Salvar</button>
    </form>
@endsection

@section('scripts')
    <script>
        (function ($) {
            var FormPerfil = $('#form_perfil');
            var Estado = FormPerfil.find('#estado_id');
            var Cidade = FormPerfil.find('#cidade_id');

            Estado.change(function () {
                if (!$(this).val()) {
                    Cidade.html('');

                    return false;
                }

                $.get('perfil/cidades/' + $(this).val(), function (options) {
                    Cidade.html(options);
                });
            });
        })(jQuery);
    </script>
@endsection