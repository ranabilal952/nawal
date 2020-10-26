@extends('front.layout')
@section('title')
    US TOUR
@endsection
@section('content')
<section class="pagebg banner">
    <div class="page-header-top"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
            </div>
        </div>
    </div>
</section>

<section class="section grey">
    <div class="pagebefore"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title-bigger text-center"><br><br>
                <h1>US TOURS</h1>
            </div>
        </div>
        <div id="sitewrapper" class="row">
            <div id="content" class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="blog-wrapper col-md-12">
                        <article class="blog-wrap">
                            {{-- <div class="entry blog-media">
                                <a href="single.html"><img src="upload/hotel_05.jpg" class="img-responsive" alt="">
                                </a>
                            </div> --}}
                            {{-- <div class="post-date">
                                <span class="day">12</span>
                                <span class="month">Feb</span>
                            </div> --}}
                            <div class="content">
                                    <blockquote style="font-weight:20px bolder;font-size:18px;
                                    line-height: 1.9;">Touring is the best way to discover the US. From the spectacular national parks and sun-drenched California coast to the historic landmarks on the East Coast and the charm of the South, we offer a number of memorable US vacations for you to truly discover North America. Experience New England's brilliant fall foliage, discover Alaska's breathtaking Denali National Park, sit in reserved seats at Nashville's Grand Ole Opry, visit the famous memorials in Washington DC, and take part in special events such as the Tournament of Roses Parade in Pasadena. Throughout the U.S., we include behind-the-scenes gems that you typically can't do on your own. The following are the top 30 tourist attractions that you must see.</blockquote>

                            </div>
                        </article>
                    </div>
                </div>
            </div>
            {{-- <div id="sidebar" class="col-md-3 col-sm-3 col-xs-12">
                <div class="hotel-widget">
                    <div class="hotel-skills">
                        <div class="custom-title">
                            <h4>Pages</h4>
                            <hr>
                        </div><!-- end widget-title -->
                        <ul class="wp-list">
                            <li><a href="#">HOME</a></li>
                            <li><a href="#">ABOUT US</a></li>
                            <li><a href="#">CONTACT</a></li>
                            <li><a href="#">VISA CONSULTANCY</a></li>
                            <li><a href="#">HOTEL RESERVATIONS</a></li>
                            <li><a href="#">LOGIN</a></li>
                            <li><a href="#">REGISTER</a></li>
                        </ul>
                    </div><!-- end hotel skills -->
                </div><!-- end hotel-widget -->

                <div class="hotel-widget">
                    <div class="hotel-skills">
                        <div class="custom-title">
                            <h4>Other Tours</h4>
                            <hr>
                        </div><!-- end widget-title -->
                        <ul class="wp-list">
                            <li><a href="#">UK TOURS</a></li>
                            <li><a href="#">UAE TOURS</a></li>
                            <li><a href="#">POLAND TOURS</a></li>
                            <li><a href="#">QATAR TOURS</a></li>
                            <li><a href="#">PAKISTAN TOURS</a></li>
                        </ul>
                    </div>
                </div>

            </div> --}}
        </div>
    </div>
</section>
<section class="section gradientgrey">
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title-bigger text-center">
                <h1 >Travelers Choice of <span>Hotels</span></h1><br><br>
               
            </div><!-- end col -->
        </div><!-- end row -->

        <div class="row hotel-list">
            <div class="col-md-4 col-sm-6 col-xs-12 wow fadeIn" data-wow-duration="1s" data-wow-delay="0.2s">
                <div class="hotel-showcase">
                    <div class="post-media hoverentry ">
                        <img src="upload/hotel_showcase_01.png" alt="" class="img-responsive">
                        <div style="text-align: justify;
                        padding: 20px;
                        /* position: relative; */padding-top: 0px;font-weight: 400;" class="hoverbackground justify-content-center align-item-center d-flex" >
                        <h1 class="text-center">helo bilala</h1>
                            <p style="">It's hard to imagine a better symbol of America than the Statue of Liberty. While there are plenty of ways to see the famous lady, a ride on the free Staten Island Ferry is the cheapest. This New York City sightseeing option does not stop at the attraction, though; if you want to go inside, you will need to pay $12 to $21.50 (depending on age) for a Crown Reserve Ticket from Statue Cruises. The ticket includes a cruise to Liberty Island and Ellis Island, as well as crown access. There's also the Pedestal Reserve Ticket option, which only covers entry to the pedestal area and the Statue of Liberty Museum in its $9 to $18.50 per person fee.</p>
                        </div><!-- end hoverbackground -->
                    </div><!-- end media -->
                    <div class="hotel-showcase-title text-center"><br>
                        <h4>ISTANBUL HOTEL </h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
{{-- <section class="section gradientgrey">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 section-title-bigger text-center">
                <h1>TOP TOURIST ATTRACTIONS IN US  </h1>
            </div>
        </div>

        <div id="gallery">
            <div class="portfolio">
                <div class="item-w1 item-h1 box cat1">
                    <div class="entry">
                        <img src="upload/masonry_01.png" alt="" class="img-responsive">
                        <div class="magnifier">
                            <h4 ><a  class="btn  waves-effect waves-light" data-toggle="modal" data-target=".bs-example-modal-lg" href="tour-single.html" title=""><span>Santis</span> Mount</a></h4>
                        </div>
                    </div><!-- entry -->
                </div> 
                <div class="row">
                    <div class="col-md-4 m-t-30">
                        <!--  Modal content for the above example -->
                        <div class="modal fade bs-example-modal-lg" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
                            <div class="modal-dialog modal-lg">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title mt-0" id="myLargeModalLabel">Large modal</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Cras mattis consectetur purus sit amet fermentum.
                                            Cras justo odio, dapibus ac facilisis in,
                                            egestas eget quam. Morbi leo risus, porta ac
                                            consectetur ac, vestibulum at eros.</p>
                                        <p>Praesent commodo cursus magna, vel scelerisque
                                            nisl consectetur et. Vivamus sagittis lacus vel
                                            augue laoreet rutrum faucibus dolor auctor.</p>
                                        <p>Aenean lacinia bibendum nulla sed consectetur.
                                            Praesent commodo cursus magna, vel scelerisque
                                            nisl consectetur et. Donec sed odio dui. Donec
                                            ullamcorper nulla non metus auctor
                                            fringilla.</p>
                                    </div>
                                </div><!-- /.modal-content -->
                            </div><!-- /.modal-dialog -->
                        </div><!-- /.modal -->
                    </div>
            
                </div>
                <div class="item-w1 item-h1 box cat2">
                    <div class="entry">
                        <img src="upload/masonry_02.png" alt="" class="img-responsive">
                        <div class="magnifier">
                            <h4><a href="tour-single.html" title=""><span>Santis</span> Mount</a></h4>
                            <div class="visible-buttons">

                            </div><!-- end visible-buttons -->
                        </div><!-- end magnifier -->
                    </div><!-- entry -->
                </div>

                <div class="item-w2 item-h1 box cat3">
                    <div class="entry">
                        <img src="upload/masonry_03.png" alt="" class="img-responsive">
                        <div class="magnifier">
                            <h4><a href="tour-single.html" title=""><span>Santis</span> Mount</a></h4>
                            <div class="visible-buttons">

                            </div><!-- end visible-buttons -->
                        </div><!-- end magnifier -->
                    </div><!-- entry -->
                </div>
                <div class="item-w1 item-h1 box cat1">
                    <div class="entry">
                        <img src="upload/masonry_04.png" alt="" class="img-responsive">
                        <div class="magnifier">
                            <h4><a href="tour-single.html" title=""><span>Santis</span> Mount</a></h4>
                            <div class="visible-buttons">

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
                            </div>
                        </div>
                    </div>
                </div>                  <div class="item-w1 item-h1 box cat1">
                    <div class="entry">
                        <img src="upload/masonry_01.png" alt="" class="img-responsive">
                        <div class="magnifier">
                            <h4><a href="tour-single.html" title=""><span>Santis</span> Mount</a></h4>
                            <div class="visible-buttons">
                            </div><!-- end visible-buttons -->
                        </div><!-- end magnifier -->
                    </div><!-- entry -->
                </div>

                <div class="item-w1 item-h1 box cat2">
                    <div class="entry">
                        <img src="upload/masonry_02.png" alt="" class="img-responsive">
                        <div class="magnifier">
                            <h4><a href="tour-single.html" title=""><span>Santis</span> Mount</a></h4>
                            <div class="visible-buttons">

                            </div><!-- end visible-buttons -->
                        </div><!-- end magnifier -->
                    </div><!-- entry -->
                </div>

                <div class="item-w2 item-h1 box cat3">
                    <div class="entry">
                        <img src="upload/masonry_03.png" alt="" class="img-responsive">
                        <div class="magnifier">
                            <h4><a href="tour-single.html" title=""><span>Santis</span> Mount</a></h4>
                            <div class="visible-buttons">

                            </div><!-- end visible-buttons -->
                        </div><!-- end magnifier -->
                    </div><!-- entry -->
                </div>
                <div class="item-w1 item-h1 box cat1">
                    <div class="entry">
                        <img src="upload/masonry_04.png" alt="" class="img-responsive">
                        <div class="magnifier">
                            <h4><a href="tour-single.html" title=""><span>Santis</span> Mount</a></h4>
                            <div class="visible-buttons">

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
                            </div>
                        </div>
                    </div>
                </div>               
                 <div class="item-w1 item-h1 box cat1">
                    <div class="entry">
                        <img src="upload/masonry_01.png" alt="" class="img-responsive">
                        <div class="magnifier">
                            <h4><a href="tour-single.html" title=""><span>Santis</span> Mount</a></h4>
                            <div class="visible-buttons">
                            </div><!-- end visible-buttons -->
                        </div><!-- end magnifier -->
                    </div><!-- entry -->
                </div>

                <div class="item-w1 item-h1 box cat2">
                    <div class="entry">
                        <img src="upload/masonry_02.png" alt="" class="img-responsive">
                        <div class="magnifier">
                            <h4><a href="tour-single.html" title=""><span>Santis</span> Mount</a></h4>
                            <div class="visible-buttons">

                            </div><!-- end visible-buttons -->
                        </div><!-- end magnifier -->
                    </div><!-- entry -->
                </div>

                <div class="item-w2 item-h1 box cat3">
                    <div class="entry">
                        <img src="upload/masonry_03.png" alt="" class="img-responsive">
                        <div class="magnifier">
                            <h4><a href="tour-single.html" title=""><span>Santis</span> Mount</a></h4>
                            <div class="visible-buttons">

                            </div><!-- end visible-buttons -->
                        </div><!-- end magnifier -->
                    </div><!-- entry -->
                </div>
                <div class="item-w1 item-h1 box cat1">
                    <div class="entry">
                        <img src="upload/masonry_04.png" alt="" class="img-responsive">
                        <div class="magnifier">
                            <h4><a href="tour-single.html" title=""><span>Santis</span> Mount</a></h4>
                            <div class="visible-buttons">

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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    

</section> --}}
@endsection