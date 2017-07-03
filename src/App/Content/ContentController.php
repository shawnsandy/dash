<?php
/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 3/6/17
 * Time: 2:18 PM
 */

namespace ShawnSandy\Dash\App\Content;

use Illuminate\Routing\Controller;
use ShawnSandy\Bluelines\App\Blueline;

class ContentController extends Controller
{


    public function index()
    {
        return view("dash::content");
    }

    public function create()
    {

    }

    public function edit(Blueline $content)
    {

        $content->load("categories", "tags");
        return view("dash::");

    }


}
