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


<section class="section gradientgrey">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title-bigger text-center">
                <h1>Travelers Choice of <span>Hotels</span></h1>
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

@endsection
