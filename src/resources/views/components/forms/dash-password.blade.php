<div class="form-group {{ $name }}">
    <label for="{{ $name }}" class="{{ $name }}">{{ $title }}</label>
    {{ Form::password($name, array_merge(['class' => "form-control dash-password $name"], $attributes)) }}

</div>
@include("dash::components.forms.errors", ["name" => $name])
