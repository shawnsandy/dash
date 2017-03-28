@if(isset($model) && is_array($model))
    {{ Form::model($model, array_merge(["method" => "put"], $options)) }}
@else
    {{ Form::open($options = []) }}
@endif
