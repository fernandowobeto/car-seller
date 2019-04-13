@extends('perfil.layout')
@section('perfil_content')
    <h4>Adicionando veículo</h4>
    <hr>
    @include('form_errors')
    <form action="{{route('perfil.veiculo.create')}}" method="POST" id="form_veiculo">
        {{csrf_field()}}
        <div class="panel panel-default">
            <div class="panel-heading">Dados Principais</div>
            <div class="panel-body">
                <div class="form-group">
                    <label for="name">Placa</label>
                    <input type="text" class="form-control"
                           id="placa"
                           name="placa"
                           maxlength="7">
                </div>
                <div class="form-group">
                    <label for="name">Marca</label>
                    <select name="marca_id" id="marca_id" class="form-control">
                        <option value="">Selecione</option>
                        @foreach($marcas as $marca)
                            <option value="{{$marca->id}}">{{$marca->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Modelo</label>
                    <select name="modelo_id" id="modelo_id" class="form-control">
                        <option value="">Selecione</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Ano Fabricação</label>
                    <select name="ano_fabricacao" id="ano_fabricacao" class="form-control">
                        <option value="">Selecione</option>
                        @foreach($anos as $ano)
                            <option value="{{$ano}}">{{$ano}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Ano Modelo</label>
                    <select name="ano_modelo" id="ano_modelo" class="form-control">
                        <option value="">Selecione</option>
                        @foreach($anos as $ano)
                            <option value="{{$ano}}">{{$ano}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Câmbio</label>
                    <select name="cambio_id" id="cambio_id" class="form-control">
                        <option value="">Selecione</option>
                        @foreach($cambios as $cambio)
                            <option value="{{$cambio->id}}">{{$cambio->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Combustível</label>
                    <select name="combustivel_id" id="combustivel_id" class="form-control">
                        <option value="">Selecione</option>
                        @foreach($combustiveis as $combustivel)
                            <option value="{{$combustivel->id}}">{{$combustivel->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Cor</label>
                    <select name="cor_id" id="cor_id" class="form-control">
                        <option value="">Selecione</option>
                        @foreach($cores as $cor)
                            <option value="{{$cor->id}}">{{$cor->name}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Portas</label>
                    <select name="quantidade_portas" id="quantidade_portas" class="form-control">
                        @foreach($portas as $porta)
                            <option value="{{$porta}}">{{$porta}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="name">Kilometragem</label>
                    <input type="text" class="form-control"
                           id="kilometragem"
                           name="kilometragem">
                </div>
                <div class="form-group">
                    <label for="name">Valor</label>
                    <input type="text" class="form-control"
                           id="valor"
                           name="valor">
                </div>
                <div class="form-group">
                    <label for="name">Estado</label>
                    <select name="tipo_id" id="tipo_id" class="form-control">
                        @foreach($tipos as $tipo)
                            <option value="{{$tipo->id}}">{{$tipo->name}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Características</div>
            <div class="panel-body">
                <div class="row">
                    @foreach($opcionais as $opcional)
                        <div class="col-md-6">
                            <div class="alert alert-info" role="alert">
                                <input type="checkbox" name="opcional[]" value="{{$opcional->id}}">
                                {{$opcional->name}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">Adicionais</div>
            <div class="panel-body">
                <div class="row">
                    @foreach($adicionais as $adicional)
                        <div class="col-md-6">
                            <div class="alert alert-info" role="alert">
                                <input type="checkbox" name="adicional[]" value="{{$adicional->id}}">
                                {{$adicional->name}}
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
        <button type="submit" class="btn btn-default">Salvar</button>
    </form>
@endsection
@section('scripts')
    <script>
        (function ($) {
            var FormVeiculo = $('#form_veiculo');
            var Marca = FormVeiculo.find('#marca_id');
            var Modelo = FormVeiculo.find('#modelo_id');

            Marca.change(function () {
                if (!$(this).val()) {
                    Modelo.find('option:not(:first)').remove();

                    return false;
                }

                $.get('/perfil/veiculo/modelos/' + $(this).val(), function (options) {
                    Modelo.append(options);
                });
            });
        })(jQuery)
    </script>
@endsection