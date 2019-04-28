@extends('index')
@section('content_home')
    <!--Banner-->
    <section id="banner2">
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Wrapper for slides -->
            <div class="carousel-inner">
                <!--item-1-->
                <div class="item active">
                    <img src="{{asset('assets/images/banner-image-1.jpg')}}" alt="image">
                    <div class="carousel-caption">
                        <div class="banner_text text-center div_zindex white-text">
                            <h1>Compre seu novo ou usado. </h1>
                            <h3>We have more than a thousand cars for you to choose. </h3>
                        </div>
                    </div>
                </div>

                <!--item-2-->
                <div class="item">
                    <img src="{{asset('assets/images/banner-image-2.jpg')}}" alt="image">
                    <div class="carousel-caption">
                        <div class="banner_text text-center div_zindex white-text">
                            <h1>Encontre seu carro dos sonhos.</h1>
                            <h3>Temos milhares de carros a sua escolha. </h3>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                <div class="icon-prev"></div>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                <div class="icon-next"></div>
            </a>
        </div>
    </section>
    <!--/Banner-->
    <!-- Filter-Form -->
    @include('search')
    <!-- /Filter-Form -->
    <!--About-us-->
    <section id="about_us" class="section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h2>Bem vindo ao CarSeller</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
            </div>

            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="about_info">
                        <div class="icon_box">
                            <i class="fa fa-money" aria-hidden="true"></i>
                        </div>
                        <h5>Melhores Preços</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="about_info">
                        <div class="icon_box">
                            <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                        </div>
                        <h5>Compra e Venda</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="about_info">
                        <div class="icon_box">
                            <i class="fa fa-history" aria-hidden="true"></i>
                        </div>
                        <h5>Contato Ágil</h5>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. </p>
                    </div>
                </div>

                <div class="col-md-3 col-sm-6">
                    <div class="about_info">
                        <div class="icon_box">
                            <i class="fa fa-users" aria-hidden="true"></i>
                        </div>
                        <h5>Profissionais</h5>
                        <p>Todos as revendas são avaliadas e certificadas. </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/About-us-->

    <!--Fan-Fact-->
    <section id="fun-facts" class="dark-bg vc_row">
        <div class=" col-md-6 vc_col section-padding">
            <div class="fact_m white-text">
                <h2>Sobre o CallSeller</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>

                <ul>
                    <li>
                        <i class="fa fa-calendar" aria-hidden="true"></i>
                        <h2>40+</h2>
                        <p>Years In Business</p>
                    </li>

                    <li>
                        <i class="fa fa-car" aria-hidden="true"></i>
                        <h2>1200+</h2>
                        <p>New Cars For Sale</p>
                    </li>

                    <li>
                        <i class="fa fa-car" aria-hidden="true"></i>
                        <h2>1000+</h2>
                        <p>Used Cars For Sale</p>
                    </li>

                    <li>
                        <i class="fa fa-user-circle" aria-hidden="true"></i>
                        <h2>600+</h2>
                        <p>Satisfied Customers</p>
                    </li>
                </ul>
            </div>
        </div>
        <div class=" col-md-6 vc_col section-padding">
            <div class="facts_section_bg"></div>
        </div>
    </section>

    <!--/Fan-fact-->

    <!--Featured Car-->
    <section class="section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h2>Últimos Veículos Cadastrados</h2>
            </div>
            <div class="row">
                <?php foreach($ultimos_veiculos as $veiculo): ?>
                <div class="col-list-3">
                    <div class="featured-car-list">
                        <div class="featured-car-img"><a href=""><img src="assets/images/featured-img-1.jpg" class="img-responsive" alt="Image"></a>
                            <div class="label_icon">{{$veiculo->tipo_name}}</div>
                        </div>
                        <div class="featured-car-content">
                            <h6><a href="#">{{$veiculo->marca_name}}, {{$veiculo->modelo_name}}</a></h6>
                            <div class="price_info">
                                <p class="featured-price">R$ {{formata_moeda($veiculo->valor)}}</p>
                                <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> Colorado, USA</span></div>
                            </div>
                            <ul>
                                <li><i class="fa fa-road" aria-hidden="true"></i>{{formata_kilometragem($veiculo->kilometragem)}} km</li>
                                <li><i class="fa fa-calendar" aria-hidden="true"></i>Ano {{$veiculo->ano_fabricacao}}</li>
                                <li><i class="fa fa-car" aria-hidden="true"></i>{{$veiculo->combustivel_name}}</li>
                                <li><i class="fa fa-paint-brush" aria-hidden="true"></i>{{$veiculo->cor_name}}</li>
                            </ul>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- /Featured Car-->

    <!-- Services -->
    <section id="our_services" class="dark-bg vc_row">
        <div class="col-md-6 vc_col section-padding">
            <div class="facts_section_bg"></div>
        </div>

        <div class=" col-md-6 vc_col section-padding">
            <div class="our_services white-text">
                <h2>Our Services</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised
                    words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing
                    hidden in the middle of text. </p>
                <!--Services-info-->
                <div class="services_info">
                    <div class="icon_box">
                        <i class="fa fa-car" aria-hidden="true"></i>
                    </div>
                    <h4><a href="#">Sale News Cars</a></h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
                </div>

                <!--Services-info-->
                <div class="services_info">
                    <div class="icon_box">
                        <i class="fa fa-thumbs-o-up" aria-hidden="true"></i>
                    </div>
                    <h4><a href="#">Sale News Cars</a></h4>
                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- /Services -->

    <!--Testimonial -->
    <section id="testimonial" class="section-padding">
        <div class="container div_zindex">
            <div class="section-header text-center">
                <h2>Our Testimonial</h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
            </div>
            <div class="row">
                <div id="testimonial-slider-2">
                    <div class="testimonial_wrap">
                        <div class="testimonial-img">
                            <img src="assets/images/testimonial-img-1.jpg" alt="image">
                        </div>
                        <div class="testimonial-heading">
                            <h5>Donald Brooks</h5>
                            <span class="client-designation">CEO of xzy company</span>
                        </div>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et
                            quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
                    </div>

                    <div class="testimonial_wrap">
                        <div class="testimonial-img">
                            <img src="assets/images/testimonial-img-2.jpg" alt="image">
                        </div>
                        <div class="testimonial-heading">
                            <h5>Enzo Giovanotelli </h5>
                            <span class="client-designation">CEO of xzy company</span>
                        </div>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et
                            quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
                    </div>

                    <div class="testimonial_wrap">
                        <div class="testimonial-img">
                            <img src="assets/images/testimonial-img-3.jpg" alt="image">
                        </div>
                        <div class="testimonial-heading">
                            <h5>Donald Brooks</h5>
                            <span class="client-designation">CEO of xzy company</span>
                        </div>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et
                            quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
                    </div>

                    <div class="testimonial_wrap">
                        <div class="testimonial-img">
                            <img src="assets/images/testimonial-img-4.jpg" alt="image">
                        </div>
                        <div class="testimonial-heading">
                            <h5>Enzo Giovanotelli </h5>
                            <span class="client-designation">CEO of xzy company</span>
                        </div>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et
                            quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
                    </div>

                    <div class="testimonial_wrap">
                        <div class="testimonial-img">
                            <img src="assets/images/testimonial-img-2.jpg" alt="image">
                        </div>
                        <div class="testimonial-heading">
                            <h5>Enzo Giovanotelli </h5>
                            <span class="client-designation">CEO of xzy company</span>
                        </div>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum deleniti atque corrupti quos dolores et
                            quas molestias excepturi sint occaecati cupiditate non provident, similique sunt .</p>
                    </div>
                </div>
            </div>
        </div>

    </section>
    <!-- /Testimonial-->

    <!-- Help-Number-->
    <section id="help" class="section-padding">
        <div class="container">
            <div class="div_zindex white-text text-center">
                <h2>Have Any Question ?<br>
                    (+61) 123 456 7890</h2>
            </div>
        </div>

        <!-- Dark-overlay-->
        <div class="dark-overlay"></div>
    </section>
    <!-- /Help-Number-->

    <!--Blog -->
    <section class="section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h2>Últimas notícias no mundo automobilistico </h2>
                <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. </p>
            </div>
            <div class="row">
                <?php foreach($ultimas_noticias as $noticia): ?>
                <div class="col-md-4 col-sm-4">
                    <article class="blog-list">
                        <div class="blog-info-box">
                            <a href="#"><img src="{{$noticia->image}}" class="img-responsive" alt="image"></a>
                            <ul>
                                <li><i class="fa fa-calendar" aria-hidden="true"></i>{{$noticia->date_published}}</li>
                            </ul>
                        </div>
                        <div class="blog-content">
                            <h5><a href="#">{{$noticia->title}}</a></h5>
                            <a href="{{$noticia->link}}" target="_blank" class="btn-link">Ler mais <i class="fa fa-long-arrow-right" aria-hidden="true"></i></a></div>
                    </article>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </section>
    <!-- /Blog-->
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

                return true; // ensure form still submits
            });
        })(jQuery);
    </script>
@endsection