{{ Form::model($data,  array_merge(["method" => "put", "url" => $url] )) }}

{{ Form::dashFields($model) }}
<hr>
{{ Form::dashClose() }}
