<div class="form-group {{ $name }} file-input-box">
    {!! Form::formLabel($title)  !!}
    {{ Form::file($name) }}
    {!! Form::formError($name, $errors) !!}
</div>
