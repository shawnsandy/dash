<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 3/6/17
 * Time: 2:31 PM
 */

namespace ShawnSandy\Dash\App\Pages;

use Illuminate\Routing\Controller;

class PagesController extends Controller
{

    public function __invoke()
    {
        return view("dash::pages");
    }
}
