<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 3/6/17
 * Time: 11:49 AM
 */

namespace ShawnSandy\Dash;

use Brotzka\DotenvEditor\DotenvEditor;
use Rap2hpoutre\LaravelLogViewer\LaravelLogViewer;
use ShawnSandy\Dash\Builder\GenerateFormsFields;

class Dash
{
    protected $logs;

    protected $settings;

    protected $env;

    public function __construct()
    {

        $this->logs = app(LaravelLogViewer::class);
        $this->env = app(DotenvEditor::class);
    }

    public function routes()
    {
        require __DIR__ . '/routes.php';
    }

    public function getLogs()
    {
        return collect($this->logs->all());
    }

    public function getEnv()
    {
        return $this->env->getContent();
    }

    public function getFillables($model) {
        $columns = app($model);
        return $columns->getFillable();
    }

    public function formLabels($table, $name, $type = 'text') {
        return config("dash.forms.$table.field_types." . $name, $type);
    }



}
