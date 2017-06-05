@php
    $required =  (config("forms.".$attributes["data-table"].".required.".$name, null ) ) ? "required" : null ;
@endphp
<div class="form-group {{ $name }} {{ $required }} {{ $errors->first($name, "has-error") }}">
    {!! Form::formLabel($title)  !!}
    {{ Form::textarea($name, $value, array_merge(['class' => "form-control dash-rich-text $name", $required], $attributes)) }}
    {!! $errors->first($name, '<p class="text-danger">:message</p>') !!}
</div>

