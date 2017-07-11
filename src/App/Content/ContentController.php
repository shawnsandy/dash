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

        $content = Blueline::select(["id", "title", "created_at"])->desc()->get();
        return view("dash::content.index", compact("content"));
    }

    public function create()
    {
        return view("dash::content.create-content");
    }

    public function edit(Blueline $content)
    {

        $content->load("categories", "tags");
        return view("dash::content.edit-content", compact("content"));

    }


}
