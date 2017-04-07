
@if(isset($data))
{{ Form::dashOpen(["url" => $url]) }}
@else 

@endif
{{ Form::dashFields($model) }}

<p class="text-right">
    <button type="submit" class="btn btn-primary">{{ $options["btn_save"] or "Save" }} </button>
    <button type="reset" class="btn btn-default">{{ $options["btn_reset"] or " Reset" }} </button>
</p>
{{ Form::dashClose() }}