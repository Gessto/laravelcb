@extends("crudbooster::admin_template")
@section("content")

    @push('head')
        <link rel='stylesheet' href='<?php echo asset("vendor/crudbooster/assets/select2/dist/css/select2.min.css")?>'/>
        <style>
            .select2-container--default .select2-selection--single {
                border-radius: 0px !important
            }

            .select2-container .select2-selection--single {
                height: 35px
            }
        </style>
    @endpush

    @push('bottom')
        <script src='<?php echo asset("vendor/crudbooster/assets/select2/dist/js/select2.full.min.js")?>'></script>
        <script>
            $(function () {
                $('.select2').select2();

            })
            $(function () {
                $('select[name=table]').change(function () {
                    var v = $(this).val().replace(".", "_");
                    $.get("{{CRUDBooster::mainpath('check-slug')}}/" + v, function (resp) {
                        if (resp.total == 0) {
                            $('input[name=path]').val(v);
                        } else {
                            v = v + resp.lastid;
                            $('input[name=path]').val(v);
                        }
                    })

                })
            })

            $('.section-header').hide()
            $('.section-header-primary').show()
        </script>
    @endpush
    <div class="col-12 section-header section-header-primary" style="padding: 0px;">
        <div class="card mb-0">
            <div class="card-body">
                <ul class="nav nav-pills">
                    @if($id)
                        <li role="presentation" class="nav-item">
                            <a class="nav-link active" href="{{Route('ModulsControllerGetStep1')."/".$id}}"> Step 1 -
                                Module Information</a>
                        </li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link" href="{{Route('ModulsControllerGetStep2')."/".$id}}">Step 2 - Table
                                Display</a></li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link" href="{{Route('ModulsControllerGetStep3')."/".$id}}">Step 3 - Form
                                Display</a></li>
                        <li role="presentation" class="nav-item">
                            <a class="nav-link" href="{{Route('ModulsControllerGetStep4')."/".$id}}">Step 4 -
                                Configuration</a></li>
                    @else
                        <li role="presentation">
                            <a class="nav-link active" href="#"><i class='fa fa-info'></i> Step 1 - Module
                                Information</a></li>
                        <li role="presentation" class="nav-link">
                            <a class="nav-link" href="#"><i class='fa fa-table'></i> Step 2 - Table Display</a></li>
                        <li role="presentation" class="nav-link">
                            <a class="nav-link" href="#"><i class='fa fa-plus-square-o'></i> Step 3 - Form Display</a>
                        </li>
                        <li role="presentation" class="nav-link">
                            <a class="nav-link" href="#"><i class='fa fa-wrench'></i> Step 4 - Configuration</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </div>

    <div class="box box-default" style="padding-top: 25px;">
        <div class="box-body">
            <form method="post" action="{{Route('ModulsControllerPostStep2')}}">
                <input type="hidden" name="_token" value="{{csrf_token()}}">
                <input type="hidden" name="id" value="{{$row->id}}">
                <div class="form-group">
                    <label>Table</label>
                    <select class="form-control">
                        <option value="">{{cbLang('text_prefix_option')}} Table</option>
                        @foreach($tables_list as $table)
                            <option {{($table == $row->table_name)?"selected":""}} value="{{$table}}">{{$table}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Module Name</label>
                    <input type="text" class="form-control" required name="name" value="{{$row->name}}">
                </div>

                <div class="form-group">
                    <label>Icon</label>
                    <select class="form-control">
                        @foreach($fontawesome as $f)
                            <option {{($row->icon == 'fa fa-'.$f)?"selected":""}} value="fa fa-{{$f}}">{{$f}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="">Module Slug (Please alpha numeric only, without space instead _ and or special
                        character)</label>
                    <input type="text" class="form-control" required name="path" value="{{$row->path}}">
                </div>
        </div>
        <div class="box-footer">
            <div class="card-footer text-left">
                <div class="form-group">
                    <div class="control-label">Also create menu for this module</div>
                    <label class="custom-switch mt-2">
                        <input type="checkbox" checked type='checkbox' name='create_menu' value='1' class="custom-switch-input">
                        <span class="custom-switch-indicator"></span>
                        <span class="custom-switch-description">If you check this, we will create the menu for this module</span>
                    </label>
                </div>
            </div>

            <div class="card-footer text-right">
                <a class='btn btn-default' href='{{Route("ModulsControllerGetIndex")}}'> {{cbLang('button_back')}}</a>
                <input type="submit" class="btn btn-primary" value="Step 2 &raquo;">
            </div>
        </div>
        </form>
    </div>


@endsection
