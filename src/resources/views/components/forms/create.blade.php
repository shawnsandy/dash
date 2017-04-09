@if(isset($data) && is_array($data))
     {{ Form::model($data,  array_merge(["method" => "put", "url" => $url], $options )) }}
@else
    {{ Form::open(["url" => $url]) }}
@endif

{{ Form::dashFields($model) }}
<hr>
{{ Form::dashClose() }}
