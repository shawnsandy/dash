<div class="form-group {{ $name }}">
     {{ Form::dashLabel($title, $name)}}
    {{ Form::select($name, config("dash.forms.{$attributes["data-table"]}.options.{$name}" ,["1" => "Yes", "0" => "No"] ) , $value, array_merge(['class' => "form-control dash-select $name"], $attributes)) }}
</div>
@include("dash::components.forms.errors", ["name" => $name])
