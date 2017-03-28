<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 3/6/17
 * Time: 2:40 PM
 */

namespace ShawnSandy\Dash\App\Media;


use Illuminate\Routing\Controller;

class MediaController extends  Controller
{

    public function __invoke()
    {
        return view("dash::media");
    }

}
