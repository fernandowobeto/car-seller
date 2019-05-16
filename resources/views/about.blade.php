@extends('index')
@section('content_home')
    <!--Page Header-->
    <section class="page-header aboutus_page">
        <div class="container">
            <div class="page-header_wrap">
                <div class="page-heading">
                    <h1>Sobre nós</h1>
                </div>
                <ul class="coustom-breadcrumb">
                    <li><a href="{{route('home')}}">Inicial</a></li>
                    <li>Sobre nós</li>
                </ul>
            </div>
        </div>
        <!-- Dark Overlay-->
        <div class="dark-overlay"></div>
    </section>
    <!-- /Page Header-->

    <!--About-us-->
    <section class="about_us section-padding">
        <div class="container">
            <div class="section-header text-center">
                <h2>Welcome <span>to the Car Seller</span></h2>
                <p>{{$configuracao->bem_vindo}}</p>
            </div>
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <div class="about_content row">
                        <div class="col-md-5 col-sm-4 col-xs-4">
                            <div class="about_img"><img src="assets/images/about_us_img1.jpg" alt="image"></div>
                        </div>
                        <div class="col-md-7 col-sm-8 col-xs-8">
                            <h3>Who <span>Are We</span></h3>
                            <p>{{$configuracao->quem_somos}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6">
                    <div class="about_content row">
                        <div class="col-md-5 col-sm-4 col-xs-4">
                            <div class="about_img"><img src="assets/images/about_us_img2.jpg" alt="image"></div>
                        </div>
                        <div class="col-md-7 col-sm-8 col-xs-8">
                            <h3>Our <span>Mission</span></h3>
                            <p>{{$configuracao->nossa_missao}}</p>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
    </section>
    <!-- /About-us-->

    <!-- Why-Choose-Us-->
    <section class="why_choose_us section-padding gray-bg">
        <div class="container">
            <div class="section-header text-center">
                <h2>Why <span>Choose Us</span></h2>
                <p>{{$configuracao->porque_escolher}}</p>
            </div>
        </div>
    </section>
    <!-- /Why-Choose-Us-->

    <!-- Fun-Facts-->
    <section class="fun-facts-section">
        <div class="container div_zindex">
            <div class="row">
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="fun-facts-m">
                        <div class="cell">
                            <h2><i class="fa fa-calendar" aria-hidden="true"></i>40+</h2>
                            <p>Years In Business</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="fun-facts-m">
                        <div class="cell">
                            <h2><i class="fa fa-car" aria-hidden="true"></i>1200+</h2>
                            <p>New Cars For Sale</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="fun-facts-m">
                        <div class="cell">
                            <h2><i class="fa fa-car" aria-hidden="true"></i>1000+</h2>
                            <p>Used Cars For Sale</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-3 col-xs-6">
                    <div class="fun-facts-m">
                        <div class="cell">
                            <h2><i class="fa fa-user-circle-o" aria-hidden="true"></i>600+</h2>
                            <p>Satisfied Customers</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Dark Overlay-->
        <div class="dark-overlay"></div>
    </section>
    <!-- /Fun-Facts-->
@endsection

@section('scripts')
    <script>
        (function ($) {

        })(jQuery);
    </script>
@endsection