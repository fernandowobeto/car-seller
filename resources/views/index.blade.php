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
        })(jQuery)
    </script>
@endsection
