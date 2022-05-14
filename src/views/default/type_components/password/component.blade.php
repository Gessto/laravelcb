<div class="form-group" {{$header_group_class}}' id='form-group-{{$name}}' style="{{@$form['style']}}">
    <label>{{$form['label']}}
        @if($required)
            <span class='text-danger' title='{!! cbLang('this_field_is_required') !!}'>*</span>
        @endif</label>
    <div class="input-group">
        <div class="input-group-prepend">
            <div class="input-group-text">
                <i class="fas fa-lock"></i>
            </div>
        </div>
        <input type="password" class="form-control pwstrength {{ ($errors->first($name))?"is-invalid":"" }}" title="{{$form['label']}}" id="{{$name}}"
               {{$required}} {!!$placeholder!!} {{$readonly}} {{$disabled}} {{$validation['max']?"maxlength=".$validation['max']:""}} class='form-control'
               name="{{$name}}"><br>
        <div class="invalid-feedback">{!! $errors->first($name)?"<i class='fa fa-info-circle'></i> ".$errors->first($name):"" !!}</div>
    </div>
</div>
