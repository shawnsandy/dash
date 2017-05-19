<div class="form-group {{ $name }}">
    {!! Form::formLabel($title)  !!}
    {{ Form::text($name, $value, array_merge(['class' => "form-control dash-date $name"], $attributes)) }}
    @include("dash::components.forms.errors", ["name" => $name])
</div>

