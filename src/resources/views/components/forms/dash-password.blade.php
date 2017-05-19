<div class="form-group {{ $name }}">
    {!! Form::formLabel($title)  !!}
    {{ Form::password($name, array_merge(['class' => "form-control dash-password $name"], $attributes)) }}

</div>
@include("dash::components.forms.errors", ["name" => $name])
