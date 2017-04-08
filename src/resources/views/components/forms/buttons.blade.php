<p class="text-right">
    <button type="submit" class="btn btn-primary {{ $style or '' }}">
        {{ $label or "Save Record" }}
    </button>
    <button type="reset"  class="btn btn-default {{ $style or '' }}">
        {{ $options["btn_reset"] or " Reset" }}
    </button>
</p>
