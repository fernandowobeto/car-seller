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
                            <p>1 - 12 <span>of 50 Results for your search.</span></p>
                        </div>
                        <div class="result-sorting-by">
                            <p>Ordenar por:</p>
                            <form action="#" method="post">
                                <div class="form-group select sorting-select">
                                    <select class="form-control ">
                                        <option>Preço (mais baixo)</option>
                                        <option>Preço (mais alto)</option>
                                        <option>Mais novos</option>
                                    </select>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="row">
                        @foreach(range(1,12) AS $range)
                            <div class="col-md-4 grid_listing">
                                <div class="product-listing-m gray-bg">
                                    <div class="product-listing-img"><a href="#"><img src="assets/images/featured-img-1.jpg" class="img-responsive" alt="image"/> </a>
                                        <div class="label_icon">New</div>
                                        <div class="compare_item">
                                            <div class="checkbox">
                                                <input type="checkbox" value="" id="compare10">
                                                <label for="compare10">Compare</label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-listing-content">
                                        <h5><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a></h5>
                                        <p class="list-price">$89,000</p>
                                        <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>
                                        <ul class="features_list">
                                            <li><i class="fa fa-road" aria-hidden="true"></i>35,000 km</li>
                                            <li><i class="fa fa-tachometer" aria-hidden="true"></i>30.000 miles</li>
                                            <li><i class="fa fa-calendar" aria-hidden="true"></i>2005 model</li>
                                            <li><i class="fa fa-car" aria-hidden="true"></i>Diesel</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                    <div class="pagination">
                        <ul>
                            <li class="current">1</li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                        </ul>
                    </div>
                </div>

                <!--Side-Bar-->
                <aside class="col-md-3 col-md-pull-9">
                    <div class="sidebar_widget">
                        <div class="widget_heading">
                            <h5><i class="fa fa-filter" aria-hidden="true"></i> Encontre seu veículo </h5>
                        </div>
                        <div class="sidebar_filter">
                            <form action="#" method="get">
                                <div class="form-group select">
                                    <select class="form-control">
                                        <option>Localização</option>
                                        <option>Audi</option>
                                        <option>BMW</option>
                                        <option>Nissan</option>
                                        <option>Toyota</option>
                                        <option>Volvo</option>
                                        <option>Mazda</option>
                                        <option>Mercedes-Benz</option>
                                        <option>Lotus</option>
                                    </select>
                                </div>
                                <div class="form-group select">
                                    <select class="form-control">
                                        <option>Marca</option>
                                        <option>Audi</option>
                                        <option>BMW</option>
                                        <option>Nissan</option>
                                        <option>Toyota</option>
                                        <option>Volvo</option>
                                        <option>Mazda</option>
                                        <option>Mercedes-Benz</option>
                                        <option>Lotus</option>
                                    </select>
                                </div>
                                <div class="form-group select">
                                    <select class="form-control">
                                        <option>Modelo</option>
                                        <option>Series 1</option>
                                        <option>Series 2</option>
                                        <option>Series 3</option>
                                        <option>Series 4</option>
                                        <option>Series 6</option>
                                    </select>
                                </div>
                                <div class="form-group select">
                                    <select class="form-control">
                                        <option>Ano Modelo</option>
                                        <option>2016</option>
                                        <option>2015</option>
                                        <option>2014</option>
                                        <option>2013</option>
                                        <option>2012</option>
                                        <option>2011</option>
                                        <option>2010</option>
                                        <option>2009</option>
                                        <option>2008</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Faixa Preço ($) </label>
                                    <input id="price_range" type="text" class="span2" value="" data-slider-min="50" data-slider-max="6000" data-slider-step="5" data-slider-value="[1000,5000]"/>
                                </div>
                                <div class="form-group select">
                                    <select class="form-control">
                                        <option>Tipo</option>
                                        <option>New Car</option>
                                        <option>Used Car</option>
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
                                <li class="gray-bg">
                                    <div class="recent_post_img"><a href="#"><img src="assets/images/post_200x200_1.jpg" alt="image"></a></div>
                                    <div class="recent_post_title"><a href="#">Ford Shelby GT350</a>
                                        <p class="widget_price">$92,000</p>
                                    </div>
                                </li>
                                <li class="gray-bg">
                                    <div class="recent_post_img"><a href="#"><img src="assets/images/post_200x200_2.jpg" alt="image"></a></div>
                                    <div class="recent_post_title"><a href="#">BMW 535i</a>
                                        <p class="widget_price">$92,000</p>
                                    </div>
                                </li>
                                <li class="gray-bg">
                                    <div class="recent_post_img"><a href="#"><img src="assets/images/post_200x200_3.jpg" alt="image"></a></div>
                                    <div class="recent_post_title"><a href="#">Mazda CX-5 SX, V6, ABS, Sunroof </a>
                                        <p class="widget_price">$92,000</p>
                                    </div>
                                </li>
                                <li class="gray-bg">
                                    <div class="recent_post_img"><a href="#"><img src="assets/images/post_200x200_4.jpg" alt="image"></a></div>
                                    <div class="recent_post_title"><a href="#">Ford Shelby GT350 </a>
                                        <p class="widget_price">$92,000</p>
                                    </div>
                                </li>
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