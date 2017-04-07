<?php
    /**
     * Created by PhpStorm.
     * User: Shawn
     * Date: 3/17/2017
     * Time: 6:13 PM
     */

    return  [

        /*
         *
         * Configure how forms/fields for each table are generated
         */

        'forms' => [

            "users" => [
                "field_types" => ["password" => "password", "id" => "hidden", "email" => "email"],
                "labels" => ["password" => "Add account password", "email" => "Enter a valid em@il"
                ],
            ]

        ]

    ];
