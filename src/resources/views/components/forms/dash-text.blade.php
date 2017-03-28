<div class="form-group {{ $name }}">
    <label for="{{ $name }}" class="{{ $name }}">{{ config("dash.forms.labels.".$name , $title ) }}</label>
    {{ Form::text($name, $value, array_merge(['class' => "form-control dash-text $name"], $attributes)) }}
</div>
@include("dash::components.forms.errors", ["name" => $name])
