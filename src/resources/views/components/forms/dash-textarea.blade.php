<div class="form-group {{ $name }}">
    {!! Form::formLabel($title)  !!}
    {{ Form::textarea($name, $value, array_merge(['class' => "form-control dash-textarea $name"], $attributes)) }}
    {!! $errors->first($name, '<p class="text-danger">:message</p>') !!}
</div>
