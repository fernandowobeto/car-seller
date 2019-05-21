<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <title>CarForYou - Responsive Car Dealer HTML5 Template</title>
    <!--Bootstrap -->
    <link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}" type="text/css">
    <!--Custome Style -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" type="text/css">
    <!--OWL Carousel slider-->
    <link rel="stylesheet" href="{{asset('assets/css/owl.carousel.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets/css/owl.transitions.css')}}" type="text/css">
    <!--slick-slider -->
    <link href="{{asset('assets/css/slick.css')}}" rel="stylesheet">
    <!--bootstrap-slider -->
    <link href="{{asset('assets/css/bootstrap-slider.min.css')}}" rel="stylesheet">
    <!--FontAwesome Font Style -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <!-- Element UI -->
    <link rel="stylesheet" href="https://unpkg.com/element-ui/lib/theme-chalk/index.css">
    <!-- SWITCHER -->
    <link rel="stylesheet" id="switcher-css" type="text/css" href="{{asset('assets/switcher/css/switcher.css')}}" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="{{asset('assets/switcher/css/red.css')}}" title="red" media="all" data-default-color="true"/>
    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('assets/images/favicon-icon/apple-touch-icon-144-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{asset('assets/images/favicon-icon/apple-touch-icon-114-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('assets/images/favicon-icon/apple-touch-icon-72-precomposed.png')}}">
    <link rel="apple-touch-icon-precomposed" href="{{asset('assets/images/favicon-icon/apple-touch-icon-57-precomposed.png')}}">
    <link rel="shortcut icon" href="{{asset('assets/images/favicon-icon/favicon.png')}}">
    <!-- Google-Font-->
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,900" rel="stylesheet">
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--Header-->
<header class="header_style2 nav-stacked affix-top" data-spy="affix" data-offset-top="1">
    <!-- Navigation -->
    <nav id="navigation_bar" class="navbar navbar-default">
        <div class="container">
            <div class="navbar-header">
                <div class="logo">
                    <a href="{{route('home')}}"><img src="{{asset('assets/images/logo.png')}}" alt="image"/></a>
                </div>
                <button id="menu_slide" data-target="#navigation" aria-expanded="false" data-toggle="collapse" class="navbar-toggle collapsed" type="button">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <div class="collapse navbar-collapse" id="navigation">
                <ul class="nav navbar-nav">
                    <li><a href="{{route('home')}}">Inicial</a></li>
                    <li><a href="{{route('about')}}">Sobre nós</a></li>
                    <li><a href="about-us.html">Catálogo</a></li>
                    <li><a href="about-us.html">Revendas</a></li>
                </ul>
            </div>

            <div class="header_wrap">
                <div class="user_login">
                    @if(Auth::check())
                        <ul>
                            <li class="dropdown"><a href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fa fa-user-circle" aria-hidden="true"></i></a>
                                <ul class="dropdown-menu">
                                    <li><a href="{{route('perfil.perfil')}}">Perfil</a></li>
                                    <li><a href="{{route('perfil.veiculos')}}">Meus Veículos</a></li>
                                    <li><a href="{{route('perfil.mensagens')}}">Minhas Propostas</a></li>
                                    <li><a href="{{route('logout')}}">Sair</a></li>
                                </ul>
                            </li>
                            <li>{{Auth::user()->name}}</li>
                        </ul>
                    @endif
                </div>
                @if(Auth::guest())
                    <div class="login_btn">
                        <a href="{{route('login')}}" class="btn btn-xs uppercase">Login / Registrar</a>
                    </div>
                @endif
            </div>
        </div>
    </nav>
    <!-- Navigation end -->
</header>
<!-- /Header -->

@yield('content')

<!--Footer -->
<footer>
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <h6>Top Categores</h6>
                    <ul>
                        <li><a href="#">Crossovers</a></li>
                        <li><a href="#">Hybrids</a></li>
                        <li><a href="#">Hybrid Cars</a></li>
                        <li><a href="#">Hybrid SUVs</a></li>
                        <li><a href="#">Concept Vehicles</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h6>About Us</h6>
                    <ul>
                        <li><a href="#">Privacy</a></li>
                        <li><a href="#">Hybrid Cars</a></li>
                        <li><a href="#">Cookies</a></li>
                        <li><a href="#">Trademarks</a></li>
                        <li><a href="#">Terms of use</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h6>Useful Links</h6>
                    <ul>
                        <li><a href="#">Our Partners</a></li>
                        <li><a href="#">Careers</a></li>
                        <li><a href="#">Sitemap</a></li>
                        <li><a href="#">Investors</a></li>
                        <li><a href="#">Request a Quote</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-6">
                    <h6>Inscreva-se na nossa Newsletter</h6>
                    <div class="newsletter-form">
                        <form action="#">
                            <div class="form-group">
                                <input type="email" class="form-control newsletter-input" required placeholder="Digite seu e-mail"/>
                            </div>
                            <button type="submit" class="btn btn-block">Inscrever <span class="angle_arrow"><i class="fa fa-angle-right" aria-hidden="true"></i></span></button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p class="copy-right">Copyright &copy; 2019 CarSeller. Todos os direitos reservados</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- /Footer-->

<!--Back to top-->
<div id="back-top" class="back-top"><a href="#top"><i class="fa fa-angle-up" aria-hidden="true"></i> </a></div>
<!--/Back to top-->

<!-- Scripts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.6.10/vue.min.js"></script>
<script src="https://unpkg.com/element-ui/lib/index.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/element-ui/2.7.2/locale/pt-br.min.js"></script>
<script>
    ELEMENT.locale(ELEMENT.lang.ptBr);
</script>
<script src="{{asset('assets/js/jquery.min.js')}}"></script>
<script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
<script src="{{asset('assets/js/interface.js')}}"></script>
<!--Switcher-->
<script src="{{asset('assets/switcher/js/switcher.js')}}"></script>
<!--bootstrap-slider-JS-->
<script src="{{asset('assets/js/bootstrap-slider.min.js')}}"></script>
<!--Slider-JS-->
<script src="{{asset('assets/js/slick.min.js')}}"></script>
<script src="{{asset('assets/js/owl.carousel.min.js')}}"></script>

@yield('scripts')
</body>
</html>