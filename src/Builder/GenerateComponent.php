<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 3/14/2017
     * Time: 7:38 PM
     */

    namespace ShawnSandy\Dash\Builder;


    use Collective\Html\HtmlBuilder;

    class GenerateBuilder
    {

        protected $component;

        public function __construct()
        {
            $this->component = app(HtmlBuilder::class);
        }

    }
