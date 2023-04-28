
{{Form::file($name, ["class" => $class . (($errors->has($name))?" is-invalid":""),'accept'=>'image/*'])}}

@if($errors->has($name))
    <div class="invalid-feedback">{{$errors->first($name)}}</div>
@endif
