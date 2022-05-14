<div class='form-group {{$header_group_class}} {{ ($errors->first($name))?"has-error":"" }}' id='form-group-{{$name}}' style="{{@$form['style']}}">
    <div class="form-group">
        <label>{{$form['label']}}
            @if($required)
                <span class='text-danger' title='{!! cbLang('this_field_is_required') !!}'>*</span>
            @endif
        </label>
        <div class="input-group">
            <div class="input-group-prepend">
                <div class="input-group-text">
                    <i class='fas fa-address-book'></i>
                </div>
            </div>
            <input type="text" class="form-control phone-number" title="{{$form['label']}}"
                   {{$required}} {{$readonly}} {!!$placeholder!!} {{$disabled}} {{$validation['max']?"maxlength=".$validation['max']:""}} class='form-control'
                   name="{{$name}}" id="{{$name}}" value='{{$value}}'>
            <p class='help-block'>{{ @$form['help'] }}</p>
            <div class="text-danger">{!! $errors->first($name)?"<i class='fa fa-info-circle'></i> ".$errors->first($name):"" !!}</div>

        </div>
    </div>
</div>

