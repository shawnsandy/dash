<div class="form-group {{ $name }} {{ $errors->first($name, "has-error") }}">
    {!! Form::formLabel($title)  !!}
    {{ Form::text($name, $value, array_merge(['class' => "form-control dash-text {$attributes["data-table"]} {$name}"], $attributes)) }}
    {!! $errors->first($name, '<p class="text-danger">:message</p>') !!}
</div>
