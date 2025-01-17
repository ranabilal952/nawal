@extends('front.layout')
@section('title')
Home
@endsection
@section('content')

<section class="slider-section">
    <div style="" class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <li data-transition="fade" data-slotamount="1" data-masterspeed="500" data-thumb="upload/slider_bg.jpg"
                    data-saveperformance="off" data-title="Slide">
                    <img src="upload/slider_bg.jpg" alt="fullslide1" data-bgposition="center top" data-bgfit="cover"
                        data-bgrepeat="no-repeat">
                    <div class="tp-caption slider_layer_03 lft tp-resizeme rs-parallaxlevel-9" data-x="300" data-y="100"
                        data-speed="1000" data-start="600" data-easing="Power3.easeInOut" data-splitin="none"
                        data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000"
                        style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><img
                            src="images/dummy.png" alt="" data-lazyload="upload/slider_01.png">
                    </div>
                    <div class="tp-caption slider_layer_03 lft tp-resizeme rs-parallaxlevel-9" data-x="360" data-y="100"
                        data-speed="1000" data-start="800" data-easing="Power3.easeInOut" data-splitin="none"
                        data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000"
                        style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><img
                            src="images/dummy.png" alt="" data-lazyload="upload/slider_02.png">
                    </div>
                    <div class="tp-caption slider_layer_03 lft tp-resizeme rs-parallaxlevel-9" data-x="center"
                        data-y="120" data-speed="1000" data-start="1000" data-easing="Power3.easeInOut"
                        data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                        data-endspeed="1000"
                        style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><img
                            src="images/dummy.png" alt="" data-lazyload="upload/slider_03.png">
                    </div>
                    <div class="tp-caption slider_layer_03 lft tp-resizeme rs-parallaxlevel-9" data-x="890" data-y="380"
                        data-speed="1000" data-start="1200" data-easing="Power3.easeInOut" data-splitin="none"
                        data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000"
                        style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><img
                            src="images/dummy.png" alt="" data-lazyload="upload/slider_04.png">
                    </div>
                    <div class="tp-caption slider_layer_03 hide-on-mobile lft tp-resizeme rs-parallaxlevel-9"
                        data-x="center" data-y="260" data-speed="1000" data-start="1400" data-easing="Power3.easeInOut"
                        data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                        data-endspeed="1000"
                        style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><img
                            src="images/dummy.png" alt="" data-lazyload="upload/slider_05.png">
                    </div>
                    <div class="tp-caption slider_layer_03 lft tp-resizeme rs-parallaxlevel-9" data-x="0" data-y="120"
                        data-speed="1000" data-start="1400" data-easing="Power3.easeInOut" data-splitin="none"
                        data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1" data-endspeed="1000"
                        style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;"><img
                            src="images/dummy.png" alt="" data-lazyload="upload/slider_06.png">
                    </div>

                    <div class="tp-caption slider_layer_01 text-right lft tp-resizeme rs-parallaxlevel-9" data-x="260"
                        data-y="280" data-speed="1000" data-start="1400" data-easing="Power3.easeInOut"
                        data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                        data-endspeed="1000"
                        style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">FIND
                            MORE About our sailing destination,<br> Matinas & suggested itineraries, And make
                        your<br> dream happen here.
                    </div>

                    <div class="tp-caption slider_layer_02 text-left lft tp-resizeme rs-parallaxlevel-9" data-x="600"
                        data-y="285" data-speed="1000" data-start="1400" data-easing="Power3.easeInOut"
                        data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                        data-endspeed="1000"
                        style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">TRAVELING
                        <span>ALWAYS “GOOD IDEA”</span>
                    </div>
                    <div class="tp-caption slider_layer_01 text-left lft tp-resizeme rs-parallaxlevel-9" data-x="604"
                        data-y="320" data-speed="1000" data-start="1400" data-easing="Power3.easeInOut"
                        data-splitin="none" data-splitout="none" data-elementdelay="0.1" data-endelementdelay="0.1"
                        data-endspeed="1000"
                        style="z-index: 9; max-width: auto; max-height: auto; white-space: nowrap;">It leaves you
                        speecless, Then turns you into a Storyteller.
                    </div>
                </li>
            </ul>
        </div>
    </div>
</section>

<section style="padding-left: 115px" class="section gradientgrey">
    {{-- <div class="firstsectionbefore"></div> --}}

    <div style="padding-right: 118px" class="row">
        <div class="col-md-12 section-title-bigger text-center">
            <h1>Book Your Reservation<span></span> </h1>
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
                <input id="form5" type="text" class="form-control max45" value="1" data-rule="quantity">
                <div class="input-group-addon">
                    <a href="javascript:;" class="spin-up" data-spin="up"><i class="fa fa-angle-up"></i></a>
                    <a href="javascript:;" class="spin-down" data-spin="down"><i class="fa fa-angle-down"></i></a>
                </div>
            </div>
        </div>
        <div style="padding-left: 5px" class="form-group">
            <label for="form6">Adult</label><br>
            <div class="input-group spinner" data-trigger="spinner">
                <input id="form6" type="text" class="form-control max50" value="1" data-rule="quantity">
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
    </div><!-- end col -->
    </div><!-- end row -->
    </div>
</section>

<section class="section gradientgrey">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title-bigger text-center">
                <h1 >Travelers Choice of <span>Hotels</span></h1>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut
                    laoreet dolore magna aliquam <br>erat volutpat diam nonummy nibh euismod tincidunt ut laoreet.</p>
            </div><!-- end col -->
        </div><!-- end row -->

        <div class="row hotel-list">
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="hotel-showcase">
                    <div class="post-media hoverentry">
                        <img src="upload/hotel_showcase_01.png" alt="" class="img-responsive">
                        <div class="hoverbackground">
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div><!-- end rating -->
                            <h4><a href="tour-single.html">FOUR POINT HOTEL</a></h4>
                            <div class="detailsof">
                                <a class="detailhover1" href="#">Details</a>
                                <a class="detailhover2" href="#">98<sup>$</sup> <small>per night</small></a>
                                <a class="detailhover3" href="#">Booking</a>
                            </div>
                        </div><!-- end hoverbackground -->
                    </div><!-- end media -->
                    <div class="hotel-showcase-title text-center">
                        <div class="rating">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div><!-- end rating -->
                        <h4><a href="tour-single.html" title="">ISTANBUL HOTEL <span>Asia</span></a></h4>
                        <span class="hotel-showcase-price"><i class="fa fa-diamond"></i> $12.00</span>
                    </div><!-- end title -->
                </div><!-- end hotel-showcase -->
            </div><!-- end col -->
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.4s">
                <div class="hotel-showcase">
                    <div class="post-media hoverentry">
                        <img src="upload/hotel_showcase_02.png" alt="" class="img-responsive">
                        <div class="hoverbackground">
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div><!-- end rating -->
                            <h4><a href="tour-single.html">FOUR POINT HOTEL</a></h4>
                            <div class="detailsof">
                                <a class="detailhover1" href="#">Details</a>
                                <a class="detailhover2" href="#">64<sup>$</sup> <small>per night</small></a>
                                <a class="detailhover3" href="#">Booking</a>
                            </div>
                        </div><!-- end hoverbackground -->
                    </div><!-- end media -->
                    <div class="hotel-showcase-title text-center">
                        <div class="rating">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div><!-- end rating -->
                        <h4><a href="tour-single.html" title="">FOUR POINT HOTEL <span>Asia</span></a></h4>
                        <span class="hotel-showcase-price"><i class="fa fa-diamond"></i> $12.00</span>
                    </div><!-- end title -->
                </div><!-- end hotel-showcase -->
            </div><!-- end col -->
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.6s">
                <div class="hotel-showcase">
                    <div class="post-media hoverentry">
                        <img src="upload/hotel_showcase_03.png" alt="" class="img-responsive">
                        <div class="hoverbackground">
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div><!-- end rating -->
                            <h4><a href="tour-single.html">FOUR POINT HOTEL</a></h4>
                            <div class="detailsof">
                                <a class="detailhover1" href="#">Details</a>
                                <a class="detailhover2" href="#">44<sup>$</sup> <small>per night</small></a>
                                <a class="detailhover3" href="#">Booking</a>
                            </div>
                        </div><!-- end hoverbackground -->
                    </div><!-- end media -->
                    <div class="hotel-showcase-title text-center">
                        <div class="rating">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div><!-- end rating -->
                        <h4><a href="tour-single.html" title="">SHERATON HOTEL <span>Asia</span></a></h4>
                        <span class="hotel-showcase-price"><i class="fa fa-diamond"></i> $12.00</span>
                    </div><!-- end title -->
                </div><!-- end hotel-showcase -->
            </div><!-- end col -->
            <div class="col-md-3 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.8s">
                <div class="hotel-showcase">
                    <div class="post-media hoverentry">
                        <img src="upload/hotel_showcase_04.png" alt="" class="img-responsive">
                        <div class="hoverbackground">
                            <div class="rating">
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                                <i class="fa fa-star-o"></i>
                            </div><!-- end rating -->
                            <h4><a href="tour-single.html">FOUR POINT HOTEL</a></h4>
                            <div class="detailsof">
                                <a class="detailhover1" href="#">Details</a>
                                <a class="detailhover2" href="#">21<sup>$</sup> <small>per night</small></a>
                                <a class="detailhover3" href="#">Booking</a>
                            </div>
                        </div><!-- end hoverbackground -->
                    </div><!-- end media -->

                    <div class="hotel-showcase-title text-center">
                        <div class="rating">
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                            <i class="fa fa-star-o"></i>
                        </div><!-- end rating -->
                        <h4><a href="tour-single.html" title="">GLOBAL HOTEL <span>Asia</span></a></h4>
                        <span class="hotel-showcase-price"><i class="fa fa-diamond"></i> $12.00</span>
                    </div><!-- end title -->
                </div><!-- end hotel-showcase -->
            </div><!-- end col -->
        </div><!-- end hotel-list -->
    </div>
</section>

<section class="section white nopadding2">
    <div class="bannerbefore"></div>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12 nopadding bigbanner wow fadeInLeft" data-wow-duration="1s"
                data-wow-delay="0.1s">
                <a href="#"><img src="upload/banner-left.png" alt="" class="img-responsive"></a>
            </div><!-- end 12 -->
            <div class="col-md-6 col-sm-6 col-xs-12 nopadding bigbanner wow fadeInRight" data-wow-duration="1s"
                data-wow-delay="0.1s">
                <a href="#"><img src="upload/banner-right.png" alt="" class="img-responsive"></a>
            </div><!-- end 12 -->
        </div><!-- end row -->
    </div><!-- end container -->
</section><!-- end section -->

<section class="section white client-wrapper">
    <div class="container">
        <div id="owl-client">
            <div class="owl-client-item">
                <a href="#"><img src="upload/client_01.png" alt="" class="img-responsive"></a>
            </div>            
            <div class="owl-client-item">
                <a href="#"><img src="upload/client_01.png" alt="" class="img-responsive"></a>
            </div>           
             <div class="owl-client-item">
                <a href="#"><img src="upload/client_01.png" alt="" class="img-responsive"></a>
            </div>            
            <div class="owl-client-item">
                <a href="#"><img src="upload/client_01.png" alt="" class="img-responsive"></a>
            </div>           
             <div class="owl-client-item">
                <a href="#"><img src="upload/client_01.png" alt="" class="img-responsive"></a>
            </div>            
            <div class="owl-client-item">
                <a href="#"><img src="upload/client_01.png" alt="" class="img-responsive"></a>
            </div>           
             <div class="owl-client-item">
                <a href="#"><img src="upload/client_01.png" alt="" class="img-responsive"></a>
            </div>            <div class="owl-client-item">
                <a href="#"><img src="upload/client_01.png" alt="" class="img-responsive"></a>
            </div>            
            <div class="owl-client-item">
                <a href="#"><img src="upload/client_01.png" alt="" class="img-responsive"></a>
            </div>            
            <div class="owl-client-item">
                <a href="#"><img src="upload/client_01.png" alt="" class="img-responsive"></a>
            </div>            
            <div class="owl-client-item">
                <a href="#"><img src="upload/client_01.png" alt="" class="img-responsive"></a>
            </div>            
            <div class="owl-client-item">
                <a href="#"><img src="upload/client_01.png" alt="" class="img-responsive"></a>
            </div>            
            <div class="owl-client-item">
                <a href="#"><img src="upload/client_01.png" alt="" class="img-responsive"></a>
            </div>            <div class="owl-client-item">
                <a href="#"><img src="upload/client_01.png" alt="" class="img-responsive"></a>
            </div>          
              <div class="owl-client-item">
                <a href="#"><img src="upload/client_01.png" alt="" class="img-responsive"></a>
            </div>            
            <div class="owl-client-item">
                <a href="#"><img src="upload/client_01.png" alt="" class="img-responsive"></a>
            </div>            
            <div class="owl-client-item">
                <a href="#"><img src="upload/client_01.png" alt="" class="img-responsive"></a>
            </div>           
             <div class="owl-client-item">
                <a href="#"><img src="upload/client_01.png" alt="" class="img-responsive"></a>
            </div>           
             <div class="owl-client-item">
                <a href="#"><img src="upload/client_01.png" alt="" class="img-responsive"></a>
            </div>
            <!-- end owl item -->


        </div><!-- end owl -->
    </div><!-- end container -->
</section><!-- end section -->

<section class="section grey">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 section-title-bigger text-center">
                <h1>Top Destination <span>2016</span> </h1>
                <p>Plan your gateway today</p>
            </div><!-- end col -->
        </div><!-- end row -->

        <div class="text-center clearfix">
            <nav class="portfolio-filter">
                <ul class="list-inline">
                    <li><a class="btn btn-default btn-rounded" href="#" data-filter="*"><i class="fa fa-filter"></i>
                            All</a></li>
                    <li><a class="btn btn-default btn-rounded" href="#" data-filter=".cat1">Asian</a></li>
                    <li><a class="btn btn-default btn-rounded" href="#" data-filter=".cat2">Africa</a></li>
                    <li><a class="btn btn-default btn-rounded" href="#" data-filter=".cat3">Europe</a></li>
                </ul>
            </nav>
        </div><!-- end text-center -->

        <div id="gallery">
            <div class="portfolio">
                <div class="item-w1 item-h1 box cat1">
                    <div class="entry">
                        <img src="upload/masonry_01.png" alt="" class="img-responsive">
                        <div class="magnifier">
                            <h4><a href="tour-single.html" title=""><span>Santis</span> Mount</a></h4>
                            <div class="visible-buttons">
                                <div class="shopbuttons">
                                    <a class="magnibutton" href="tour-single.html" title=""><i
                                            class="fa fa-search"></i></a>
                                    <a class="readbutton" href="tour-single.html" title="">
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </a>
                                    <a class="cartbutton" href="tour-checkout.html" title=""><i
                                            class="icon icon-ShoppingCart"></i></a>
                                </div>
                            </div><!-- end visible-buttons -->
                        </div><!-- end magnifier -->
                    </div><!-- entry -->
                </div><!-- end box -->

                <div class="item-w1 item-h1 box cat2">
                    <div class="entry">
                        <img src="upload/masonry_02.png" alt="" class="img-responsive">
                        <div class="magnifier">
                            <h4><a href="tour-single.html" title=""><span>Santis</span> Mount</a></h4>
                            <div class="visible-buttons">
                                <div class="shopbuttons">
                                    <a class="magnibutton" href="tour-single.html" title=""><i
                                            class="fa fa-search"></i></a>
                                    <a class="readbutton" href="tour-single.html" title="">
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </a>
                                    <a class="cartbutton" href="tour-checkout.html" title=""><i
                                            class="icon icon-ShoppingCart"></i></a>
                                </div>
                            </div><!-- end visible-buttons -->
                        </div><!-- end magnifier -->
                    </div><!-- entry -->
                </div><!-- end box -->

                <div class="item-w2 item-h1 box cat3">
                    <div class="entry">
                        <img src="upload/masonry_03.png" alt="" class="img-responsive">
                        <div class="magnifier">
                            <h4><a href="tour-single.html" title=""><span>Santis</span> Mount</a></h4>
                            <div class="visible-buttons">
                                <div class="shopbuttons">
                                    <a class="magnibutton" href="tour-single.html" title=""><i
                                            class="fa fa-search"></i></a>
                                    <a class="readbutton" href="tour-single.html" title="">
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </a>
                                    <a class="cartbutton" href="tour-checkout.html" title=""><i
                                            class="icon icon-ShoppingCart"></i></a>
                                </div>
                            </div><!-- end visible-buttons -->
                        </div><!-- end magnifier -->
                    </div><!-- entry -->
                </div><!-- end box -->

                <div class="item-w1 item-h1 box cat1">
                    <div class="entry">
                        <img src="upload/masonry_04.png" alt="" class="img-responsive">
                        <div class="magnifier">
                            <h4><a href="tour-single.html" title=""><span>Santis</span> Mount</a></h4>
                            <div class="visible-buttons">
                                <div class="shopbuttons">
                                    <a class="magnibutton" href="tour-single.html" title=""><i
                                            class="fa fa-search"></i></a>
                                    <a class="readbutton" href="tour-single.html" title="">
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </a>
                                    <a class="cartbutton" href="tour-checkout.html" title=""><i
                                            class="icon icon-ShoppingCart"></i></a>
                                </div>
                            </div><!-- end visible-buttons -->
                        </div><!-- end magnifier -->
                    </div><!-- entry -->
                </div><!-- end box -->

                <div class="item-w1 item-h1 box cat2">
                    <div class="entry">
                        <img src="upload/masonry_05.png" alt="" class="img-responsive">
                        <div class="magnifier">
                            <h4><a href="tour-single.html" title=""><span>Santis</span> Mount</a></h4>
                            <div class="visible-buttons">
                                <div class="shopbuttons">
                                    <a class="magnibutton" href="tour-single.html" title=""><i
                                            class="fa fa-search"></i></a>
                                    <a class="readbutton" href="tour-single.html" title="">
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </a>
                                    <a class="cartbutton" href="tour-checkout.html" title=""><i
                                            class="icon icon-ShoppingCart"></i></a>
                                </div>
                            </div><!-- end visible-buttons -->
                        </div><!-- end magnifier -->
                    </div><!-- entry -->
                </div><!-- end box -->

                <div class="item-w2 item-h1 box cat3">
                    <div class="entry">
                        <img src="upload/masonry_06.png" alt="" class="img-responsive">
                        <div class="magnifier">
                            <h4><a href="tour-single.html" title=""><span>Santis</span> Mount</a></h4>
                            <div class="visible-buttons">
                                <div class="shopbuttons">
                                    <a class="magnibutton" href="tour-single.html" title=""><i
                                            class="fa fa-search"></i></a>
                                    <a class="readbutton" href="tour-single.html" title="">
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </a>
                                    <a class="cartbutton" href="tour-checkout.html" title=""><i
                                            class="icon icon-ShoppingCart"></i></a>
                                </div>
                            </div><!-- end visible-buttons -->
                        </div><!-- end magnifier -->
                    </div><!-- entry -->
                </div><!-- end box -->

                <div class="item-w2 item-h1 box cat2">
                    <div class="entry">
                        <img src="upload/masonry_08.png" alt="" class="img-responsive">
                        <div class="magnifier">
                            <h4><a href="tour-single.html" title=""><span>Santis</span> Mount</a></h4>
                            <div class="visible-buttons">
                                <div class="shopbuttons">
                                    <a class="magnibutton" href="tour-single.html" title=""><i
                                            class="fa fa-search"></i></a>
                                    <a class="readbutton" href="tour-single.html" title="">
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </a>
                                    <a class="cartbutton" href="tour-checkout.html" title=""><i
                                            class="icon icon-ShoppingCart"></i></a>
                                </div>
                            </div><!-- end visible-buttons -->
                        </div><!-- end magnifier -->
                    </div><!-- entry -->
                </div><!-- end box -->

                <div class="item-w2 item-h1 box cat1">
                    <div class="entry">
                        <img src="upload/masonry_07.png" alt="" class="img-responsive">
                        <div class="magnifier">
                            <h4><a href="tour-single.html" title=""><span>Santis</span> Mount</a></h4>
                            <div class="visible-buttons">
                                <div class="shopbuttons">
                                    <a class="magnibutton" href="tour-single.html" title=""><i
                                            class="fa fa-search"></i></a>
                                    <a class="readbutton" href="tour-single.html" title="">
                                        <div class="rating">
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                            <i class="fa fa-star-o"></i>
                                        </div>
                                    </a>
                                    <a class="cartbutton" href="tour-checkout.html" title=""><i
                                            class="icon icon-ShoppingCart"></i></a>
                                </div>
                            </div><!-- end visible-buttons -->
                        </div><!-- end magnifier -->
                    </div><!-- entry -->
                </div><!-- end box -->
            </div><!-- end portfolio -->
        </div><!-- /gallery -->
    </div>
</section>

<section class="parallax fullscreen" data-parallax="scroll" data-image-src="upload/parallax_01.jpg">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title text-center">
                <h1>Travelers <span>Says</span></h1>
                <h4>Testimonial from our happy clients</h4>
            </div><!-- end col -->
        </div><!-- end row -->

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="testi-item">
                    <img src="upload/testi_01.png" alt="" class="alignleft">
                    <div class="clearfix">
                        <h4>Caterina <span>Wilson</span></h4>
                        <h5>Paris - France</h5>
                        <span class="social">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                        </span>
                        <div class="testi-desc">
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diamedus nonummy nibh
                                euismod tincidunt ut laoreet dolore magna aliquam erat volutpat sit dolora..</p>
                        </div>
                    </div>
                </div>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

{{-- <section class="section white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title-bigger text-center">
                <h1>Latest <span>News</span> </h1>
                <p>Travel news from our blog</p>
            </div>
        </div>
        <div id="homeblog" class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <article class="blog-wrap">
                    <div class="entry blog-media">
                        <a href="single.html"><img src="upload/home_blog_01.jpg" class="img-responsive" alt=""></a>
                    </div>
                    <div class="post-date">
                        <span class="day">12</span>
                        <span class="month">Feb</span>
                    </div>
                    <div class="post-content">
                        <h2><a href="single.html"><span>Air Africa:</span> Surfing the skies of Morocco</a></h2>
                        <p>Er zijn vele variaties van passages van Lorem Ipsum beschikbaar maar het merendeel heeft te
                            lijden gehad van wijzigingen in een of andere vorm, door ingevoegde humor of willekeu
                            seloofwaardig ogen. Er zijn vele variaties van passages van Lorem Ipsum...</p>
                        <div class="post-meta">
                            <span><i class="fa fa-user"></i> <a href="#">John Doe</a> </span>
                            <span><i class="fa fa-tag"></i> <a href="#">Blog</a> </span>
                            <span><i class="fa fa-comments"></i> <a href="#">1 Comments</a></span>
                            <a href="single.html" class="btn btn-primary btn-xs pull-right">read more</a>
                        </div>
                    </div>
                </article>
            </div>

            <div class="col-md-6 col-sm-6 col-xs-12">
                <article class="blog-wrap">
                    <div class="entry blog-media">
                        <a href="single.html"><img src="upload/home_blog_02.jpg" class="img-responsive" alt=""></a>
                    </div><!-- end blog media -->
                            
                    <div class="post-date">
                        <span class="day">12</span>
                        <span class="month">Feb</span>
                    </div><!-- end post-date -->

                    <div class="post-content">
                        <h2><a href="single.html"><span>Air Africa:</span> Surfing the skies of Morocco</a></h2>
                        <p>Er zijn vele variaties van passages van Lorem Ipsum beschikbaar maar het merendeel heeft te lijden gehad van wijzigingen in een of andere vorm, door ingevoegde humor of willekeu seloofwaardig ogen. Er zijn vele variaties van passages van Lorem Ipsum...</p>
                        <div class="post-meta">
                            <span><i class="fa fa-user"></i> <a href="#">John Doe</a> </span>
                            <span><i class="fa fa-tag"></i> <a href="#">Blog</a> </span>
                            <span><i class="fa fa-comments"></i> <a href="#">1 Comments</a></span>
                            <a href="single.html" class="btn btn-primary btn-xs pull-right">read more</a>
                        </div><!-- end post-meta -->
                    </div><!-- post-content -->
               </article><!-- end blog wrap -->
            </div>
        </div>
    </div>
</section> --}}
@endsection