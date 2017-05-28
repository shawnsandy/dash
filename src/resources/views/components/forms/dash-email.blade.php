<div class="form-group {{ $name }}  {{ $errors->first($name, "has-error") }}">
    {!! Form::formLabel($title)  !!}
    {{ Form::email($name, $value, array_merge(['class' => "form-control dash-email $name"], $attributes)) }}
    {!! $errors->first($name, '<p class="text-danger">:message</p>') !!}
</div>
