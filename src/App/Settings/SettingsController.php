<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 3/6/17
 * Time: 2:33 PM
 */

namespace ShawnSandy\Dash\App\Settings;


use Illuminate\Routing\Controller;

class SettingsController extends Controller
{

    public function __invoke()
    {
        return view("dash::settings");
    }

}
