# Dash (beta)

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Dash is a Laravel package that makes Admin / UI development easier. Warning it will not do **all of yourcrud work** and some code is required. Enjoy! (Preview Release)

## Install

Via Composer

``` bash
$ composer require shawnsandy/dash
```

__Add to the config/app.php providers array__ 

``` php
ShawnSandy\Dash\DashServicesProvider::class,
Collective\Html\HtmlServiceProvider::class,
```

__Add to config/app.pgp aliases array__

```php 
"Dash" => ShawnSandy\Dash\DashFacade::class,
"DashForms" => ShawnSandy\Dash\Builder\GenerateFormFieldsFacade::class,
'Form' => Collective\Html\FormFacade::class,
'Html' => Collective\Html\HtmlFacade::class,

```

## Usage

__Dash Components__


*Icons*

``` blade

{{ Html::dashIcons() }} 


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

