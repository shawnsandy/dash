@foreach(DashForms::buildCustomFields($custom_fields) as $field)
    {{ $field }}
@endforeach
