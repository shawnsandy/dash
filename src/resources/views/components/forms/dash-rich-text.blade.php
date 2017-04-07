<div class="form-group {{ $name }}">
     {{ Form::dashLabel($title, $name)}}
    {{ Form::textarea($name, $value, array_merge(['class' => "form-control dash-rich-text $name"], $attributes)) }}

</div>
@include("dash::components.forms.errors", ["name" => $name])

