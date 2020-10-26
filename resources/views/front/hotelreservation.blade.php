@extends('front.layout')
@section('title')
    Tours List
@endsection
@section('content')
<section class="pagebg banner">
    <div class="page-header-top"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>List all <strong>Hotels</strong></h1>
                <h4>Top hotel in the world</h4>
                <ol class="breadcrumb">
                  <li><a href="#">Home</a></li>
                  <li class="active">Search</li>
                </ol>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>


<section  style="padding-left: 105px" class="section gradientgrey">
    {{-- <div class="firstsectionbefore"></div> --}}

    <div style="padding-right: 118px" class="row">
        <div class="col-md-12 section-title-bigger text-center">
            <h1>HOTEL BOOKING<span></span> </h1>
            <hr >
            {{-- <p>Plan your gateway today</p> --}}
        </div><!-- end col -->
    </div>
    <form id="search-form" class="form-inline">
        <div style="padding-left: 8px" class="form-group">
            <label for="form1">Your destination</label><br>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-plane" aria-hidden="true"></i></div>
                <input type="location" class="form-control" id="form1" placeholder=" Destination ...">
            </div>
        </div>
        <div style="padding-left: 5px" class="form-group">
            <label for="form2">Check Hotels</label><br>
            <div class="input-group">
                <div class="input-group-addon"><i class="fa fa-bed" aria-hidden="true"></i></div>
                <input type="text" class="form-control max100" id="form2" placeholder="Hotels">
            </div>
        </div>        
        <div style="padding-left: 5px" class="form-group">
            <label for="form2">Date Check in</label><br>
            <div class="input-group">
                <div class="input-group-addon"><img src="" alt=""></div>
                <input type="date" class="form-control max100" id="form2" placeholder="Check in">
            </div>
        </div>
        <div style="padding-left: 5px" class="form-group">
            <label for="form3">Date Check out</label><br>
            <div class="input-group">
                <div class="input-group-addon"><img src="" alt=""></div>
                <input type="date" class="form-control max50" id="form3" placeholder="Check out">
            </div>
        </div>
        <div style="padding-left: 5px" class="form-group">
            <label for="form5">Child</label><br>
            <div class="input-group spinner" data-trigger="spinner">
                <input id="form5" type="text" class="form-control max40" value="1" data-rule="quantity">
                <div class="input-group-addon">
                    <a href="javascript:;" class="spin-up" data-spin="up"><i class="fa fa-angle-up"></i></a>
                    <a href="javascript:;" class="spin-down" data-spin="down"><i class="fa fa-angle-down"></i></a>
                </div>
            </div>
        </div>
        <div style="padding-left: 5px" class="form-group">
            <label for="form6">Adult</label><br>
            <div class="input-group spinner" data-trigger="spinner">
                <input id="form6" type="text" class="form-control max40" value="1" data-rule="quantity">
                <div class="input-group-addon">
                    <a href="javascript:;" class="spin-up" data-spin="up"><i class="fa fa-angle-up"></i></a>
                    <a href="javascript:;" class="spin-down" data-spin="down"><i class="fa fa-angle-down"></i></a>
                </div>
            </div>
        </div>
        <div style="padding-left: 15px" class="form-group">
            <div style="padding-top: 32px" class="input-group ">
                <a class="btn btn-primary" href="#">Get Quote </a>
            </div>
        </div>
    </form>
    </div><!-- end mega menu -->
    </div>
    </div>
    </div>
    </li>
    </ul>
    </li>
    </div>
    </div>
    </div>
</section>
<section style="padding: 18px" class="section grey">
    <div class="container">
        <h5 style="font-weight: bolder;font-size:18px;
        line-height: 1.9;"> Finally planning for your long awaited vacation? Overwhelmed by the preparation put into planning your trip? Then you’ve visited the right place. Planning a trip comes with a lot of hassle! Everything has to be booked and worked out well beforehand and any delays, cancellations or mismanagement can cause  your dream vacation to easily become a nightmare!
            We understand the nerve wrecking and frustrating preparatory phase of a vacation very well, which is why they go  the extra-mile to make your trip as convenient and hassle free as can be, with no unpleasant surprises. We share a strong association with thousands of hotels spread  over the globe, ranging from 5 star luxury hotels, family resorts, airports hotel and the more modest and economically feasible ones. Our strong ties and reputation enable  us to gain discounted prices for hotel bookings which are directly passed on to our customers, giving us leverage over our counterparts..</h5>
            <br>
                <div class="section-title-bigger text-left">
                    <h1>Great Travel Experience at Affordable Prices</h1>
                </div>
            
            <h5 style="font-weight: bolder;font-size:18px;
            line-height: 1.9;">We only deal with the best hotels online that meet our quality standards. Therefore clients can be assured that they are being offered nothing but the best and are being delivered complete value of their money.
                Sort and find the ideal accommodation for you; that work around your budget and have all the facilities to live up to your dream vacation. And then simply book your hotel online, it’s as simple as that!
                We provide customers the convenience to choose, locate and reserve the hotel as per their liking at the best possible prices all within the comfort of their home.</h5>
    </div>
</section>
<section class="section white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-widget">
                <div class="second-title text-left section-title-bigger">
                    <h1>What We Do.<span> </span></h1><br>
                    {{-- <p>Travel is a symposium & dinner about innovative approaches to spatial design and interior architecture.</p> --}}
                </div>
                <div class="row">
                    <div class="col-md-6">
                        <div class="service">
                            <img src="images/icons/icon3.png" alt="" class="alignleft wow fadeIn">
                            <h4><strong>Secure</strong> online transation</h4>
                            <p>Lorem ipsum dolor sit ametidus lians consectetuer adipiscing elit</p>
                        </div><!-- end service -->

                        <div class="service">
                            <img src="images/icons/icon4.png" alt="" class="alignleft wow fadeIn">
                            <h4><strong>Various</strong> payment</h4>
                            <p>Lorem ipsum dolor sit ametidus lians consectetuer adipiscing elit</p>
                        </div><!-- end service -->
                    </div><!-- end col -->
                    <div class="col-md-6">
                        <div class="service">
                            <img src="images/icons/icon5.png" alt="" class="alignleft wow fadeIn">
                            <h4><strong>Most extensive</strong> search</h4>
                            <p>Lorem ipsum dolor sit ametidus lians consectetuer adipiscing elit</p>
                        </div><!-- end service -->

                        <div class="service">
                            <img src="images/icons/icon6.png" alt="" class="alignleft wow fadeIn">
                            <h4><strong>Smart</strong> algorithm</h4>
                            <p>Lorem ipsum dolor sit ametidus lians consectetuer adipiscing elit</p>
                        </div><!-- end service -->
                    </div><!-- end col -->
                </div><!-- end row -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section> 
<section class="section gradientgrey">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title-bigger text-center">
                <h1>MAJOR TOUR DESTINATION<span></span></h1>
                <p style=" font-size:18px;
                line-height: 1.4;">Planning to visit a new country this year? We provide visa assistance services that will prepare your visa application in the most appropriate manner while removing the hassle for you. We'll ensure to maximize your chances of getting visa from almost all major countries where Pakistanis travel for visit purpose. Some of the visas we deal with covers.</p>
                <hr>
            </div><!-- end col -->
        </div><!-- end row -->
        <div class="row hotel-list">
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="hotel-showcase">
                    <div class="post-media hoverentry">
                        <a href=""><img src="upload/hotel_showcase_03.png" alt="" class="img-responsive"></a>
                    </div><!-- end media -->
                    <div class="hotel-showcase-title text-center"><br>
                        <h4><a href="tour-single.html" title="">US TOURS <span></span></a></h4>
                    </div><!-- end title -->
                </div><!-- end hotel-showcase -->
            </div><!-- end col -->
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                <div class="hotel-showcase">
                    <div class="post-media hoverentry">
                        <a href=""><img src="upload/hotel_showcase_03.png" alt="" class="img-responsive"></a>
                    </div><!-- end media -->
                    <div class="hotel-showcase-title text-center"><br>
                        <h4><a href="tour-single.html" title="">UK TOURS </a></h4>
                     
                    </div><!-- end title -->
                </div><!-- end hotel-showcase -->
            </div><!-- end col -->
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                <div class="hotel-showcase">
                    <div class="post-media hoverentry">
                        <a href=""><img src="upload/hotel_showcase_03.png" alt="" class="img-responsive"></a>
                    </div><!-- end media -->
                    <div class="hotel-showcase-title text-center"><br>
                        <h4><a href="tour-single.html" title="">POLAND TOURS </a></h4>
                    </div><!-- end title -->
                </div><!-- end hotel-showcase -->
            </div><!-- end col -->            
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                <div class="hotel-showcase">
                    <div class="post-media hoverentry">
                        <a href=""><img src="upload/hotel_showcase_03.png" alt="" class="img-responsive"></a>
                    </div><!-- end media -->
                    <div class="hotel-showcase-title text-center"><br>
                        <h4><a href="tour-single.html" title="">UAE TOURS </a></h4>
                    </div><!-- end title -->
                </div><!-- end hotel-showcase -->
            </div><!-- end col -->            
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                <div class="hotel-showcase">
                    <div class="post-media hoverentry">
                        <a href=""><img src="upload/hotel_showcase_03.png" alt="" class="img-responsive"></a>
                    </div><!-- end media -->
                    <div class="hotel-showcase-title text-center"><br>
                        <h4><a href="tour-single.html" title="">QATAR TOURS </a></h4>
                    </div><!-- end title -->
                </div><!-- end hotel-showcase -->
            </div><!-- end col -->            
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                <div class="hotel-showcase">
                    <div class="post-media hoverentry">
                        <a href=""><img src="upload/hotel_showcase_03.png" alt="" class="img-responsive"></a>
                    </div><!-- end media -->
                    <div class="hotel-showcase-title text-center"><br>
                        <h4><a href="tour-single.html" title="">PAKISTAN TOURS </a></h4>
                    </div><!-- end title -->
                </div><!-- end hotel-showcase -->
            </div><!-- end col -->
        </div>
        {{-- <h1 style="padding-bottom: 10px" class="section-title-bigger">Looking for a visa of some other country?</h1>
        <h5>  If your concerned destination is not on the list above then <i style="color: red" class="fa fa-phone" aria-hidden="true"></i> <a style="color: red"  href="{{('contact')}}"><strong>Contact Us</strong></a> right now, and our efficient staff will get back to you with details very soon.</h5> --}}
    </div>
</section>
@endsection
