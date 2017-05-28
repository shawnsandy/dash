<?php

namespace ShawnSandy\Dash;

use Html;
use Illuminate\Support\ServiceProvider;
use ShawnSandy\Dash\Builder\GenerateFields;
use ShawnSandy\Dash\Builder\GenerateFormFieldsFacade;
use ShawnSandy\Dash\Builder\GenerateFormsFields;

/**
 * Class Provider
 *
 * @package ShawnSandy\PkgStart
 */
class DashServicesProvider extends ServiceProvider
{
    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {


        /**
         * Package views
         */
        $this->loadViewsFrom(__DIR__ . '/resources/views', 'dash');
        $this->publishes(
            [
                __DIR__ . '/resources/views' => resource_path('views/vendor/dash'),
            ],
            'dash-views'
        );

        $this->publishes(
            [
                __DIR__ . '/resources/views' => resource_path('views/theme/dash'),
            ],
            'dash-theme'
        );

        /**
         * Package assets
         */
        $this->publishes(
            [
                __DIR__.'/resources/assets/js/' => public_path('assets/dash/js/'),
                __DIR__.'/public/css/pagekit/sass/' => public_path('assets/dash/css/'),
                __DIR__.'/public/css/' => public_path('css/'),
            ],
            'dash-assets'
        );

        /**
         * Package config
         */
        $this->publishes(
            [__DIR__ . '/config/config.php' => config_path('dash.php')],
            'dash-config'
        );

        if (!$this->app->runningInConsole()) :
            include_once __DIR__ . '/Helpers/helper.php';
        endif;

        include_once __DIR__ ."/components/html-components.php";
        include_once __DIR__ ."/components/form-components.php";

        $this->themeDefaults();
    }

    /**
     * Register any package services.
     *
     * @return void
     */
    public function register()
    {

        $this->mergeConfigFrom(
            __DIR__ . '/config/config.php',
            'dash'
        );

        $this->app->bind('Dash', function () {
            return new Dash();
        });

        $this->app->bind('DashForms', function () {
            return new GenerateFormsFields();
        });

        $this->app->bind(GenerateFormFieldsFacade::class, function () {
            return new GenerateFields();
        });


    }


    /**
     * get the default theme
     */
    public function themeDefaults()
    {

        view()->composer(["*"], function ($view) {
            /* get the theme if set in config */
            $theme = config("dash.theme", null);
            /* if not theme is set in the config */
            /* check the theme folder if exist or use the theme in package*/
            if (!$theme):
                if (view()->exists("theme.dash.index")):
                    $theme = "theme.dash.";
                else :
                    $theme = "dash::";
                endif;
            endif;
            view()->share('theme', $theme);

        });

    }


}
