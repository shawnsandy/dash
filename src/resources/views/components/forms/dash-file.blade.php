<div class="form-group {{ $name }}">
    {!! Form::formLabel($title)  !!}
    {{ Form::file($name) }}
    {!! Form::formError($name, $errors) !!}
</div>
