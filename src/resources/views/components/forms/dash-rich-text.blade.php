<div class="form-group {{ $name }}  {{ $errors->first($name, "has-error") }}">
    {!! Form::formLabel($title)  !!}
    {{ Form::textarea($name, $value, array_merge(['class' => "form-control dash-rich-text $name"], $attributes)) }}
    {!! $errors->first($name, '<p class="text-danger">:message</p>') !!}
</div>

