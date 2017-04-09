{{ Form::model($data,  array_merge(["method" => "put", "url" => $url], $options )) }}

{{ Form::dashFields($model) }}
<hr>
{{ Form::dashClose() }}
