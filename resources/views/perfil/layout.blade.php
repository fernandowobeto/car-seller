@extends('layout')
@section('content')
    <section class="section-padding">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-offset-1 col-md-10 col-sm-12">
                        <div class="section-header">
                            <h2>Dashboard de Usuário</h2>
                            <p>Verifique suas informações pessoais, mensagens e veículos</p>
                        </div>
                        <div class="row">
                            <div class="col-md-2">
                                <ul class="nav nav-pills nav-stacked">
                                    <li><a href="{{route('perfil.perfil')}}">Perfil</a></li>
                                    @if(Auth::user()->isAdmin())
                                        <li><a href="{{route('perfil.marcas')}}">Marcas</a></li>
                                        <li><a href="{{route('perfil.modelos')}}">Modelos</a></li>
                                        <li><a href="{{route('perfil.cores')}}">Cores</a></li>
                                        <li><a href="{{route('perfil.combustiveis')}}">Combustíveis</a></li>
                                        <li><a href="{{route('perfil.cambios')}}">Câmbios</a></li>
                                        <li><a href="{{route('perfil.tipos')}}">Tipos</a></li>
                                        <li><a href="{{route('perfil.opcionais')}}">Opcionais</a></li>
                                        <li><a href="{{route('perfil.adicionais')}}">Adicionais</a></li>
                                        <li><a href="{{route('perfil.cidades')}}">Cidades</a></li>
                                    @endif
                                    <li><a href="{{route('perfil.veiculo.add')}}">Adicionar Veículo</a></li>
                                    <li><a href="{{route('perfil.veiculos')}}">Meus Veículos</a></li>
                                    <li><a href="{{route('perfil.mensagens')}}">Mensagens</a></li>
                                </ul>
                            </div>
                            <div class="col-md-10">
                                <div class="well">
                                    @yield('perfil_content')
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection