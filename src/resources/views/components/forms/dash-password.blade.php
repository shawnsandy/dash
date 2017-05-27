<div class="form-group {{ $name }} {{ $errors->first($name, "has-error") }}">
    {!! Form::formLabel($title)  !!}
    {{ Form::password($name, array_merge(['class' => "form-control dash-password $name"], $attributes)) }}
    {!! Form::formError($name, $errors) !!}
</div>
