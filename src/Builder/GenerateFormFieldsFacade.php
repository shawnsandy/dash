<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 3/12/2017
     * Time: 10:08 PM
     */

    namespace ShawnSandy\Dash\Builder;

    use Illuminate\Support\Facades\Facade;

class GenerateFormFieldsFacade extends Facade
{

    public static function getFacadeAccessor()
    {
        return "DashForms";
    }
}
