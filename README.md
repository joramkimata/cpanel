## Laravel 5 Cpanel

The tool which make your laravel project ready to be deployed to your web shared hosting file manager (cpanel file manager)



### Requirements
```
Laravel 5+
PHP >= 5.6
chumper/zipper >= 1.0.1! @ https://github.com/Chumper/Zipper

```

### Installation
a) Run

```
composer require biggo6/cpanel dev-master
```

b) Add service provider to **/config/app.php** file.
```php
'providers' => [
    ...
    'Biggo6\Cpanel\Biggo6CpanelServiceProvider',
],
```


### Usage
This package registers new commands, do ``php artian list`` to see, find command called ``cpanel:build``.

To build your laravel 5 project as as can be uploaded later in your web shared hosting cpanel run the following command

```
$~/opt/codes >php artisan list
=======================================
---
...
.....
cpanel:build
```

## Then run

```
$~/opt/codes >php artisan cpanel:build

```

Follow the rest instructions

### Successfully now you will find  ``build.zip`` file under project root folder, this is one uploded to cpanel file managers



