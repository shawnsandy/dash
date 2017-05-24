<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 3/14/17
 * Time: 7:55 AM
 */

namespace ShawnSandy\Dash\Builder;

use Collective\Html\FormFacade as Form ;

class FormFields
{

    protected $fields = [];

    protected $forms;

    public $class_selectors = "";

    public function __construct()
    {
    }

    public function render($function, $options = [])
    {
        return call_user_func_array(array($this, "$function"), $options);
    }


    /**
     * @param array $fields
     */
    public function setFields($fields)
    {
        $this->fields = $fields;
    }

    public function fields()
    {
    }

    /**
     * @param string $class_selectors
     */
    public function setClassSelectors($class_selectors)
    {
        $this->class_selectors = $class_selectors;
    }

    public function text($field_name, $value = null, $attributes = [])
    {
        $field = Form::dashText($field_name, $value, $attributes);
        return $field;
    }

    public function hidden($field_name, $value = null, $attributes = [])
    {
        $field = Form::dashText($field_name, $value, $attributes);
        return $field;
    }

    public function password($field_name, $value = null, $attributes = [])
    {
        $field = Form::dashPassword($field_name, $value, $attributes);
        return $field;
    }

    public function email($field_name, $value = null, $attributes = [])
    {
        $field = Form::dashEmail($field_name, $value, $attributes);
        return $field;
    }

    public function textarea($field_name, $value = null, $attributes = [])
    {
        $field = Form::dashTextarea($field_name, $value, $attributes);
        return $field;
    }

    public function richtext($field_name, $value = null, $attributes = [])
    {
        $field = Form::dashRichText($field_name, $value, $attributes);
        return $field;
    }

    public function date($field_name, $value = null, $attributes = [])
    {
        $field = Form::dashDate($field_name, $value, $attributes);
        return $field;
    }


    public function datetime($field_name, $value = null, $attributes = [])
    {
        $field = Form::dashDateTime($field_name, $value, $attributes);
        return $field;
    }


    public function time($field_name, $value = null, $attributes = [])
    {
        $field = Form::dashTime($field_name, $value, $attributes);
        return $field;
    }


    public function select($field_name, $value = null, $attributes = [])
    {
        $field = Form::dashSelect($field_name, $value, $attributes);
        return $field;
    }

    public function file($field_name, $value = null, $attributes = [])
    {
        $field = Form::dashFile($field_name, $value, $attributes);
        return $field;
    }
}
