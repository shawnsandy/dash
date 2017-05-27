<div class="form-group {{ $name }} {{ $errors->first($name, "has-error") }}">
    {!! Form::formLabel($title)  !!}
    {{ Form::text($name, $value, array_merge(['class' => "form-control dash-date $name"], $attributes)) }}
    {!! Form::formError($name, $errors) !!}
</div>

