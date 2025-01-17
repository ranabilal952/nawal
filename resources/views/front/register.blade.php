@extends('front.layout')
@section('title')
    Register
@endsection
@section('content')
<section class="pagebg banner">
    <div class="page-header-top"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Register <strong>Account</strong></h1>
                <ol class="breadcrumb">
                <li><a href="{{('/')}}">Home</a></li>
                  <li class="active">Login</li>
                </ol>
            </div><!-- end col -->
        </div><!-- end row -->
    </div><!-- end container -->
</section>
<section class="section grey">
    <div class="pagebefore"></div>
    <div class="container">
        <div class="row">
            <div class="col-md-12  section-title text-center">
                <h1>Welcome <span>Guest</span></h1>
                <p>Please Register Your Account Next U Login Easily.</p>
            </div><!-- end col -->
        </div><!-- end row -->
            <div id="content" class="col-md-12 col-sm-12 col-xs-12">
                <div class="row">
                    <div style="padding-left: 150px" class="col-md-6 col-md-offset-2">
                        <div class="section-title">
                            <h3>Register an account</h3>
                        </div>
                        <form class="form-horizontal standardform row" role="form" id="comp1">
                            <div class="form-group">
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="name1" name="name1" placeholder="First name">
                                </div>
                                <br><br>
                                <div class="col-sm-12">
                                    <input type="text" class="form-control" id="name2" name="name2" placeholder="Last name">
                                </div>
                                <br><br>
                                <div class="col-sm-12">
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Email Address">
                                </div>
                                <br><br>
                                <div class="col-sm-12">
                                    <input type="password" class="form-control" id="password1" name="password1" placeholder="Password">
                                </div>
                            </div>

                            <div class="form-group">
                                <div class="col-sm-12">
                                    <a href="#" class="btn btn-primary btn-block">Create account</a>
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