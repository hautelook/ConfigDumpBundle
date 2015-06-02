ConfigDumpBundle
================

A Symfony2 bundle that provides a console command to dump all set parameters.

[![Build Status](https://travis-ci.org/hautelook/ConfigDumpBundle.svg)](https://travis-ci.org/hautelook/ConfigDumpBundle)
[![Scrutinizer Code Quality](https://scrutinizer-ci.com/g/hautelook/ConfigDumpBundle/badges/quality-score.png?b=master)](https://scrutinizer-ci.com/g/hautelook/ConfigDumpBundle/?branch=master)
[![Code Coverage](https://scrutinizer-ci.com/g/hautelook/ConfigDumpBundle/badges/coverage.png?b=master)](https://scrutinizer-ci.com/g/hautelook/ConfigDumpBundle/?branch=master)
[![SensioLabsInsight](https://insight.sensiolabs.com/projects/04397a3d-4e45-460c-a31b-f607ed8a6a2e/mini.png)](https://insight.sensiolabs.com/projects/04397a3d-4e45-460c-a31b-f607ed8a6a2e)

## Introduction

## Installation

Simply run assuming you have installed composer.phar or composer binary (or add to your `composer.json` and run composer
install:

```bash
$ composer require hautelook/config-dump-bundle
```

You can follow `dev-master`, or use a more stable tag (recommended for various reasons). On the
[Github repository](https://github.com/hautelook/ConfigDumpBundle), or on [Packagist](http://www.packagist.org), you can
always find the latest tag.

Now add the Bundle to your Kernel:

```php
<?php
// app/AppKernel.php

public function registerBundles()
{
    $bundles = array(
        // ...
        new Hautelook\AliceBundle\HautelookConfigDumpBundle(),
        // ...
    );
}
```


## Usage

Run this:

```bash
$ app/console hautelook:dump:config
```
