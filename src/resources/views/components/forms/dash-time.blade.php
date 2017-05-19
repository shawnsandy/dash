<div class="form-group {{ $name }}">
    {!! Form::formLabel($title)  !!}
    {{ Form::text($name, $value, array_merge(['class' => "form-control dash-time $name"], $attributes)) }}

</div>
@include("dash::components.forms.errors", ["name" => $name])
