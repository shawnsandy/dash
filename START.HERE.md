# Laravel Package Start Toolkit


A simple toolkit to KickStart laravel package development.

## Quick Start

* Open your laravel project folder 
* Create a directory in your project root to store your packages lets just call it packages. 
* Lets add the `YourVendorName` directory to the pacakge folder we just creates this will help keep things organised by vendor. Your folder sturcture should look something like this `packages/YourVendorName/` 


* `cd` in the Vendor folder and clone the github repo 

``` bash

git clone https:/github.com/shawnsandy/PkgStart packagename

```

  
* CD into your new package dir and run `$ php prefill.php` in the command line. Follow the prompts to replace Shawn Sandy shawnsandy https://github.com/shawnsandy shawnsandy04@gmail.com shawnsandy dash Dashboard for admin :psr4_namespace with their correct values package files, CHANGELOG.md, CONTRIBUTING.md, LICENSE.md, `/src/**.php` and composer.json files:  Delete the file prefill.php when done.

``` bash 

 php prefill.php
 
```

* Add the package to composer.json `psr-4` namespace (code below). Note packages is the folder we created to clone our packages into, replace YourVendorName and PackageName with your respectives names you entered in base prompts.


``` json

"psr-4": {
    "App\\": "app/",
    "YourVendorName\\PackageName\\": "packages/YourVendorName/PackageName/src",
 },

``` 
  
Dump composer autoload


``` bash

composer dumpautoload

```
          


* Go to config/app.php and add the package service provider


``` php

VendorName\PackageName\ServicesProvider::class,

```

* Reset the project


``` bash

rm -rf .git && git init

git a .

git commit -m "Initialized MyPackageName..."


```


__Build something awesome__


## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CONDUCT](CONDUCT.md) for details.

### Security

If you discover any security related issues, please email shawnsandy04@gmail.com instead of using the issue tracker.


### License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

