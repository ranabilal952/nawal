@extends('front.layout')
@section('title')
About
@endsection
@section('content')
<section class="pagebg banner">
    <div class="page-header-top"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{-- <h1> <strong>ABOUT US</strong></h1> --}}
                {{-- <h4>Top hotel in the world</h4> --}}
                <ol class="breadcrumb">
                    {{-- <li><a href="{{('/')}}">Home</a></li>
                    <li class="active">About</li> --}}
                </ol>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
{{-- <div class="container">
    <div class="row">
        <div class="col-md-12 section-title text-center">
            <h1> <span>ABOUT US</span></h1>
            {{-- <h4>Your dream is just click away</h4> --}}
        {{-- </div>
    </div>
</div> --}} 

{{-- <section class="section white">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-widget">
                <div class="second-title text-left">
                    <h1>Blue Bird <span>Services</span></h1>
                    <p>Travel is a symposium & dinner about innovative approaches to spatial design and interior architecture.</p>
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
</section> --}}



<section class="section grey">
    <div class="container">
        <div class="row">
            <div class="col-md-3 about-widget">
                <div class="text-left">
                    <img style="padding-top: 56px;Height:550px" src="images/about.jpg" alt="" class="img-responsive alignright wow fadeIn">
                    <div class="second-widget-title">

                    </div>
                </div><!-- end text-right -->
            </div><!-- end col -->

            <div class="col-md-6 text-widget">
                <div class="second-title text-left section-title-bigger">
                    <h1 style="text-align: center">ABOUT US</h1>
                    <p style="font-weight: bolder;font-size:18px;
                    line-height: 1.3;">Created with the aim to be an easy-to-use platform that would enable
                        travelers to plan & book a holiday experience
                        completely online, Nawal Tours & Consultancy, with its innovative approach, has become the first
                        of its kind
                        holiday planning & booking engine that allows customers to customize, plan and book their entire
                        holiday,
                        online. We offer integrated travel services ranging from Local Tours, International Tours, Hotel
                        Reservations,
                        and Visa Services to customers all around the world. Having served multiple customers
                        with its innovative use of technology, our customer base continues to surge month-on-month..</p>
                        <p style="font-size:18px;
                        line-height: 1.3;">
                            We offer all travel services under one roof. From visa services to flight booking, hotel reservations to transportation, we offer a complete range of services to cater all your travel requirements. We have a team of professionals who have been in the tourism industry for many years and who are extremely determined to provide a different vision for traveling to all clients so that they may experience the best and then return satisfied with our service. Our philosophy is based on the simple concept of delivering the highest quality customer services at the best possible price. Today we serve an ever-growing number of clients, travel agents, and tour operators around the world. All of our partners remain exceedingly happy with our services, especially by the number of value-added services we have on offer
                        </p>
                </div>

                {{-- <div class="row">
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
                </div><!-- end row --> --}}
            </div>            
            <div class="col-md-3 about-widget">
                <div class="text-left">
                    <img style="padding-top: 56px;Height:550px" src="images/about3.jpeg" alt="" class="img-responsive alignright wow fadeIn">
                    <div class="second-widget-title">

                    </div>
                </div><!-- end text-right -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
{{-- <section class="section white">
    <div class="container">
        <div class="row">
            <!-- end col -->
            <div class="col-md-9 text-widget">
                <div class="second-title text-left section-title-bigger">
                    <h1>Nawal Travel Consultants <span> </span></h1>
                    <p style="font-weight: normal;font-weight: bold;font-weight: lighter;font-weight: bolder;font-weight: 200;font-weight: 900">Created with the aim to be an easy-to-use platform that would enable
                        travelers to plan & book a holiday experience
                        completely online, Nawal Tours & Consultancy, with its innovative approach, has become the first
                        of its kind
                        holiday planning & booking engine that allows customers to customize, plan and book their entire
                        holiday,
                        online. We offer integrated travel services ranging from Local Tours, International Tours, Hotel
                        Reservations,
                        and Visa Services to customers all around the world. Having served multiple customers
                        with its innovative use of technology, our customer base continues to surge month-on-month..</p>
                      
                </div>
            </div>
            <div class="col-md-3 about-widget">
                <div class="text-left">
                    <img src="images/about2.jpeg" alt="" class="img-responsive alignright wow fadeIn">
                    <div class="second-widget-title">

                    </div>
                </div><!-- end text-right -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section> --}}
<section class="section white client-wrapper">
    <div class="container">
        <div id="owl-client">
            <div class="owl-client-item">
                <a href="#"><img src="upload/client_01.png" alt="" class="img-responsive"></a>
            </div>
            <!-- end owl item -->

            <div id="owl-client">
                <div class="owl-client-item">
                    <img src="http://www.travel360.com.pk/wp-content/uploads/2019/01/07_PIA_140x80_.png">
                </div>
            </div>           
             <div id="owl-client">
                <div class="owl-client-item">
                    <img src="http://www.travel360.com.pk/wp-content/uploads/2019/01/03_Airblue_140x80_.png">
                </div>
            </div>           
             <div id="owl-client">
                <div class="owl-client-item">
                    <img src="http://www.travel360.com.pk/wp-content/uploads/2019/01/14_Qatar_140x80_.png">
                </div>
            </div>           
             <div id="owl-client">
                <div class="owl-client-item">
                    <img src="http://www.travel360.com.pk/wp-content/uploads/2019/01/09_Emirates_140x80_.png">
                </div>
            </div>            
            <div id="owl-client">
                <div class="owl-client-item">
                    <img src="http://www.travel360.com.pk/wp-content/uploads/2019/01/01_Thai_140x80_-1.png">
                </div>
            </div>           
             <div id="owl-client">
                <div class="owl-client-item">
                    <img src="http://www.travel360.com.pk/wp-content/uploads/2019/01/saree.jpg">
                </div>
            </div>             
            {{-- <div id="owl-client">
                <div class="owl-client-item">
                    <img src="http://www.travel360.com.pk/wp-content/uploads/2019/01/23_saudia_140x80_.png">
                </div>
            </div>            --}}
             <div id="owl-client">
                <div class="owl-client-item">
                    <img src="http://www.travel360.com.pk/wp-content/uploads/2019/01/02_Etihad_140x80_.png">
                </div>
            </div>             
            <div id="owl-client">
                <div class="owl-client-item">
                    <img src="http://www.travel360.com.pk/wp-content/uploads/2019/01/12_Kuwait_140x80_.png">
                </div>
            </div>            
             <div id="owl-client">
                <div class="owl-client-item">
                    <img src="http://www.travel360.com.pk/wp-content/uploads/2019/01/13_Sirlankan_140x80_.png">
                </div>
            </div>             
            <div id="owl-client">
                <div class="owl-client-item">
                    <img src="http://www.travel360.com.pk/wp-content/uploads/2019/01/11_Cathay_140x80_.png">
                </div>
            </div>             
            <div id="owl-client">
                <div class="owl-client-item">
                    <img src="http://www.travel360.com.pk/wp-content/uploads/2019/01/05_Malaysia_140x80_.png">
                </div>
            </div>            
            <div id="owl-client">
                <div class="owl-client-item">
                    <img src="http://www.travel360.com.pk/wp-content/uploads/2019/01/15_Turkish-Air_140x80_.png">
                </div>
            </div>           
             {{-- <div id="owl-client">
                <div class="owl-client-item">
                    <img src="http://www.travel360.com.pk/wp-content/uploads/2019/01/16_british_140x80_.png">
                </div>
            </div>              --}}
            <div id="owl-client">
                <div class="owl-client-item">
                    <img src="http://www.travel360.com.pk/wp-content/uploads/2019/01/18_Gulf_140x80_.png">
                </div>
            </div>            
            <div id="owl-client">
                <div class="owl-client-item">
                    <img src="http://www.travel360.com.pk/wp-content/uploads/2019/01/17_AA_140x80_.png">
                </div>
            </div>            
            <div id="owl-client">
                <div class="owl-client-item">
                    <img src="http://www.travel360.com.pk/wp-content/uploads/2019/01/19_flydubai_140x80_.png">
                </div>
            </div>
        </div><!-- end owl -->
    </div><!-- end container -->
</section><!-- end section -->







<section class="section gradientgrey">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title-bigger text-center">
                <h1>VISA CONSULTANCY<span></span></h1>
                <p style=" font-size:18px;
                line-height: 1.4;">Planning to visit a new country this year? We provide visa assistance services that will prepare your visa application in the most appropriate manner while removing the hassle for you. We'll ensure to maximize your chances of getting visa from almost all major countries where Pakistanis travel for visit purpose. Some of the visas we deal with covers.</p>
                <br>
            </div><!-- end col -->
        </div><!-- end row -->

        <div style="padding-right: 144px"  class="row hotel-list">             
            <div class="col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">

            </div>              
            <div class="col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="hotel-showcase">
                    <div class="post-media hoverentry">
                        <a href=""><img style="height:80.33px; width:165px " src="images/as.svg.png" alt="" class="img-responsive"></a>
                    </div><!-- end media -->
                    <div class="hotel-showcase-title text-center">
                        <h4><a href="tour-single.html" title="">Australia</a></h4>
                    </div><!-- end title -->
                </div><!-- end hotel-showcase -->
            </div>             
            <div class="col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="hotel-showcase">
                    <div class="post-media hoverentry">
                        <a href=""><img style="height:80.33px; width:165px " src="images/can.jpg" alt="" class="img-responsive"></a>
                    </div><!-- end media -->
                    <div class="hotel-showcase-title text-center">
                        <h4><a href="tour-single.html" title="">Canada </a></h4>
                    </div><!-- end title -->
                </div><!-- end hotel-showcase -->
            </div>             
            <div class="col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="hotel-showcase">
                    <div class="post-media hoverentry">
                        <a href=""><img style="height:80.33px; width:165px " src="images/mal.jpg" alt="" class="img-responsive"></a>
                    </div><!-- end media -->
                    <div class="hotel-showcase-title text-center">
                        <h4><a href="tour-single.html" title="">Malaysia </a></h4>
                    </div><!-- end title -->
                </div><!-- end hotel-showcase -->
            </div>                                           
            <div class="col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="hotel-showcase">
                    <div class="post-media hoverentry">
                        <a href=""><img style="height:80.33px; width:165px " src="images/qat.jpg" alt="" class="img-responsive"></a>
                    </div><!-- end media -->
                    <div class="hotel-showcase-title text-center">
                        <h4><a href="tour-single.html" title="">Qatar </a></h4>
                    </div><!-- end title -->
                </div><!-- end hotel-showcase -->
            </div>              
            <div class="col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="hotel-showcase">
                    <div class="post-media hoverentry">
                        <a href=""><img style="height:80.33px; width:165px " src="images/sch.jpg" alt="" class="img-responsive"></a>
                    </div><!-- end media -->
                    <div class="hotel-showcase-title text-center">
                        <h4><a href="tour-single.html" title="">Schengen </a></h4>
                    </div><!-- end title -->
                </div><!-- end hotel-showcase -->
            </div>              
            <div class="col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
            </div>              
            <div class="col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="hotel-showcase">
                    <div class="post-media hoverentry">
                        <a href=""><img style="height:80.33px; width:165px " src="images/sing.jpg" alt="" class="img-responsive"></a>
                    </div><!-- end media -->
                    <div class="hotel-showcase-title text-center">
                        <h4><a href="tour-single.html" title="">Singapore </a></h4>
                    </div><!-- end title -->
                </div><!-- end hotel-showcase -->
            </div>            
            <div class="col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="hotel-showcase">
                    <div class="post-media hoverentry">
                        <a href=""><img style="height:80.33px; width:165px " src="images/thi.jpg" alt="" class="img-responsive"></a>
                    </div><!-- end media -->
                    <div class="hotel-showcase-title text-center">
                        <h4><a href="tour-single.html" title="">Thailand </a></h4>
                    </div><!-- end title -->
                </div><!-- end hotel-showcase -->
            </div>
            <div class="col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="hotel-showcase">
                    <div class="post-media hoverentry">
                        <a href=""><img style="height:80.33px; width:165px " src="images/uk.jpg" alt="" class="img-responsive"></a>
                    </div><!-- end media -->
                    <div class="hotel-showcase-title text-center">
                        <h4><a href="tour-single.html" title="">United Kingdom </a></h4>
                    </div><!-- end title -->
                </div><!-- end hotel-showcase -->
            </div>             
            <div class="col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="hotel-showcase">
                    <div class="post-media hoverentry">
                        <a href=""><img style="height:80.33px; width:165px " src="images/uae.svg.png" alt="" class="img-responsive"></a>
                    </div><!-- end media -->
                    <div class="hotel-showcase-title text-center">
                        <h4><a href="tour-single.html" title="">UAE </a></h4>
                    </div><!-- end title -->
                </div><!-- end hotel-showcase -->
            </div>                          
            <div class="col-md-2 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="hotel-showcase">
                    <div class="post-media hoverentry">
                        <a href=""><img style="height:80.33px; width:165px " src="images/usa.jpg" alt="" class="img-responsive"></a>
                    </div><!-- end media -->
                    <div class="hotel-showcase-title text-center">
                        <h4><a href="tour-single.html" title="">USA </a></h4>
                    </div><!-- end title -->
                </div><!-- end hotel-showcase -->
            </div>                               
        </div>
    </div>
</section>
<section class="section grey">
    <div class="container">
        <div class="row">
            <div class="col-md-12 text-widget">
                <div class="second-title text-left section-title-bigger">
                    <h1>What We Do.<span> </span></h1>
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
</section><!-- end section -->

<!-- end section -->
@endsection