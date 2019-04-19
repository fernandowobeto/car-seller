@extends('perfil.layout')
@section('perfil_content')
    <h4>Veículos</h4>
    <hr>
    <div class="row margin-btm-20">
        <div class="col-md-6">
            <form action="{{route('perfil.veiculos')}}" method="GET">
                <div class="input-group">
                    <input type="text" class="form-control" name="placa" placeholder="Buscar por placa ou código...">
                    <span class="input-group-btn">
                        <button class="btn btn-default" type="submit">
                            <i class="fa fa-search"></i> Buscar
                        </button>
                      </span>
                </div>
            </form>
        </div>
        <div class="col-md-6">
            <a class="btn pull-right" href="{{route('perfil.veiculo.form')}}">
                <i class="fa fa-plus"></i> Adicionar
            </a>
        </div>
    </div>
    <div class="row">
        <table id="table_veiculos" class="table table-striped">
            <thead>
            <tr>
                <th class="text-right" width="70">Código</th>
                <th width="80" class="text-center">Placa</th>
                <th>Marca</th>
                <th>Modelo</th>
                <th>Cor</th>
                <th class="text-center" width="100">Expira</th>
                <th class="text-center" width="150">#</th>
            </tr>
            </thead>
            <tbody>
            @foreach($veiculos as $veiculo)
                <tr>
                    <td class="text-right">{{$veiculo->id}}</td>
                    <td class="text-center">{{$veiculo->placa}}</td>
                    <td>{{$veiculo->marca_name}}</td>
                    <td>{{$veiculo->modelo_name}}</td>
                    <td>{{$veiculo->cor_name}}</td>
                    <td class="{{$veiculo->expired ? 'danger': ''}}">{{date_to_br($veiculo->expires)}}</td>
                    <td class="text-center">
                        <div class="btn-group btn-group-sm" role="group">
                            <button type="button" class="btn btn-default">Renovar</button>
                            <a href="{{route('perfil.veiculo.finalizar', ['id' => $veiculo->id])}}" class="btn btn-default link-finalizar">Finalizar</a>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>
@endsection
@section('scripts')
    <script>
        (function ($) {
            var TableVeiculos = $('#table_veiculos');

            TableVeiculos.find('a.link-finalizar').click(function () {
                if (confirm('Deseja mesmo finalizar o anúncio desse veículo?')) {
                    return true;
                }

                return false;
            });
        })(jQuery)
    </script>
@endsection