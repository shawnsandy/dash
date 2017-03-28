<div class="form-group {{ $name }}">
    <label for="{{ $name }}" class="{{ $name }}">{{ $title }}</label>
    {{ Form::textarea($name, $value, array_merge(['class' => "form-control dash-rich-text $name"], $attributes)) }}

</div>
@include("dash::components.forms.errors", ["name" => $name])

