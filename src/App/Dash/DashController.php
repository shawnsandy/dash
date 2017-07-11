<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 3/6/17
 * Time: 10:54 AM
 */

namespace   ShawnSandy\Dash\App\Dash;

use Illuminate\Routing\Controller;

class DashController extends Controller
{


    public function __invoke()
    {
        return view("dash::index");
    }
}
