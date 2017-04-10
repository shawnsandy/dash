<label for="{{ $name }}" class="{{ $name }} text-uppercase">
{{ config("dash.forms.labels.".$name , str_replace("_", " ", $title) ) }}
</label>
