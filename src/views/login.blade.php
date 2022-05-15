
<html lang="en"><head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{cbLang("page_title_login")}} : {{Session::get('appname')}}</title>
    <meta name='generator' content='CRUDBooster'/>
    <meta name='robots' content='noindex,nofollow'/>
    <link rel="shortcut icon"
          href="{{ CRUDBooster::getSetting('favicon')?asset(CRUDBooster::getSetting('favicon')):asset('vendor/crudbooster/assets/logo_crudbooster.png') }}">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="{{ asset('vendor/crudbooster/assets/stisla/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/crudbooster/assets/stisla/all.min.css') }}">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="{{ asset('vendor/crudbooster/assets/stisla/bootstrap-social.css') }}">

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/crudbooster/assets/stisla/style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/crudbooster/assets/stisla/components.css') }}">


    @php
        $mainColor = CRUDBooster::getSetting('login_font_color');

        if(Session::get('theme_color') == 'skin-blue'){
            $mainColor = '#48cae4';
        }else if(Session::get('theme_color') == 'skin-yellow'){
            $mainColor = '#fcbf49';
        }else if(Session::get('theme_color') == 'skin-green'){
            $mainColor = '#80ed99';
        }else if(Session::get('theme_color') == 'skin-red'){
            $mainColor = '#d62828';
        }else if(Session::get('theme_color') == 'skin-yellow'){
            $mainColor = '#003049';
        }
    @endphp
    <style>
        .modal-backdrop {
            display: none;
        }

        .sub {
            width: 15vw;
            position: fixed;
            background-color: #fff;
            overflow-y: scroll;
            height: 200px;
            list-style-type: none;
        }

        .navbar-bg {
            background-color: {{$mainColor}} !important;
        }

        /*
        *
        *
        *
        **********EDITED
        *
        *
        *
        **/
        .text-small{
            color: {{$mainColor}} !important;
        }
        .btn-success {
            box-shadow: 0 2px 6px #acb5f6;
            background-color:{{$mainColor}}!important;
            border-color: {{$mainColor}}!important;
        }

        .text-primary, .text-primary-all *, .text-primary-all *:before, .text-primary-all *:after {
            color: {{$mainColor}} !important;
        }

        .select2-selection__choice {
            background-color: {{$mainColor}} !important;
        }

        .select2-selection__choice__remove {
            color: #fff !important;
        }

        .main-sidebar .sidebar-menu li.active a {
            color: {{$mainColor}} !important;
        }

        .text-primary, .text-primary-all *, .text-primary-all *:before, .text-primary-all *:after {
            color: {{$mainColor}} !important; }

        .custom-control-input:checked ~ .custom-control-label::before {
            background-color: {{$mainColor}} !important; }

        .custom-file-input:focus + .custom-file-label {
            border-color:{{$mainColor}}!important; }

        {{--a {--}}
        {{--    color:{{$mainColor}}!important;--}}
        {{--}--}}

        .selectgroup-input:focus + .selectgroup-button, .selectgroup-input:checked + .selectgroup-button {
            background-color: {{$mainColor}}!important;
            color: #fff;
            z-index: 1; }

        .custom-switch-input:checked ~ .custom-switch-indicator {
            background: {{$mainColor}}!important;
        }

        .custom-switch-input:focus ~ .custom-switch-indicator {
            border-color: {{$mainColor}}!important;
        }

        .imagecheck-input:focus ~ .imagecheck-figure {
            border-color: {{$mainColor}}!important;
        }

        .list-group-item.active {
            background-color: {{$mainColor}}!important; }

        .list-group-item-primary {
            background-color: {{$mainColor}}!important;
        }

        .alert.alert-primary {
            background-color: {{$mainColor}}!important; }

        .card .card-header h4 + .card-header-form .btn.active {
            background-color: {{$mainColor}}!important;
        }
        .card.card-primary {
            border-top: 2px solid {{$mainColor}}!important;
        }

        .nav-tabs .nav-item .nav-link {
            color: {{$mainColor}}!important;
        }

        .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
            background-color: {{$mainColor}}!important;
        }

        .nav-pills .nav-item .nav-link {
            color: {{$mainColor}}!important;
        }

        .nav-pills .nav-item .nav-link.active {
            background-color: {{$mainColor}}!important;
        }

        .page-item .page-link {
            color: {{$mainColor}}!important;
        }

        .page-item.active .page-link {
            color:#fff!important;
            background-color: {{$mainColor}}!important;
            border-color: {{$mainColor}}!important;
        }

        .page-item.disabled .page-link {
            color: {{$mainColor}}!important;
        }

        .page-link:hover {
            background-color: {{$mainColor}}!important;
        }

        .badge.badge-primary {
            background-color: {{$mainColor}}!important;
        }
        .btn-primary, .btn-primary.disabled {
            background-color: {{$mainColor}}!important;
            border-color:{{$mainColor}}!important;
        }
        .btn-outline-primary, .btn-outline-primary.disabled {
            border-color: {{$mainColor}}!important;
            color: {{$mainColor}}!important;
        }

        .btn-outline-primary:hover, .btn-outline-primary:focus, .btn-outline-primary:active, .btn-outline-primary.disabled:hover, .btn-outline-primary.disabled:focus, .btn-outline-primary.disabled:active {
            background-color: {{$mainColor}} !important;
        }
        .btn-outline-white:hover, .btn-outline-white:focus, .btn-outline-white:active, .btn-outline-white.disabled:hover, .btn-outline-white.disabled:focus, .btn-outline-white.disabled:active {
            color: {{$mainColor}}!important;
        }

        .btn-group .btn.active {
            background-color: {{$mainColor}}!important;
        }

        .media .media-right {
            color: {{$mainColor}}!important;
        }

        .accordion .accordion-header[aria-expanded="true"] {
            background-color: {{$mainColor}}!important;
        }
        .navbar.active {
            background-color: {{$mainColor}}!important;
        }

        .nav-collapse .navbar-nav .nav-item .nav-link:hover {
            color: {{$mainColor}}!important;
        }
        .nav-collapse .navbar-nav .nav-item:focus > a, .nav-collapse .navbar-nav .nav-item.active > a {
            background-color: {{$mainColor}}!important;
        }
        a.dropdown-item:focus, a.dropdown-item:active, a.dropdown-item.active {
            background-color: {{$mainColor}}!important;
        }

        .dropdown-list .dropdown-item:focus {
            background-color: {{$mainColor}}!important;
        }
        .dropdown-flag .dropdown-item.active {
            background-color: {{$mainColor}}!important;
        }

        .progress-bar {
            background-color: {{$mainColor}}!important;
        }

        a.bb {
            border-bottom: 1px solid {{$mainColor}}!important;
        }

        .circle-step .circle.circle-primary {
            border-color: {{$mainColor}}!important;
            color: {{$mainColor}}!important;
        }

        .section .section-header .section-header-back .btn:hover {
            background-color: {{$mainColor}}!important;
        }

        .section .section-title:before {
            background-color: {{$mainColor}}!important;
        }

        body.sidebar-mini .main-sidebar .sidebar-menu > li ul.dropdown-menu li.active > a:hover {
            background-color: {{$mainColor}} !important;
        }
        body.layout-2 .main-sidebar .sidebar-menu li a:hover {
            color: {{$mainColor}}!important;
        }
        body.layout-3 .navbar.navbar-secondary .navbar-nav > .nav-item.active > .nav-link {
            color: {{$mainColor}}!important;
        }
        body.layout-3 .navbar.navbar-secondary .navbar-nav > .nav-item > .nav-link:before {
            background-color: {{$mainColor}}!important;
        }
        body.layout-3 .navbar.navbar-secondary .navbar-nav > .nav-item .dropdown-menu .nav-item .nav-link:focus {
            background-color: {{$mainColor}}!important;
        }
        .main-sidebar .sidebar-menu li.active a {
            color: {{$mainColor}}!important;
        }
        .main-sidebar .sidebar-menu li ul.dropdown-menu li a:hover {
            color: {{$mainColor}}!important;
        }

        .main-sidebar .sidebar-menu li ul.dropdown-menu li.active > a {
            color: {{$mainColor}}!important;
        }
        :root{
            --blue:{{$mainColor}};
            --primary: {{$mainColor}};
        }
        .btn-primary:active, .btn-primary:hover, .btn-primary.disabled:active, .btn-primary.disabled:hover{
            background-color: {{$mainColor}}!important;
        }

        .btn-primary, .btn-primary.disabled{
            background-color: {{$mainColor}}!important;
            border-color:{{$mainColor}}!important;
        }
        .btn-primary:active, .btn-primary:hover, .btn-primary.disabled:active, .btn-primary.disabled:hover{
            background-color: {{$mainColor}}!important;
        }

        .btn-primary::after{
            background-color: {{$mainColor}}!important;
            border-color:{{$mainColor}}!important;
        }
        .btn-primary::before{
            background-color: {{$mainColor}}!important;
            border-color:{{$mainColor}}!important;
        }
        .btn-primary:hover{
            background-color: {{$mainColor}}!important;
            border-color:{{$mainColor}}!important;
        }

        .btn-primary {
            background-color: {{$mainColor}}!important;
            border-color:{{$mainColor}}!important;
        }
        .btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active, .open>.dropdown-toggle.btn-primary {
            background-color: {{$mainColor}}!important;
        }
        .nav-collapse .navbar-nav .nav-item:focus > a, .nav-collapse .navbar-nav .nav-item.active > a {
            background-color: {{$mainColor}}!important;
        }
        .btn-default{
            color: {{$mainColor}}!important;
        }
        .page-link{
            color: #000!important;
        }
        .btn-success:hover, .btn-success:focus, .btn-success:active, .btn-success.disabled:hover, .btn-success.disabled:focus, .btn-success.disabled:active{
            background-color: {{$mainColor}}!important;
        }
        /*
        *
        *
        *
        **********END Edited
        *
        *
        *
        **/
        .text-yellow {
            color: #fcbf49;
        }

        .text-red {
            color: #d62828;
        }

        .text-green {
            color: #80ed99;
        }

        .text-aqua {
            color: #48cae4;
        }

        .text-light-blue {
            color: #023e8a;
        }

        .text-muted {
            color: #01161e;
        }
    </style>
    <style type="text/css">
        body {
            background: {{ CRUDBooster::getSetting("login_background_color")?:'#dddddd'}} url('{{ CRUDBooster::getSetting("login_background_image")?asset(CRUDBooster::getSetting("login_background_image")):asset('vendor/crudbooster/assets/bg_blur3.jpg') }}');
            color: {{ CRUDBooster::getSetting("login_font_color")?:'#ffffff' }}  !important;
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
        }

        .login-box, .register-box {
            margin: 2% auto;
        }

        .login-box-body {
            box-shadow: 0px 0px 50px rgba(0, 0, 0, 0.8);
            background: rgba(255, 255, 255, 0.9);
            color: {{ CRUDBooster::getSetting("login_font_color")?:'#666666' }}  !important;
        }

        html, body {
            overflow: hidden;
        }
    </style>
</head>

<body>
<div id="app">
    <section class="section">
        <div class="container mt-5">
            <div class="row">
                <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
                    <div class="login-brand">
                        <img title='{!!(Session::get('appname') == 'CRUDBooster')?"<b>CRUD</b>Booster":CRUDBooster::getSetting('appname')!!}'
                             src='{{ CRUDBooster::getSetting("logo")?asset(CRUDBooster::getSetting('logo')):asset('vendor/crudbooster/assets/logo_crudbooster.png') }}' alt="logo" style="width: 100%;">
                    </div>

                    <div class="card card-primary">
                        <div class="card-header"><h4 style="color:#34395e;">Login</h4></div>

                        <div class="card-body">
                            <form autocomplete='off' action="{{ route('postLogin') }}" method="post" class="needs-validation" novalidate="">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}"/>

                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control" autocomplete='off' type="text" class="form-control" name='email' required placeholder="Email">
                                    <div class="invalid-feedback">
                                        Please fill in your email
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="d-block">
                                        <label for="password" class="control-label">Password</label>
                                        <div class="float-right">
                                            <a href="{{route("getForgot")}}" class="text-small">
                                                {{cbLang("text_forgot_password")}}
                                            </a>
                                        </div>
                                    </div>
                                    <input class="form-control" autocomplete='off' type="password" class="form-control" name='password' required placeholder="Password">
                                    <div class="invalid-feedback">
                                        please fill in your password
                                    </div>
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                        Login
                                    </button>
                                </div>
                            </form>
                            @if(!empty(config('services.google')))
                            <div class="text-center mt-4 mb-3">
                                <div class="text-job text-muted">Login With Social</div>
                            </div>
                            <div class="row sm-gutters">
                                <div class="col-6">
                                    <a href='{{route("redirect", 'google')}}' class="btn btn-block btn-social btn-facebook">
                                        <span class="fa fa-google"></span> Google
                                    </a>
                                </div>
                            </div>
                            @endif
                        </div>

                    </div>
                    <div class="mt-5 text-muted text-center">
                        @if ( Session::get('message') != '' )
                            <div class='alert alert-warning'>
                                {{ Session::get('message') }}
                            </div>
                        @endif
                    </div>
                    <div class="simple-footer">
                        Copyright © Webillium CMS
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<!-- General JS Scripts -->
<script src="{{ asset('vendor/crudbooster/assets/stisla/jquery.min.js') }}"></script>
<script src="{{ asset('vendor/crudbooster/assets/stisla/popper.js') }}"></script>
<script src="{{ asset('vendor/crudbooster/assets/stisla/tooltip.js') }}"></script>
<script src="{{ asset('vendor/crudbooster/assets/stisla/bootstrap.min.js') }}"></script>
<script src="{{ asset('vendor/crudbooster/assets/stisla/jquery.nicescroll.min.js') }}"></script>
<script src="{{ asset('vendor/crudbooster/assets/stisla/moment.min.js') }}"></script>
<script src="{{ asset('vendor/crudbooster/assets/stisla/stisla.js') }}"></script>

<!-- JS Libraies -->

<!-- Page Specific JS File -->

<!-- Template JS File -->
<script src="{{ asset('vendor/crudbooster/assets/stisla/scripts.js') }}"></script>
<script src="{{ asset('vendor/crudbooster/assets/stisla/custom.js') }}"></script>

</body></html>
