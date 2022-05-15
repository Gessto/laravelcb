
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
