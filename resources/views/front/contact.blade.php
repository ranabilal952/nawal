@extends('front.layout')
@section('title')
    Contact
@endsection
@section('content')
<section class="pagebg banner">
    <div class="page-header-top"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                {{-- <h1>Get <strong>In Touch</strong></h1>
                <h4>Top hotel in the world</h4>
                <ol class="breadcrumb"> --}}
                  {{-- <li><a href="#">Home</a></li>
                  <li class="active">Contact</li>
                </ol> --}}
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<section class="section white">
    <div class="pagebefore"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title-bigger  text-center">
                <h1>Contact <span> Us</span></h1>
                {{-- <h4>Your dream is just click away</h4>
                <br>
                <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam <br>erat volutpat diam nonummy nibh euismod tincidunt ut laoreet.</p> --}}
            </div><!-- end col -->
        </div><!-- end row -->

        <div id="sitewrapper" class="row">
            <div id="content" class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div class="col-md-6 col-sm-6">
                        <form class="form-horizontal standardform row" role="form" id="comp">
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="name" name="name" placeholder="First name">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-6">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
                                </div>
                                <div class="col-sm-6">
                                    <input type="text" class="form-control" id="confirmemail" name="confirmemail" placeholder="Phone Number">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <textarea class="form-control" placeholder="First name"></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <a href="#" class="btn btn-primary btn-block">SEND NOW</a>
                                </div>
                            </div>
                        </form>			
                    </div>

                    <div class="col-md-6">
                        <div id="map">
                            <iframe src="https://www.google.com/maps/d/embed?mid=1JEMsdtHVgRzH4uiZMBlAkmuLKPh15gbx&hl=en" width="100%"  height="380"></iframe>
                        </div>
                    </div>

                </div><!-- end row -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
@endsection