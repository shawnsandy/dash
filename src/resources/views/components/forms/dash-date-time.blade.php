<div class="form-group {{ $name }}">
    <label for="{{ $name }}" class="{{ $name }}">{{ $title }}</label>
    {{ Form::text($name, $value, array_merge(['class' => "form-control dash-date-time $name"], $attributes)) }}

</div>
@include("dash::components.forms.errors", ["name" => $name])
