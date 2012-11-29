composer for pimcore
====================

Integrates the [composer](http://getcomposer.org/) autoloader into pimcore. After installing, you can manage libraries with composer and use them with your pimcore installation.

Installation
------------

1. Install the plugin
2. Follow the [composer/composer](http://github.com/composer/composer) installation instructions to install libraries into /vendor
3. Develop using the newly installed libraries
4. If you are using a SCM system (e.g. git, svn) on your project you'll probably want to ignore/exclude the `/vendor` directory

Example
-------

We want to use Symfony's console component. First, create a `composer.json` file specifying the dependency.

``` json
{
    "require": {
        "symfony/console": "*"
    }
}
```

Install composer if you don't have done so yet.

``` sh
$ curl -s https://getcomposer.org/installer | php
```

Use composer to install the needed component(s) into `/vendor` and create an autoloader file we can use later.

``` sh
$ php composer.phar install
```

Use the library in your project.

``` php
<?php
class ExampleCommand extends Symfony\Component\Console\Command\Command
{
    // do fancy stuff here
}
```
