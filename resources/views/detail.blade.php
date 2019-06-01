@extends('index')
@section('content_home')
    <!-- Listing-detail-header -->
    <section class="listing_detail_header">
        <div class="container">
            <div class="listing_detail_head white-text div_zindex row">
                <div class="col-md-9">
                    <h2>{{$veiculo->marca_name}}, {{$veiculo->modelo_name}}</h2>
                    <div class="car-location"><span><i class="fa fa-map-marker" aria-hidden="true"></i> {{$veiculo->cidade_name}}, {{$veiculo->uf}}</span></div>
                    <div class="add_compare">
                        <div class="checkbox">
                            <input value="" id="compare14" type="checkbox">
                            <label for="compare14">Add to Compare</label>
                        </div>
                        <div class="share_vehicle">
                            <p>Share: <a href="#"><i class="fa fa-facebook-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-twitter-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-linkedin-square" aria-hidden="true"></i></a> <a href="#"><i class="fa fa-google-plus-square" aria-hidden="true"></i></a></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="price_info">
                        <p>R$ {{formata_moeda($veiculo->valor)}}</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="dark-overlay"></div>
    </section>
    <!-- /Listing-detail-header -->

    <section class="listing_other_info secondary-bg">
        <div class="container">
            <div id="filter_toggle" class="search_other"><i class="fa fa-filter" aria-hidden="true"></i> Search Car</div>
            <div id="other_info"><i class="fa fa-info-circle" aria-hidden="true"></i></div>
            <div id="info_toggle">
                <button type="button" data-toggle="modal" data-target="#schedule"><i class="fa fa-car" aria-hidden="true"></i> Schedule Test Drive</button>
                <button type="button" data-toggle="modal" data-target="#make_offer"><i class="fa fa-money" aria-hidden="true"></i> Make an Offer</button>
                <button type="button" data-toggle="modal" data-target="#email_friend"><i class="fa fa-envelope" aria-hidden="true"></i> Email to a Friend</button>
                <button type="button" data-toggle="modal" data-target="#more_info"><i class="fa fa-file-text-o" aria-hidden="true"></i> Request More Info</button>
            </div>
        </div>
    </section>

    <!-- Filter-Form -->
    <section id="filter_form" class="inner-filter gray-bg">
        <div class="container">
            <h3>Find Your Dream Car <span>(Easy search from here)</span></h3>
            <div class="row">
                <form action="#" method="get">
                    <div class="form-group col-md-3 col-sm-6 black_input">
                        <div class="select">
                            <select class="form-control">
                                <option value="">Select Location</option>
                                <option value="">Location 1</option>
                                <option value="">Location 1</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-3 col-sm-6 black_input">
                        <div class="select">
                            <select class="form-control">
                                <option>Select Brand</option>
                                <option>Audi</option>
                                <option>BMW</option>
                                <option>Nissan</option>
                                <option>Toyota</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-3 col-sm-6 black_input">
                        <div class="select">
                            <select class="form-control">
                                <option>Select Model</option>
                                <option>Series 1</option>
                                <option>Series 2</option>
                                <option>Series 3</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-3 col-sm-6 black_input">
                        <div class="select">
                            <select class="form-control">
                                <option>Year of Model</option>
                                <option>2016</option>
                                <option>2015</option>
                                <option>2014</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-6 col-sm-6 black_input">
                        <label class="form-label">Price Range ($)</label>
                        <input id="price_range" type="text" class="span2" value="" data-slider-min="50" data-slider-max="6000" data-slider-step="5" data-slider-value="[1000,5000]"/>
                    </div>
                    <div class="form-group col-md-3 col-sm-6 black_input">
                        <div class="select">
                            <select class="form-control">
                                <option>Type of Car</option>
                                <option>New Car</option>
                                <option>Used Car</option>
                            </select>
                        </div>
                    </div>
                    <div class="form-group col-md-3 col-sm-6">
                        <button type="submit" class="btn btn-block"><i class="fa fa-search" aria-hidden="true"></i> Search Car</button>
                    </div>
                </form>
            </div>
        </div>
    </section>
    <!-- /Filter-Form -->

    <!--Listing-detail-->
    <section class="listing-detail">
        <div class="container">
            <div class="row">
                <div class="col-md-9">
                    <div class="listing_images">
                        <div class="listing_images_slider">
                            @if(count($veiculo->images))
                                @foreach($veiculo->images as $image)
                                    <div>
                                        <img src="{{url('uploads/cars/'.$veiculo->id.'/'.$image)}}" alt="image">
                                    </div>
                                @endforeach
                            @else
                                <div>
                                    <img src="{{url('assets/images/car_no_images.jpg')}}" alt="image"/>
                                </div>
                            @endif
                        </div>
                        <div class="listing_images_slider_nav">
                            @if(count($veiculo->images))
                                @foreach($veiculo->images as $image)
                                    <div>
                                        <img src="{{url('uploads/cars/'.$veiculo->id.'/'.$image)}}" alt="image">
                                    </div>
                                @endforeach
                            @else
                                <div>
                                    <img src="{{url('assets/images/car_no_images.jpg')}}" alt="image"/>
                                </div>
                            @endif
                        </div>
                    </div>
                    <div class="main_features">
                        <ul>
                            <li><i class="fa fa-tachometer" aria-hidden="true"></i>
                                <h5>13,000</h5>
                                <p>Total Kilometres</p>
                            </li>
                            <li><i class="fa fa-calendar" aria-hidden="true"></i>
                                <h5>2010</h5>
                                <p>Reg.Year</p>
                            </li>
                            <li><i class="fa fa-cogs" aria-hidden="true"></i>
                                <h5>Diesel</h5>
                                <p>Fuel Type</p>
                            </li>
                            <li><i class="fa fa-power-off" aria-hidden="true"></i>
                                <h5>Automatic</h5>
                                <p>Transmission</p>
                            </li>
                            <li><i class="fa fa-superpowers" aria-hidden="true"></i>
                                <h5>153KW</h5>
                                <p>Engine</p>
                            </li>
                            <li><i class="fa fa-user-plus" aria-hidden="true"></i>
                                <h5>5</h5>
                                <p>Seats</p>
                            </li>
                        </ul>
                    </div>
                    <div class="listing_more_info">
                        <div class="listing_detail_wrap">
                            <!-- Nav tabs -->
                            <ul class="nav nav-tabs gray-bg" role="tablist">
                                <li role="presentation" class="active"><a href="#vehicle-overview " aria-controls="vehicle-overview" role="tab" data-toggle="tab">Vehicle Overview </a></li>
                                <li role="presentation"><a href="#specification" aria-controls="specification" role="tab" data-toggle="tab">Technical Specification</a></li>
                                <li role="presentation"><a href="#accessories" aria-controls="accessories" role="tab" data-toggle="tab">Accessories</a></li>
                            </ul>

                            <!-- Tab panes -->
                            <div class="tab-content">
                                <!-- vehicle-overview -->
                                <div role="tabpanel" class="tab-pane active" id="vehicle-overview">
                                    <h4>What is Lorem Ipsum?</h4>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                                    <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged.</p>
                                    <h4>What is Lorem Ipsum?</h4>
                                    <p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined with a handful of model sentence structures, to generate Lorem Ipsum which looks reasonable.</p>
                                </div>

                                <!-- Technical-Specification -->
                                <div role="tabpanel" class="tab-pane" id="specification">
                                    <div class="table-responsive">
                                        <!--Basic-Info-Table-->
                                        <table>
                                            <thead>
                                            <tr>
                                                <th colspan="2">BASIC INFO</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Model Year</td>
                                                <td>2010</td>
                                            </tr>
                                            <tr>
                                                <td>No. of Owners</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <td>KMs Driven</td>
                                                <td>30,000</td>
                                            </tr>
                                            <tr>
                                                <td>Fuel Type</td>
                                                <td>Diesel</td>
                                            </tr>
                                            </tbody>
                                        </table>

                                        <!--Technical-Specification-Table-->
                                        <table>
                                            <thead>
                                            <tr>
                                                <th colspan="2">Technical Specification</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <tr>
                                                <td>Engine Type</td>
                                                <td>TDCI Diesel Engine</td>
                                            </tr>
                                            <tr>
                                                <td>Engine Description</td>
                                                <td>1.5KW</td>
                                            </tr>
                                            <tr>
                                                <td>No. of Cylinders</td>
                                                <td>4</td>
                                            </tr>
                                            <tr>
                                                <td>Mileage-City</td>
                                                <td>22.4kmpl</td>
                                            </tr>
                                            <tr>
                                                <td>Mileage-Highway</td>
                                                <td>25.83kmpl</td>
                                            </tr>
                                            <tr>
                                                <td>Fuel Tank Capacity</td>
                                                <td>40 (Liters)</td>
                                            </tr>
                                            <tr>
                                                <td>Seating Capacity</td>
                                                <td>5</td>
                                            </tr>
                                            <tr>
                                                <td>Transmission Type</td>
                                                <td>Manual</td>
                                            </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>

                                <!-- Accessories -->
                                <div role="tabpanel" class="tab-pane" id="accessories">
                                    <!--Accessories-->
                                    <table>
                                        <thead>
                                        <tr>
                                            <th colspan="2">Accessories</th>
                                        </tr>
                                        </thead>
                                        <tbody>
                                        <tr>
                                            <td>Air Conditioner</td>
                                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                        </tr>
                                        <tr>
                                            <td>AntiLock Braking System</td>
                                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Power Steering</td>
                                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Power Windows</td>
                                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                        </tr>
                                        <tr>
                                            <td>CD Player</td>
                                            <td><i class="fa fa-close" aria-hidden="true"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Leather Seats</td>
                                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Central Locking</td>
                                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Power Door Locks</td>
                                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Brake Assist</td>
                                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Driver Airbag</td>
                                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Passenger Airbag</td>
                                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Crash Sensor</td>
                                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Engine Check Warning</td>
                                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                        </tr>
                                        <tr>
                                            <td>Automatic Headlamps</td>
                                            <td><i class="fa fa-check" aria-hidden="true"></i></td>
                                        </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>

                        <!--Vehicle-Video-->
                        <div class="video_wrap">
                            <h6>Watch Video </h6>
                            <div class="video-box">
                                <iframe class="mfp-iframe" src="https://www.youtube.com/embed/rqSoXtKMU3Q" allowfullscreen></iframe>
                            </div>
                        </div>

                        <!--Comment-Form-->
                        <div class="comment_form">
                            <h6>Leave a Comment</h6>
                            <form action="#">
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Full Name">
                                </div>
                                <div class="form-group">
                                    <input type="email" class="form-control" placeholder="Email Address">
                                </div>
                                <div class="form-group">
                                    <textarea rows="5" class="form-control" placeholder="Comments"></textarea>
                                </div>
                                <div class="form-group">
                                    <input type="submit" class="btn" value="Submit Comment">
                                </div>
                            </form>
                        </div>
                        <!--/Comment-Form-->

                    </div>
                </div>

                <!--Side-Bar-->
                <aside class="col-md-3">
                    <div class="sidebar_widget">
                        <div class="widget_heading">
                            <h5><i class="fa fa-calculator" aria-hidden="true"></i> Financing Calculator </h5>
                        </div>
                        <div class="financing_calculatoe">
                            <form action="#" method="get">
                                <div class="form-group">
                                    <label class="form-label">Vehicle Price ($)</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Down Price ($)</label>
                                    <input class="form-control" type="text">
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Interest Rate</label>
                                    <div class="select">
                                        <select class="form-control select">
                                            <option>12%</option>
                                            <option>13%</option>
                                            <option>14%</option>
                                            <option>15%</option>
                                            <option>16%</option>
                                            <option>17%</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="form-label">Period in Years</label>
                                    <div class="select">
                                        <select class="form-control">
                                            <option>3 Year</option>
                                            <option>4 Year</option>
                                            <option>5 Year</option>
                                            <option>6 Year</option>
                                            <option>7 Year</option>
                                            <option>8 Year</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <button type="submit" class="btn btn-block">Calcuate</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="sidebar_widget">
                        <div class="widget_heading">
                            <h5><i class="fa fa-address-card-o" aria-hidden="true"></i> Dealer Contact </h5>
                        </div>
                        <div class="dealer_detail"><img src="assets/images/dealer_img.jpg" alt="image">
                            <p><span>Name:</span> Dealer Name</p>
                            <p><span>Email:</span> contact@example.com</p>
                            <p><span>Phone:</span> +61-1234-5678-09</p>
                            <a href="#" class="btn btn-xs">View Profile</a></div>
                    </div>
                    <div class="sidebar_widget">
                        <div class="widget_heading">
                            <h5><i class="fa fa-envelope" aria-hidden="true"></i> Message to Dealer</h5>
                        </div>
                        <form action="#">
                            <div class="form-group">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="form-group">
                                <textarea rows="4" class="form-control" placeholder="Message"></textarea>
                            </div>
                            <div class="form-group">
                                <input type="submit" value="Send Message" class="btn btn-block">
                            </div>
                        </form>
                    </div>
                </aside>
                <!--/Side-Bar-->

            </div>
            <div class="space-20"></div>
            <div class="divider"></div>

            <!--Similar-Cars-->
            <div class="similar_cars">
                <h3>Similar Cars</h3>
                <div class="row">
                    <div class="col-md-3 grid_listing">
                        <div class="product-listing-m gray-bg">
                            <div class="product-listing-img"><a href="#"><img src="assets/images/featured-img-3.jpg" class="img-responsive" alt="image"/> </a>
                                <div class="label_icon">New</div>
                                <div class="compare_item">
                                    <div class="checkbox">
                                        <input type="checkbox" value="" id="compare13">
                                        <label for="compare13">Compare</label>
                                    </div>
                                </div>
                            </div>
                            <div class="product-listing-content">
                                <h5><a href="#">Maserati QUATTROPORTE 1,6</a></h5>
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
                    <div class="col-md-3 grid_listing">
                        <div class="product-listing-m gray-bg">
                            <div class="product-listing-img"><a href="#"><img src="assets/images/featured-img-1.jpg" class="img-responsive" alt="image"/> </a>
                                <div class="label_icon">New</div>
                                <div class="compare_item">
                                    <div class="checkbox">
                                        <input type="checkbox" value="" id="compare20">
                                        <label for="compare20">Compare</label>
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
                    <div class="col-md-3 grid_listing">
                        <div class="product-listing-m gray-bg">
                            <div class="product-listing-img"><a href="#"><img src="assets/images/featured-img-2.jpg" class="img-responsive" alt="image"/> </a>
                                <div class="label_icon">Used</div>
                                <div class="compare_item">
                                    <div class="checkbox">
                                        <input type="checkbox" value="" id="compare15">
                                        <label for="compare15">Compare</label>
                                    </div>
                                </div>
                            </div>
                            <div class="product-listing-content">
                                <h5><a href="#">Maserati QUATTROPORTE 1,6</a></h5>
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
                    <div class="col-md-3 grid_listing">
                        <div class="product-listing-m gray-bg">
                            <div class="product-listing-img"><a href="#"><img src="assets/images/featured-img-1.jpg" class="img-responsive" alt="image"/> </a>
                                <div class="label_icon">Used</div>
                                <div class="compare_item">
                                    <div class="checkbox">
                                        <input type="checkbox" value="" id="compare16">
                                        <label for="compare16">Compare</label>
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
                </div>
            </div>
            <!--/Similar-Cars-->
        </div>
    </section>
    <!--/Listing-detail-->
@endsection

@section('scripts')

@endsection