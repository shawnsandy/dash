<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 3/6/17
 * Time: 2:29 PM
 */

namespace ShawnSandy\Dash\App\System;


use Illuminate\Routing\Controller;

class  SystemController extends Controller
{

    public function __invoke()
    {
        return view("dash::system");
    }

}
