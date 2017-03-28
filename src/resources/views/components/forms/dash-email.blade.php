<div class="form-group {{ $name }}">
    <label for="{{ $name }}" class="{{ $name }}">{{ $title }}</label>
    {{ Form::email($name, $value, array_merge(['class' => "form-control dash-email $name"], $attributes)) }}

</div>
@include("dash::components.forms.errors", ["name" => $name])
