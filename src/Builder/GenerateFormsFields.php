<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 3/11/2017
     * Time: 5:16 PM
     */

    namespace ShawnSandy\Dash\Builder;

    use App\User;
    use Collective\Html\FormBuilder;
    use Schema;

class GenerateFormsFields
{

    protected $fieldAttributes;

    protected $forms;

    public function __construct()
    {
        $this->fieldAttributes();
        $this->forms = app(FormFields::class);
    }

    public function buildModelFields($model_path)
    {

        $model = app($model_path);
        $table = $model->getTable();
        $fields = collect($this->renderModelFields($model_path))->map(function ($type, $name) use ($table) {
            return $this->render(
                config("dash.forms.$table.field_types." . $name, $type),
                [
                    $name,
                    config("dash.forms.$table.labels." . $name, $name),
                   ["data-table" =>  $table],
                ]
            );
        });

        return $fields;
    }

    public function buildTableFields($table)
    {

        $fields = collect($this->renderTableFields($table))->map(function ($type, $name) use ($table) {
            return $this->render(
                config("dash.forms.$table.field_types." . $name, $type),
                [$name, "User {$name}"]
            );
        });

        return $fields;
    }

    /**
         * @param       $field
         * @param array $array
         * @return mixed
         */
    public function render($field, $array = [])
    {
        return $this->forms->render($field, $array);
    }

    /**
         * @param $table_name
         * @return static
         */
    public function renderTableFields($table_name)
    {

        $fields = $this->getColumnsFromTable($table_name);
        $results = $this->buildFields($fields);

        return $results;
    }

    public function renderModelFields($db_model)
    {

        $fields = $this->getColumnsFromModel($db_model);
        $results = $this->buildFields($fields);

        return $results;
    }


    /**
         * @param $fields
         * @return array|mixed|collections
         */
    public function buildFields($fields)
    {
        $results = collect($fields)->flatMap(function ($items, $key) {
            return [$key => $this->mapToFieldAttribute($items)];
        });

        return $results;
    }

    /**
         * @param $table_name
         * @return mixed
         */
    public function getColumnsFromTable($table_name)
    {
        $tables = Schema::getColumnListing($table_name);
        $fields = $this->mapColumnsToFieldType($tables, $table_name);

        return $fields;
    }

    public function getColumnsFromModel($model)
    {
        $column = app($model);
        $fields = $this->mapColumnsToFieldType($column->getFillable(), $column->getTable());

        return $fields;
    }


    /**
         * @param array $columns
         * @param       $table
         * @return mixed
         */
    public function mapColumnsToFieldType(array $columns, $table)
    {

        $fields = collect($columns)->flatMap(function ($item) use ($table) {
            return [$item => Schema::getColumnType($table, $item)];
        });

        return $fields;
    }


    public function mapToFieldAttribute($field)
    {
        $type = $this->fieldAttributes->search(function ($item) use ($field) {
            return in_array($field, $item);
        });

        if (!$type) :
            $type = $this->fieldAttributes->search(function ($item, $key) use ($field) {
                $array = explode("_", $key);

                return (in_array($field, $array));
            });
        endif;

        return $type ? $type : "text";
    }

    public function fieldAttributes()
    {
        $fields['text'] = ['string'];
        $fields['textarea'] = ['text'];
        $fields['richtext'] = ['blob', 'mediumtext', 'longtext', 'blob'];
        $fields['select'] = ['bool'];
        $fields['time'] = ["time"];
        $fields['date'] = ['date'];
        $fields['datetime'] = ['datetime', 'timestamp'];

        $this->fieldAttributes = collect($fields);

        return collect($fields);
    }

    public function setFieldAttributes(array $attributes)
    {
        $this->fieldAttributes = $attributes;

        return $this;
    }

    public function getFieldAttributes()
    {

        return $this->fieldAttributes;
    }
}
