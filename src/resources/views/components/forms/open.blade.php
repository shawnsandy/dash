@if(!empty($data) && is_array($data))
    {{ Form::model($data, array_merge(["method" => "put"], $options)) }}
@else
    {{ Form::open($options) }}
@endif
