<p class="text-right">
    <button type="submit" class="btn btn-primary {{ $button_style or '' }}">
        {{ $button_label or "Save" }}
    </button>
    <button type="reset"  class="btn btn-default {{ $style or '' }}">
        {{ $options["btn_reset"] or " Reset" }}
    </button>
</p>

{{ Form::close() }}
