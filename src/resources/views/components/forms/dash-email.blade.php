<div class="form-group {{ $name }}">
     {{ Form::dashLabel($title, $name)}}
    {{ Form::email($name, $value, array_merge(['class' => "form-control dash-email $name"], $attributes)) }}

</div>
@include("dash::components.forms.errors", ["name" => $name])
