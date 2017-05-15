# Dash (beta)

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Dash is a Laravel package that makes Admin / UI development easier. Warning it will not do **all of your crud work**, code is required. Enjoy! (Preview Release). [Read the full docs here](/docs).

## Install

Via Composer

``` bash
$ composer require shawnsandy/dash
```

__Add to the config/app.php providers array__ 

``` php

ShawnSandy\Dash\DashServicesProvider::class,

// dependencies
Collective\Html\HtmlServiceProvider::class,

```

__Add to config/app.php aliases array__


```php 

"Dash" => ShawnSandy\Dash\DashFacade::class,
"DashForms" => ShawnSandy\Dash\Builder\GenerateFormFieldsFacade::class,

// dependencies

'Form' => Collective\Html\FormFacade::class,
'Html' => Collective\Html\HtmlFacade::class,

```

__Dash Routes__

```php
Route::group(['prefix' => 'admin'], function(){
   Dash::routes();
});
```

## Usage

__Dash Components__


*Icons based on font awesome*

``` blade

{{ Html::dashIcons() }} 
{{ Html::dashIcons("users") }} //icon name


```


*Data Table*

``` blade
{{ Html::dataTable($users, // users data
    ["id", "name", "email", "created_at"], // columns (title)
    ['page_length' => 15, 'order' => "desc", "edit_url" => '/admin/users/'], // options
    ['class' => 'data-table'] // element attributes
    )
}}

```

*Forms

``` blade

{{ Form::createForm('App\User', "admin/users") }}

```

__Slot based components (Laravel 5.4^)__
-------------------------------------------------------

* **Info Panel**

``` blade

@component("dash::components.panels.info", ["title" => "Users", "icon" => "circle-o"])
<h3>{{ count($users) }} Registered Users</h3>
@endcomponent

```

* **Widget**

``` php

@component("dash::components.panels.widget", ["title" => "Add New User(s)"])

        {{ config(["dash.forms.users.field_types.password" => "text"]) }}

        {{ Form::createForm('App\User', "admin/users") }}

@endcomponent

```
[Read the full docs here](/docs).

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

## Security

If you discover any security related issues, please email shawnsandy04@gmail.com instead of using the issue tracker.

## Credits

- [Shawn Sandy][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/shawnsandy/dash.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/shawnsandy/dash/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/shawnsandy/dash.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/shawnsandy/dash.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/shawnsandy/dash.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/shawnsandy/dash
[link-travis]: https://travis-ci.org/shawnsandy/dash
[link-scrutinizer]: https://scrutinizer-ci.com/g/shawnsandy/dash/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/shawnsandy/dash
[link-downloads]: https://packagist.org/packages/shawnsandy/dash
[link-author]: https://github.com/shawnsandy

