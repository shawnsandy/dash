<div class="form-group {{ $name }}">
    {!! Form::formLabel($title)  !!}
    {{ Form::textarea($name, $value, array_merge(['class' => "form-control dash-rich-text $name"], $attributes)) }}
    {!! Form::formError($name, $errors) !!}
</div>

