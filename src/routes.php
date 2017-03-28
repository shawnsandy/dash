<?php

/**
 * Created by PhpStorm.
 * User: shawnsandy
 * Date: 10/27/16
 * Time: 12:58 PM
 *
 */


Route::get("/", '\ShawnSandy\Dash\App\Dash\DashController');

Route::get("content", '\ShawnSandy\Dash\App\Content\ContentController');

Route::get("media", '\ShawnSandy\Dash\App\Media\MediaController');

Route::get("pages", '\ShawnSandy\Dash\App\Pages\PagesController');

Route::get("system", '\ShawnSandy\Dash\App\System\SystemController');

Route::resource("users", '\ShawnSandy\Dash\App\Users\UseradminController');

Route::get("settings", '\ShawnSandy\Dash\App\Settings\SettingsController');
