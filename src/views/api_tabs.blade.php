@extends('crudbooster::admin_template')

@section('content')
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

    <div class="col-12 section-header section-header-primary" style="padding: 0px;">
        <div class="card mb-0">
            <div class="card-body">
                <ul class="nav nav-pills">
                    <li class="btn btn-outline-primary nav-item"><a style="color:{{$mainColor}};" href="{{ CRUDBooster::mainpath('documentation') }}"><i class='fa fa-file'></i> API Documentation </a></li>
                    <li class="btn btn-outline-primary nav-item"><a style="color:{{$mainColor}};" href="{{ CRUDBooster::mainpath('screet-key') }}"><i class='fa fa-key'></i> API Screet Key </a></li>
                    <li class="btn btn-outline-primary nav-item"><a style="color:{{$mainColor}};" href="{{ CRUDBooster::mainpath('generator') }}"><i class='fa fa-cog'></i> API Generator </a></li>
                </ul>
            </div>
        </div>
    </div>

    <div class='box'>
        <div class='box-header'><h3 class='box-title'>API Documentation</h3></div>
        <div class='box-body'>
            @include('crudbooster::api_documentation')
        </div>
    </div>

    <!-- nav-tabs-custom -->

@endsection
