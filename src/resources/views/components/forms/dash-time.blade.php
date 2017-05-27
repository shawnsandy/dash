<div class="form-group {{ $name }} {{ $errors->first($name, "has-error") }}">
    {!! Form::formLabel($title)  !!}
    {{ Form::time($name, $value, array_merge(['class' => "form-control dash-time $name"], $attributes)) }}
    {!! Form::formError($name, $errors) !!}
</div>
