@extends('crudbooster::admin_template')

@section('content')


    <div class="col-12 section-header section-header-primary" style="padding: 0px;">
        <div class="card mb-0">
            <div class="card-body">
                <ul class="nav nav-pills">
                    <li class="btn btn-outline-primary nav-item"><a href="{{ CRUDBooster::mainpath('documentation') }}"><i class='fa fa-file'></i> API Documentation </a></li>
                    <li class="btn btn-outline-primary nav-item"><a href="{{ CRUDBooster::mainpath('screet-key') }}"><i class='fa fa-key'></i> API Screet Key </a></li>
                    <li class="btn btn-outline-primary nav-item"><a href="{{ CRUDBooster::mainpath('generator') }}"><i class='fa fa-cog'></i> API Generator </a></li>
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
