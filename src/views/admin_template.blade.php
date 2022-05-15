<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ ($page_title)?get_setting('appname').': '.strip_tags($page_title):"Admin Area" }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name='generator'
          content='CRUDBooster {{ \crocodicstudio\crudbooster\commands\CrudboosterVersionCommand::$version }}'/>
    <meta name='robots' content='noindex,nofollow'/>
    <link rel="shortcut icon"
          href="{{ CRUDBooster::getSetting('favicon')?asset(CRUDBooster::getSetting('favicon')):asset('vendor/crudbooster/assets/logo_crudbooster.png') }}">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="{{ asset('vendor/crudbooster/assets/stisla/style.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/crudbooster/assets/stisla/components.css') }}">

    <link rel="stylesheet" href="{{ asset('vendor/crudbooster/assets/stisla/datatables.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('vendor/crudbooster/assets/stisla/dataTables.bootstrap4.min.css') }}">

    <link rel="stylesheet"
          href="{{ asset('vendor/crudbooster/assets/stisla/daterangepicker.css') }}">
    <link rel="stylesheet"
          href="{{ asset('vendor/crudbooster/assets/stisla/bootstrap-colorpicker.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/crudbooster/assets/stisla/select2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/crudbooster/assets/stisla/selectric.css') }}">
    <link rel="stylesheet"
          href="{{ asset('vendor/crudbooster/assets/stisla/bootstrap-timepicker.min.css') }}">
    <link rel="stylesheet"
          href="{{ asset('vendor/crudbooster/assets/stisla/bootstrap-tagsinput.css') }}">

    <link rel="stylesheet" href="{{ asset('vendor/crudbooster/assets/stisla/summernote-bs4.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/crudbooster/assets/stisla/codemirror.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/crudbooster/assets/stisla/duotone-dark.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/crudbooster/assets/stisla/selectric.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/crudbooster/assets/stisla/iziToast.min.css') }}">
    <link rel="stylesheet" href="{{ asset('vendor/crudbooster/assets/stisla/all.min.css') }}"/>

    @php
     $mainColor = '#6777ef';

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
        .btn-success {
            box-shadow: 0 2px 6px #acb5f6;
            background-color:{{$mainColor}};
            border-color: {{$mainColor}};
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
            border-color:{{$mainColor}}; }

        a {
            color:{{$mainColor}};
        }

        .selectgroup-input:focus + .selectgroup-button, .selectgroup-input:checked + .selectgroup-button {
            background-color: {{$mainColor}};
            color: #fff;
            z-index: 1; }

        .custom-switch-input:checked ~ .custom-switch-indicator {
            background: {{$mainColor}};
        }

        .custom-switch-input:focus ~ .custom-switch-indicator {
            border-color: {{$mainColor}};
        }

        .imagecheck-input:focus ~ .imagecheck-figure {
            border-color: {{$mainColor}};
        }

        .list-group-item.active {
            background-color: {{$mainColor}}; }

        .list-group-item-primary {
            background-color: {{$mainColor}};
        }

        .alert.alert-primary {
            background-color: {{$mainColor}}; }

        .card .card-header h4 + .card-header-form .btn.active {
            background-color: {{$mainColor}};
        }
        .card.card-primary {
            border-top: 2px solid {{$mainColor}};
        }

        .nav-tabs .nav-item .nav-link {
            color: {{$mainColor}};
        }

        .nav-pills .nav-link.active, .nav-pills .show > .nav-link {
            background-color: {{$mainColor}};
        }

        .nav-pills .nav-item .nav-link {
            color: {{$mainColor}};
        }

        .nav-pills .nav-item .nav-link.active {
            background-color: {{$mainColor}};
        }

        .page-item .page-link {
            color: {{$mainColor}};
        }

        .page-item.active .page-link {
            background-color: {{$mainColor}};
            border-color: {{$mainColor}};
        }

        .page-item.disabled .page-link {
            color: {{$mainColor}};
        }

        .page-link:hover {
            background-color: {{$mainColor}};
        }

        .badge.badge-primary {
            background-color: {{$mainColor}};
        }
        .btn-primary, .btn-primary.disabled {
            background-color: {{$mainColor}};
            border-color:{{$mainColor}};
        }
        .btn-outline-primary, .btn-outline-primary.disabled {
            border-color: {{$mainColor}};
            color: {{$mainColor}};
        }

        .btn-outline-primary:hover, .btn-outline-primary:focus, .btn-outline-primary:active, .btn-outline-primary.disabled:hover, .btn-outline-primary.disabled:focus, .btn-outline-primary.disabled:active {
            background-color: {{$mainColor}} !important;
        }
        .btn-outline-white:hover, .btn-outline-white:focus, .btn-outline-white:active, .btn-outline-white.disabled:hover, .btn-outline-white.disabled:focus, .btn-outline-white.disabled:active {
            color: {{$mainColor}};
        }

        .btn-group .btn.active {
            background-color: {{$mainColor}};
        }

        .media .media-right {
            color: {{$mainColor}};
        }

        .accordion .accordion-header[aria-expanded="true"] {
            background-color: {{$mainColor}};
        }
        .navbar.active {
            background-color: {{$mainColor}};
        }

        .nav-collapse .navbar-nav .nav-item .nav-link:hover {
            color: {{$mainColor}};
        }
        .nav-collapse .navbar-nav .nav-item:focus > a, .nav-collapse .navbar-nav .nav-item.active > a {
            background-color: {{$mainColor}};
        }
        a.dropdown-item:focus, a.dropdown-item:active, a.dropdown-item.active {
            background-color: {{$mainColor}};
        }

        .dropdown-list .dropdown-item:focus {
            background-color: {{$mainColor}};
        }
        .dropdown-flag .dropdown-item.active {
            background-color: {{$mainColor}};
        }

        .progress-bar {
            background-color: {{$mainColor}};
        }

        a.bb {
            border-bottom: 1px solid {{$mainColor}};
        }

        .circle-step .circle.circle-primary {
            border-color: {{$mainColor}};
            color: {{$mainColor}};
        }

        .section .section-header .section-header-back .btn:hover {
            background-color: {{$mainColor}};
        }

        .section .section-title:before {
            background-color: {{$mainColor}};
        }

        body.sidebar-mini .main-sidebar .sidebar-menu > li ul.dropdown-menu li.active > a:hover {
            background-color: {{$mainColor}} !important;
        }
        body.layout-2 .main-sidebar .sidebar-menu li a:hover {
            color: {{$mainColor}};
        }
        body.layout-3 .navbar.navbar-secondary .navbar-nav > .nav-item.active > .nav-link {
            color: {{$mainColor}};
        }
        body.layout-3 .navbar.navbar-secondary .navbar-nav > .nav-item > .nav-link:before {
            background-color: {{$mainColor}};
        }
        body.layout-3 .navbar.navbar-secondary .navbar-nav > .nav-item .dropdown-menu .nav-item .nav-link:focus {
            background-color: {{$mainColor}};
        }
        .main-sidebar .sidebar-menu li.active a {
            color: {{$mainColor}};
        }
        .main-sidebar .sidebar-menu li ul.dropdown-menu li a:hover {
            color: {{$mainColor}};
        }

        .main-sidebar .sidebar-menu li ul.dropdown-menu li.active > a {
            color: {{$mainColor}};
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

    <script src="{{ asset('vendor/crudbooster/assets/stisla/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/crudbooster/assets/stisla/gijgo.min.js') }}" type="text/javascript"></script>
    <link href="{{ asset('vendor/crudbooster/assets/stisla/gijgo.min.css') }}" rel="stylesheet" type="text/css"/>
</head>

<body class="{{config('crudbooster.ADMIN_LAYOUT')}}">
<div id="app">
    <div class="main-wrapper">
        <div class="navbar-bg"></div>
    @include('crudbooster::header')
    @include('crudbooster::sidebar')
    <!-- Main Content -->
        <div class="main-content" style="width: auto;">
            <section class="section">
                <div class="section-header">
                    <?php
                    $module = CRUDBooster::getCurrentModule();
                    ?>
                    @if($module)
                        <h1>
                            <!--Now you can define $page_icon alongside $page_tite for custom forms to follow CRUDBooster theme style -->
                            <i class='{!! ($page_icon)?:$module->icon !!}'></i> {!! ucwords(($page_title)?:$module->name) !!}
                            &nbsp;&nbsp;

                            <!--START BUTTON -->

                            @if(CRUDBooster::getCurrentMethod() == 'getIndex')
                                @if($button_show)
                                    <a href="{{ CRUDBooster::mainpath().'?'.http_build_query(Request::all()) }}"
                                       id='btn_show_data' class="btn btn-sm btn-primary"
                                       title="{{cbLang('action_show_data')}}">
                                        <i class="fa fa-table"></i> {{cbLang('action_show_data')}}
                                    </a>
                                @endif

                                @if($button_add && CRUDBooster::isCreate())
                                    <a href="{{ CRUDBooster::mainpath('add').'?return_url='.urlencode(Request::fullUrl()).'&parent_id='.g('parent_id').'&parent_field='.$parent_field }}"
                                       id='btn_add_new_data' class="btn btn-sm btn-success"
                                       title="{{cbLang('action_add_data')}}">
                                        <i class="fa fa-plus-circle"></i> {{cbLang('action_add_data')}}
                                    </a>
                                @endif
                            @endif


                            @if($button_export && CRUDBooster::getCurrentMethod() == 'getIndex')
                                <a href="javascript:void(0)" id='btn_export_data' data-url-parameter='{{$build_query}}'
                                   title='Export Data'
                                   class="btn btn-sm btn-primary btn-export-data">
                                    <i class="fa fa-upload"></i> {{cbLang("button_export")}}
                                </a>
                            @endif

                            @if($button_import && CRUDBooster::getCurrentMethod() == 'getIndex')
                                <a href="{{ CRUDBooster::mainpath('import-data') }}" id='btn_import_data'
                                   data-url-parameter='{{$build_query}}' title='Import Data'
                                   class="btn btn-sm btn-primary btn-import-data">
                                    <i class="fa fa-download"></i> {{cbLang("button_import")}}
                                </a>
                            @endif

                        <!--ADD ACTIon-->
                            @if(!empty($index_button))

                                @foreach($index_button as $ib)
                                    <a href='{{$ib["url"]}}' id='{{str_slug($ib["label"])}}'
                                       class='btn {{($ib['color'])?'btn-'.$ib['color']:'btn-primary'}} btn-sm'
                                       @if($ib['onClick']) onClick='return {{$ib["onClick"]}}' @endif
                                       @if($ib['onMouseOver']) onMouseOver='return {{$ib["onMouseOver"]}}' @endif
                                       @if($ib['onMouseOut']) onMouseOut='return {{$ib["onMouseOut"]}}' @endif
                                       @if($ib['onKeyDown']) onKeyDown='return {{$ib["onKeyDown"]}}' @endif
                                       @if($ib['onLoad']) onLoad='return {{$ib["onLoad"]}}' @endif
                                    >
                                        <i class='{{$ib["icon"]}}'></i> {{$ib["label"]}}
                                    </a>
                            @endforeach
                        @endif
                        <!-- END BUTTON -->
                        </h1>
                    @else
                        <h1>{{Session::get('appname')}}
                            <small> {{ cbLang('text_dashboard') }} </small>
                        </h1>
                    @endif
                </div>

                <div class="section-body">
                    @yield('content')
                </div>
            </section>

        </div>
        @include('crudbooster::footer')
    </div>
</div>


@include('crudbooster::admin_template_plugins')

<!-- load js !-->
@if($load_js)
    @foreach($load_js as $js)
        <script src="{{$js}}"></script>
    @endforeach
@endif
<script type="text/javascript">
    var site_url = "{{url('/')}}";
    @if($script_js)
        {!! $script_js !!}
    @endif
</script>

@stack('bottom')


</body>
</html>
