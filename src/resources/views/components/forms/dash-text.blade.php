<div class="form-group {{ $name }}">
    {!! Form::formLabel($title)  !!}
    {{ Form::text($name, $value, array_merge(['class' => "form-control dash-text {$attributes["data-table"]} {$name}"], $attributes)) }}
</div>
@include("dash::components.forms.errors", ["name" => $name])
