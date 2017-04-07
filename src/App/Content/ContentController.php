<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 3/6/17
 * Time: 2:18 PM
 */

namespace ShawnSandy\Dash\App\Content;

use Illuminate\Routing\Controller;

class ContentController extends Controller
{

    public function __invoke()
    {
        return view("dash::content");
    }
}
