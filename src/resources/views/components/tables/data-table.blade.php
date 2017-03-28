<div class="table-responsive">
    <table id="{{ $table_id or 'data-table'}}" class="display table {{ $attributes["class"] or '' }}" width="100%"
           data-page-length="{{ $options["page_length"] or '20' }}"
           data-order='[[ 0, "{{ $options["order"] or 'desc' }}" ]]'>
        <thead>
        <tr class="text-uppercase ">
            @foreach($table_columns as $col)
                <th class="{{ $col }}">{{ str_replace("_", " ", $col) }}</th>
            @endforeach
            <th>Action</th>
        </tr>
        </thead>
    </table>
</div>

@php
    $button = '<button class="data-btn btn btn-primary btn-xs" disabled="true">View / Edit</button>';
    $button_cols = ["data" => null, "class" => 'action', 'defaultContent' => "$button"];
    $columns = collect($table_columns)->map(function($items) {
        return ["data" => $items, "class" => $items ];
     })->push($button_cols);
@endphp

@push("styles")
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/dataTables.bootstrap.min.css">
<style>

</style>
@endpush

@push("scripts")
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>
<script>
    var table_data = <?= collect($data) ?>;
    var table_columns = <?= $columns ?>;
    var el = "{{ $table_id or "#data-table"}}";
    var row_id;
    var data_btn;
    var edit_url = "{{ $options["edit_url"] or 'null' }}";
</script>

@endpush

@push('inline-scripts')

<script>
    $(document).ready(function () {

        var table = $(el).DataTable({
            data: table_data,
            "columns": table_columns
        });

        $(el + ' tbody').on('click', 'tr', function () {
            data_btn = $(this).find(".data-btn");
            $(".btn").prop("disabled", true);
            if ($(this).hasClass('selected')) {
                $(this).removeClass('selected');
                data_btn.prop("disabled", true);
            } else {
                table.$('tr.selected').removeClass('selected');
                $(this).addClass('selected');
                data_btn.prop("disabled", false);
                var data = table.rows(".selected").data();
                row_id = data[0]['id'];
            }

            $(data_btn).click(function () {
                if (edit_url == null) {
                    console.log("No edit url for row " + row_id)
                } else {
                    console.log(edit_url + row_id);
                    window.location.href = edit_url + row_id;
                }

            });
        });

    });
</script>

@endpush

