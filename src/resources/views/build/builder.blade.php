@php
$columns = collect($cols)->map(function($items) {
 return ["data" => $items ];
 })->toJson();
@endphp
<table id="example" class="display" width="100%">
    <thead>
    <tr>
        @foreach($cols as $col)
        <th class="text-capitalize">{{ str_replace("_", " ",$col) }}</th>
        @endforeach
    </tr>
    </thead>
</table>
<hr>

{{ Html::dataTable($data, $cols, null) }}

<link rel="stylesheet" href="https://cdn.datatables.net/1.10.13/css/jquery.dataTables.min.css">
<script src="https://cdn.datatables.net/1.10.13/js/jquery.dataTables.min.js"></script>

<script>

    var _data = <?= collect($data)->toJson()  ?>

    $(document).ready(function () {
        $('#example').DataTable({
            data: _data,
            "columns": <?= $columns ?>
        });
    });
</script>




