@extends('index')
@section('content_home')
    <!--Page Header-->
    <section class="page-header listing_page">
        <div class="container">
            <div class="page-header_wrap">
                <div class="page-heading">
                    <h1>Lista de Veículos</h1>
                </div>
                <ul class="coustom-breadcrumb">
                    <li><a href="{{route('home')}}">Inicial</a></li>
                    <li>Lista de Veículos</li>
                </ul>
            </div>
        </div>
        <!-- Dark Overlay-->
        <div class="dark-overlay"></div>
    </section>
    <!-- /Page Header-->

    <!--Listing-grid-view-->
    <section class="listing-page">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-push-3">
                    <div class="result-sorting-wrapper">
                        <div class="sorting-count">
                            <p>{{count($veiculos)}} <span>veículos sendo mostrados.</span></p>
                        </div>
                        <div class="result-sorting-by">
                            <p>Ordenar por:</p>
                            <form id="form_order" action="{{URL::full()}}" method="get">
                                <div class="form-group select sorting-select">
                                    <select class="form-control" id="order" name="order">
                                        <option value="cheaper">Preço (mais baixo)</option>
                                        <option value="expensive">Preço (mais alto)</option>
                                        <option value="newer">Mais novos</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        @foreach($veiculos AS $veiculo)
                            <div class="col-md-4 grid_listing">
                                <div class="product-listing-m gray-bg">
                                    <div class="product-listing-img"><a href="#"><img src="assets/images/car_no_images.jpg" class="img-responsive" alt="image"/> </a>
                                        <div class="label_icon">{{$veiculo->tipo_name}}</div>
                                        <div class="compare_item">
                                            <div class="checkbox">
                                                <input type="checkbox" value="" id="compare10">
                                                <label for="compare10">Comparar</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-listing-content">
                                        <h5><a href="#">{{$veiculo->marca_name}}, {{$veiculo->modelo_name}}</a></h5>
                                        <p class="list-price">R$ {{formata_moeda($veiculo->valor)}}</p>
                                        <div class="car-location">
                                            <span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span>
                                        </div>
                                        <ul class="features_list">
                                            <li><i class="fa fa-road" aria-hidden="true"></i>{{formata_kilometragem($veiculo->kilometragem)}} km</li>
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i>Ano {{$veiculo->ano_fabricacao}}</li>
                                            <li><i class="fa fa-car" aria-hidden="true"></i>{{$veiculo->combustivel_name}}</li>
                                            <li><i class="fa fa-paint-brush" aria-hidden="true"></i>{{$veiculo->cor_name}}</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <?php echo $veiculos->links();?>
                        </div>
                    </div>
                </div>

                <!--Side-Bar-->
                <aside class="col-md-3 col-md-pull-9">
                    <div class="sidebar_widget">
                        <div class="widget_heading">
                            <h5><i class="fa fa-filter" aria-hidden="true"></i> Encontre seu veículo </h5>
                        </div>
                        <div class="sidebar_filter">
                            <form id="form_filter" action="{{route('veiculos')}}" method="get">
                                <div class="form-group select">
                                    <select class="form-control" name="uf">
                                        <option value="">Localização</option>
                                        <?php foreach($estados as $estado): ?>
                                        <option value="<?php echo $estado->uf;?>"><?php echo $estado->name;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group select">
                                    <select class="form-control" id="marca" name="marca">
                                        <option value="">Marca</option>
                                        <?php foreach($marcas as $marca): ?>
                                        <option value="<?php echo $marca->name;?>"
                                                data-id="<?php echo $marca->id;?>">
                                            <?php echo $marca->name;?>
                                        </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group select">
                                    <select class="form-control" id="modelo" name="modelo">
                                        <option value="">Modelo</option>
                                    </select>
                                </div>
                                <div class="form-group select">
                                    <select class="form-control" name="ano">
                                        <option value="">Ano</option>
                                        <?php foreach($anos as $ano): ?>
                                        <option value="<?php echo $ano;?>"><?php echo $ano;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Faixa Preço ($) </label>
                                    <input id="price_range" type="text" class="span2" value="" data-slider-min="100" data-slider-max="150000" data-slider-step="100" data-slider-value="150000">
                                </div>
                                <div class="form-group select">
                                    <select class="form-control" name="tipo">
                                        <option value="">Tipo</option>
                                        <?php foreach($tipos as $tipo): ?>
                                        <option value="<?php echo $tipo->name;?>"><?php echo $tipo->name;?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Buscar</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    @if(Auth::guest())
                        <div class="sidebar_widget sell_car_quote">
                            <div class="white-text div_zindex text-center">
                                <h3>Venda seu veículo</h3>
                                <p>Efetue o login e venda seu veículo agora</p>
                                <a href="{{route('login')}}" class="btn">Login / Cadastro<span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></a></div>
                            <div class="dark-overlay"></div>
                        </div>
                    @endif
                    <div class="sidebar_widget">
                        <div class="widget_heading">
                            <h5><i class="fa fa-car" aria-hidden="true"></i> Últimos Cadastrados</h5>
                        </div>
                        <div class="recent_addedcars">
                            <ul>
                                <?php foreach($ultimos_veiculos as $ultimo): ?>
                                <li class="gray-bg">
                                    <div class="recent_post_img"><a href="#"><img src="assets/images/car_no_images.jpg" alt="image"></a></div>
                                    <div class="recent_post_title"><a href="#">{{$ultimo->marca_name}}, {{$ultimo->modelo_name}}</a>
                                        <p class="widget_price">R$ {{formata_moeda($ultimo->valor)}}</p>
                                    </div>
                                </li>
                                <?php endforeach; ?>
                            </ul>
                        </div>
                    </div>
                </aside>
                <!--/Side-Bar-->
            </div>
        </div>
    </section>
    <!--/Listing-grid-view-->
@endsection

@section('scripts')
    <script>
        (function ($) {
            var FormFilter = $('#form_filter');
            var Marca = FormFilter.find('#marca');
            var Modelo = FormFilter.find('#modelo');

            Marca.change(function () {
                if (!$(this).val()) {
                    Modelo.find('option:not(:first)').remove();

                    return false;
                }

                $.get('/modelos/' + $(this).find('option:selected').data('id'), function (options) {
                    Modelo.append(options);
                });
            });

            FormFilter.submit(function () {
                $(this).find(":input, selected").filter(function () {
                    return !this.value;
                }).attr("disabled", "disabled");

                setTimeout(function () {
                    FormFilter.find(":input, selected").prop("disabled", false);
                }, 1000);

                return true;
            });

            var FormOrder = $('#form_order');

            FormOrder.find('#order').change(function () {
                var order = $(this).val();

                FormOrder.on('submit', function (e) {
                    e.preventDefault();
                    var action = $(this).attr('action');
                    window.location.href = action + "&order=" + order;
                }).submit();
            });
        })(jQuery);
    </script>
@endsection