<div class="form-group {{ $name }}  {{ $errors->first($name, "has-error") }}">
    {!! Form::formLabel($title)  !!}
    {{ Form::select($name, config("dash.forms.{$attributes["data-table"]}.options.{$name}" ,["1" => "Yes", "0" => "No"] ) , $value, array_merge(['class' => "form-control dash-select {$attributes["data-table"]} $name"], $attributes)) }}
    {!! Form::formError($name, $errors) !!}
</div>

