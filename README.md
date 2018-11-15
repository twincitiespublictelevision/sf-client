# sf-client
[![CircleCI](https://circleci.com/gh/twincitiespublictelevision/sf-client/tree/master.svg?style=svg)](https://circleci.com/gh/twincitiespublictelevision/sf-client/tree/master)

A miniature SalesForce client

### Usage

Documentation can be found at [https://twincitiespublictelevision.github.io/sf-client/](https://twincitiespublictelevision.github.io/sf-client/)

### Build

Install dependencies (+dev dependencies) with composer:

```
composer install
```

Use `codegen/generate.php` to create Result classes and client @method docs

```
php codegen/generate.php
```