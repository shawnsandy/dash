<div class="form-group {{ $name }}">
    {{ Form::dashLabel($title, $name)}}
    {{ Form::file($name) }}
</div>
@include("dash::components.forms.errors", ["name" => $name])
