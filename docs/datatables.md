#DataTables Component

Quickly generate tables for you data-sets using the [jQyuery Datatables](//datatables.net) 

###Usage

```blade
{{ Html::dataTable($users, // users data
    ["id", "name", "email", "created_at"], // columns (title)
    ['page_length' => 15, 'order' => "desc", "edit_url" => '/admin/users/'], // options
    ['class' => 'data-table'] // element attributes
    )
}}
```

View the src [here](../../components/dash/src/resources/views/components/tables/data-table.blade.php)

__ScreenShot__
