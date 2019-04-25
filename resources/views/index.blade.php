@extends('layout')
@section('content')
    @yield('content_home')

    <!--Brands-->
    <section class="brand-section gray-bg">
        <div class="container">
            <div class="brand-hadding">
                <h5>Popular Brands</h5>
            </div>
            <div class="brand-logo-list">
                <div id="popular_brands">
                    <div><a href="#"><img src="{{asset('assets/images/brand-logo-1.png')}}" class="img-responsive" alt="image"></a></div>
                    <div><a href="#"><img src="{{asset('assets/images/brand-logo-2.png')}}" class="img-responsive" alt="image"></a></div>
                    <div><a href="#"><img src="{{asset('assets/images/brand-logo-3.png')}}" class="img-responsive" alt="image"></a></div>
                    <div><a href="#"><img src="{{asset('assets/images/brand-logo-4.png')}}" class="img-responsive" alt="image"></a></div>
                    <div><a href="#"><img src="{{asset('assets/images/brand-logo-5.png')}}" class="img-responsive" alt="image"></a></div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Brands-->
@endsection
