ConfigDumpBundle
================

A Symfony2 bundle that provides a console command to dump all set parameters.

[![Build Status](https://travis-ci.org/hautelook/ConfigDumpBundle.svg)](https://travis-ci.org/hautelook/ConfigDumpBundle)

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