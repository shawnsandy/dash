{{ Form::model($data,  array_merge(["method" => "put", "url" => $url, "files" => true] )) }}

{{ Form::dashFields($model) }}
<hr>
{{ Form::dashClose() }}
