@if(isset($data) && is_array($data))
     {{ Form::model($data,  array_merge(["method" => "put", "url" => $url], $options )) }}
@else
    {{ Form::open(["url" => $url]) }}
@endif
{{ Form::dashFields($model) }}

<p class="text-right">
    <button type="submit" class="btn btn-primary">{{ $options["btn_save"] or "Save" }} </button>
    <button type="reset" class="btn btn-default">{{ $options["btn_reset"] or " Reset" }} </button>
</p>

{{ Form::close() }}
