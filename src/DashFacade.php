<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 3/6/17
 * Time: 11:51 AM
 */

namespace ShawnSandy\Dash;


use Illuminate\Support\Facades\Facade ;

class DashFacade extends Facade
{


    protected static function getFacadeAccessor() {
        return "Dash";
    }

}
