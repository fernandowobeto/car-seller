@extends('perfil.layout')
@section('perfil_content')
    <h4>Configurações</h4>
    <hr>
    @include('form_errors')
    <form action="{{route('perfil.configuracoes.save')}}" method="POST">
        {{csrf_field()}}
        <div class="form-group">
            <label for="bem_vindo">Bem Vindo</label>
            <textarea name="bem_vindo" id="bem_vindo" class="form-control" rows="4">{{$configuracao->bem_vindo ?? ''}}</textarea>
        </div>
        <div class="form-group">
            <label for="sobre">Sobre</label>
            <textarea name="sobre" id="sobre" class="form-control" rows="4">{{$configuracao->sobre ?? ''}}</textarea>
        </div>
        <div class="form-group">
            <label for="servicos">Serviços</label>
            <textarea name="servicos" id="servicos" class="form-control" rows="4">{{$configuracao->servicos ?? ''}}</textarea>
        </div>
        <div class="form-group">
            <label for="depoimentos">Depoimentos</label>
            <textarea name="depoimentos" id="depoimentos" class="form-control" rows="4">{{$configuracao->depoimentos ?? ''}}</textarea>
        </div>
        <div class="form-group">
            <label for="noticias">Notícias</label>
            <textarea name="noticias" id="noticias" class="form-control" rows="4">{{$configuracao->noticias ?? ''}}</textarea>
        </div>
        <div class="form-group">
            <label for="quem_somos">Quem Somos</label>
            <textarea name="quem_somos" id="quem_somos" class="form-control" rows="4">{{$configuracao->quem_somos ?? ''}}</textarea>
        </div>
        <div class="form-group">
            <label for="nossa_missao">Nossa Missão</label>
            <textarea name="nossa_missao" id="nossa_missao" class="form-control" rows="4">{{$configuracao->nossa_missao ?? ''}}</textarea>
        </div>
        <div class="form-group">
            <label for="porque_escolher">Porque Escolher</label>
            <textarea name="porque_escolher" id="porque_escolher" class="form-control" rows="4">{{$configuracao->porque_escolher ?? ''}}</textarea>
        </div>
        <div class="form-group">
            <label for="">Dias Anúncio</label>
            <input type="text" name="dias_anuncios" id="dias_anuncios" class="form-control" value="{{$configuracao->dias_anuncios ?? ''}}">
        </div>
        <div class="form-group">
            <label for="">Tipo Para Veículos Novos</label>
            <select name="id_tipo_novo_veiculo" id="id_tipo_novo_veiculo" class="form-control">
                <option value="">Selecione</option>
                @foreach($tipos as $tipo)
                    <option
                            value="{{$tipo->id}}"
                            {{option_selected(($configuracao->id_tipo_novo_veiculo ?? '') == $tipo->id)}}
                    >{{$tipo->name}}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-default">Salvar</button>
    </form>
@endsection