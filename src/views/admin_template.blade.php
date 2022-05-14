<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>{{ ($page_title)?get_setting('appname').': '.strip_tags($page_title):"Admin Area" }}</title>
    <meta name="csrf-token" content="{{ csrf_token() }}"/>
    <meta name='generator' content='CRUDBooster {{ \crocodicstudio\crudbooster\commands\CrudboosterVersionCommand::$version }}'/>
    <meta name='robots' content='noindex,nofollow'/>
    <link rel="shortcut icon"
          href="{{ CRUDBooster::getSetting('favicon')?asset(CRUDBooster::getSetting('favicon')):asset('vendor/crudbooster/assets/logo_crudbooster.png') }}">
    <!-- General CSS Files -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">

    <!-- CSS Libraries -->

    <!-- Template CSS -->
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/css/style.css">
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/css/components.css">

    <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/datatables/datatables.min.css">
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">

    <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/bootstrap-daterangepicker/daterangepicker.css">
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css">
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/select2/dist/css/select2.min.css">
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/bootstrap-tagsinput/dist/bootstrap-tagsinput.css">

    <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/codemirror/lib/codemirror.css">
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/codemirror/theme/duotone-dark.css">
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="https://demo.getstisla.com/assets/modules/izitoast/css/iziToast.min.css">

    <style>
        .modal-backdrop{
            display: none;
        }
        .sub{
            width:15vw;
            position: fixed;
            background-color: #fff;
            overflow-y: scroll;
            height:200px;
            list-style-type: none;
        }

    </style>
</head>

<body>
<div id="app">
    <div class="main-wrapper">
        <div class="navbar-bg"></div>
        @include('crudbooster::header')
        @include('crudbooster::sidebar')
        <!-- Main Content -->
        <div class="main-content">
            <section class="section">
                <div class="section-header">
                    <?php
                    $module = CRUDBooster::getCurrentModule();
                    ?>
                    @if($module)
                        <h1>
                            <!--Now you can define $page_icon alongside $page_tite for custom forms to follow CRUDBooster theme style -->
                            <i class='{!! ($page_icon)?:$module->icon !!}'></i> {!! ucwords(($page_title)?:$module->name) !!} &nbsp;&nbsp;

                            <!--START BUTTON -->

                            @if(CRUDBooster::getCurrentMethod() == 'getIndex')
                                @if($button_show)
                                    <a href="{{ CRUDBooster::mainpath().'?'.http_build_query(Request::all()) }}" id='btn_show_data' class="btn btn-sm btn-primary"
                                       title="{{cbLang('action_show_data')}}">
                                        <i class="fa fa-table"></i> {{cbLang('action_show_data')}}
                                    </a>
                                @endif

                                @if($button_add && CRUDBooster::isCreate())
                                    <a href="{{ CRUDBooster::mainpath('add').'?return_url='.urlencode(Request::fullUrl()).'&parent_id='.g('parent_id').'&parent_field='.$parent_field }}"
                                       id='btn_add_new_data' class="btn btn-sm btn-success" title="{{cbLang('action_add_data')}}">
                                        <i class="fa fa-plus-circle"></i> {{cbLang('action_add_data')}}
                                    </a>
                                @endif
                            @endif


                            @if($button_export && CRUDBooster::getCurrentMethod() == 'getIndex')
                                <a href="javascript:void(0)" id='btn_export_data' data-url-parameter='{{$build_query}}' title='Export Data'
                                   class="btn btn-sm btn-primary btn-export-data">
                                    <i class="fa fa-upload"></i> {{cbLang("button_export")}}
                                </a>
                            @endif

                            @if($button_import && CRUDBooster::getCurrentMethod() == 'getIndex')
                                <a href="{{ CRUDBooster::mainpath('import-data') }}" id='btn_import_data' data-url-parameter='{{$build_query}}' title='Import Data'
                                   class="btn btn-sm btn-primary btn-import-data">
                                    <i class="fa fa-download"></i> {{cbLang("button_import")}}
                                </a>
                            @endif

                        <!--ADD ACTIon-->
                            @if(!empty($index_button))

                                @foreach($index_button as $ib)
                                    <a href='{{$ib["url"]}}' id='{{str_slug($ib["label"])}}' class='btn {{($ib['color'])?'btn-'.$ib['color']:'btn-primary'}} btn-sm'
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
