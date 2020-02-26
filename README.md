WeblabelHttpClientBundle
============

[![Build Status](https://travis-ci.org/weblabel-tech/WeblabelHttpClientBundle.svg?branch=master)](https://travis-ci.org/weblabel-tech/WeblabelHttpClientBundle)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/weblabel-tech/WeblabelHttpClientBundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/weblabel-tech/WeblabelHttpClientBundle/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/weblabel-tech/WeblabelHttpClientBundle/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/weblabel-tech/WeblabelHttpClientBundle/?branch=master)

Installation
============

Make sure Composer is installed globally, as explained in the
[installation chapter](https://getcomposer.org/doc/00-intro.md)
of the Composer documentation.

Applications that use Symfony Flex
----------------------------------

Open a command console, enter your project directory and execute:

```console
$ composer require weblabel/http-client-bundle
```

Applications that don't use Symfony Flex
----------------------------------------

### Step 1: Download the Bundle

Open a command console, enter your project directory and execute the
following command to download the latest stable version of this bundle:

```console
$ composer require weblabel/http-client-bundle
```

### Step 2: Enable the Bundle

Then, enable the bundle by adding it to the list of registered bundles
in the `config/bundles.php` file of your project:

```php
// config/bundles.php

return [
    // ...
    Weblabel\HttpClientBundle\WeblabelHttpClientBundle::class => ['all' => true],
];
```
