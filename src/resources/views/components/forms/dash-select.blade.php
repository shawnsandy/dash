<div class="form-group {{ $name }}">
    <label for="{{ $name }}" class="{{ $name }}">{{ $title }}</label>
    {{ Form::select($name, ["1" => "Yes", "0" => "No"] , $value, array_merge(['class' => "form-control dash-select $name"], $attributes)) }}

</div>
@include("dash::components.forms.errors", ["name" => $name])
