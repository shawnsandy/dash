<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 3/6/17
 * Time: 11:49 AM
 */

namespace ShawnSandy\Dash;

use Facades\Brotzka\DotenvEditor\DotenvEditor;
use Illuminate\Support\HtmlString;
use Facades\Rap2hpoutre\LaravelLogViewer\LaravelLogViewer;
use Route;
use ShawnSandy\Dash\Builder\GenerateFormsFields;

class Dash
{
    protected $logs;

    protected $settings;

    protected $env;

    public function __construct()
    {

        //$this->logs = app(LaravelLogViewer::class);
        // $this->env = app(DotenvEditor::class);
    }

    public function routes()
    {
        require __DIR__ . '/routes.php';
    }

    public function components() {
        include_once __DIR__ ."/components/html-components.php";
        include_once __DIR__ ."/components/form-components.php";
    }

    public function getLogs()
    {
        return collect(LaravelLogViewer::all());
    }

    public function getEnv()
    {
        return DotenvEditor::getContent();
    }

    public function getFillables($model) {
        $columns = app($model);
        return $columns->getFillable();
    }

    public function formLabels($table, $name, $type = 'text') {
        return config("dash.forms.$table.field_types." . $name, $type);
    }

    public function htmlString($string) {
        $htmlString = new HtmlString($string);
        return $htmlString ;
    }

    public function routeUri() {
        return explode("/", Route::current()->uri());
    }

}
