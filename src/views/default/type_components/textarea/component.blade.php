<div class="form-group mb-0 {{$header_group_class}} {{ ($errors->first($name))?"has-error":"" }}' id='form-group-{{$name}}" style="{{@$form['style']}}">
    <label>{{$form['label']}}@if($required)
            <span class='text-danger' title='{!! cbLang('this_field_is_required') !!}'>*</span>
        @endif</label>
    <textarea  name="{{$form['name']}}" id="{{$name}}"
               {{$required}} {{$readonly}} {!!$placeholder!!} {{$disabled}} {{$validation['max']?"maxlength=".$validation['max']:""}} class='form-control'
               rows='5'>{{ $value}}</textarea>
    <div class="text-danger">{!! $errors->first($name)?"<i class='fa fa-info-circle'></i> ".$errors->first($name):"" !!}</div>
    <p class='help-block'>{{ @$form['help'] }}</p>
</div>
