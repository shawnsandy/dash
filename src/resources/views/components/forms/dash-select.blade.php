@php
    $required =  (config("forms.".$attributes["data-table"].".required.".$name, null ) ) ? "required" : null ;
@endphp
<div class="form-group {{ $name }} {{ $required }} {{ $errors->first($name, "has-error") }}">
    {!! Form::formLabel($title)  !!}
    {{ Form::select($name, config("forms.{$attributes["data-table"]}.options.{$name}" , ["1" => "Yes", "0" => "No"] ) , $value, array_merge(['class' => "form-control dash-select {$attributes["data-table"]} $name", $required], $attributes)) }}
    {!! $errors->first($name, '<p class="text-danger">:message</p>') !!}
</div>

