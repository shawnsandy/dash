<div class="form-group {{ $name }} {{ $errors->first($name, "has-error") }}">
    {!! Form::formLabel($title)  !!}
    {{ Form::password($name, array_merge(['class' => "form-control dash-password $name"], $attributes)) }}
    {!! $errors->first($name, '<p class="text-danger">:message</p>') !!}
</div>
