<div class="form-group {{ $name }}">
     {{ Form::dashLabel($title, $name)}}
    {{ Form::text($name, $value, array_merge(['class' => "form-control dash-date $name"], $attributes)) }}

</div>
@include("dash::components.forms.errors", ["name" => $name])
