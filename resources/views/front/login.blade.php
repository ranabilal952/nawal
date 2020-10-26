@extends('front.layout')
@section('title')
    Login
@endsection
@section('content')
<section class="pagebg banner">
    <div class="page-header-top"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Login <strong>Account</strong></h1>
                <ol class="breadcrumb">
                <li><a href="{{('/')}}">Home</a></li>
                  <li class="active">Login</li>
                </ol>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

<section class="section white">
    <div class="pagebefore"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 section-title text-center">
                <h1><span>Login</span></h1>

            </div><!-- end col -->
        </div><!-- end row -->

        <div id="sitewrapper" class="row">
            <div style="padding-left: 237px" id="content" class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div  class="col-md-6 form-center">
                        <div class="section-title">
                            <h3>Login account</h3>
                        </div>
                        <form class="form-horizontal standardform row" role="form" id="comp">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="username" name="username" placeholder="User Name">
                                </div>
                                <br><br>
                                <div class="col-sm-12">
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <a href="#" class="btn btn-primary btn-block">Login Your Account</a>
                                </div>
                            </div>
                        </form>			
                    </div>

                </div><!-- end row -->
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>

@endsection