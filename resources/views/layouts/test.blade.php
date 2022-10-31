<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Genescor App | Login Page</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet"> 
    <link rel="stylesheet" href="{{asset('plugins/fontawesome-free/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('dist/css/adminlte.min.css')}}">
</head>
<body class="hold-transition layout-top-nav">
<div class="wrapper">
    @include('partials.home.topnav')
    <div class="content-wrapper">
        <div class="content">
            <div class="container">
                <div class="row">
                    <div class="mt-5 card col-xs-12 col-sm-10 col-md-10 col-lg-8 col-sm-offset-1 offset-md-1 offset-lg-2">
                        <div class="card-body row">
                            <div class="col-sm-5" style="background:url({{asset('img/background/genescor-bg-auth-top.png')}}) top left no-repeat; background-size: contain;">
                                <div class="brand-col" style="background:url({{asset('img/background/genescor-bg-auth.png')}}) bottom center no-repeat; background-size: contain;">
                                    <div class="headline">
                                        <div class="brand-logo mb-5"><img src="{{asset('img/logo/genescor-black.png')}}" width="100" height="auto" alt="brand-logo"></div>
                                        <img src="{{asset('img/background/genescor-login-female-user.png')}}" class="img-fluid" style="position: relative; bottom:0px" />
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-7">
                                <div class="card-body login-card-body">
                                    <h4 style="font-style: normal; font-weight: 500;">The Online Resource App for Sickle Cell Disease Warriors</h4>
                                    <h3 style="font-style: normal; font-weight: 600;" class="mt-3">Create Account</h3>
                                    <div class="row">
                                        <div class="col-12">
                                            <ul class="nav nav-pills nav-fill" id="custom-tabs-three-tab" role="tablist">
                                                <li class="nav-item">
                                                    <a class="auth-pill nav-link active" id="custom-tabs-three-home-tab" data-toggle="pill" href="#custom-tabs-three-home" role="tab" aria-controls="custom-tabs-three-home" aria-selected="true">Patient</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class=" auth-pill nav-link" id="custom-tabs-three-profile-tab" data-toggle="pill" href="#custom-tabs-three-profile" role="tab" aria-controls="custom-tabs-three-profile" aria-selected="false">Provider</a>
                                                </li>
                                                <li class="auth-pill nav-item">
                                                    <a class="nav-link auth-pill" id="custom-tabs-three-messages-tab" data-toggle="pill" href="#custom-tabs-three-messages" role="tab" aria-controls="custom-tabs-three-messages" aria-selected="false">Agency</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="tab-content" id="custom-tabs-three-tabContent">
                                        <div class="tab-pane fade show active" id="custom-tabs-three-home" role="tabpanel" aria-labelledby="custom-tabs-three-home-tab">@include('partials.user.patient-form')</div>
                                        <div class="tab-pane fade" id="custom-tabs-three-profile" role="tabpanel" aria-labelledby="custom-tabs-three-profile-tab">@include('partials.user.provider-form')</div>
                                        <div class="tab-pane fade" id="custom-tabs-three-messages" role="tabpanel" aria-labelledby="custom-tabs-three-messages-tab">@include('partials.user.agency-form')</div>
                                    </div>
                                </div>
                                <p class="text-center">Already have an Account? <a href="{{route('login')}}">Login Here</a></p>
                                <div class="row">
                                    <p class="text-center col-4 offset-1 d-flex text-danger"><i class="fa fa-phone-alt fa-xs mr-1"></i>+2348033328792</p>
                                    <p class="text-center col-4 offset-1 d-flex text-danger"><i class="far fa-envelope fa-xs mr-1"></i>info@genescor.com</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    <aside class="control-sidebar control-sidebar-dark"></aside>
    @include('partials.home.footer')
</div>
<script src="{{asset('plugins/jquery/jquery.min.js')}}"></script>
<script src="{{asset('plugins/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
<script src="{{asset('dist/js/adminlte.min.js')}}"></script>
</body>
</html>
