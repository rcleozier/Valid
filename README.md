# Valid -  PHP validation built on PHP filter_var

This library was created to provide a clean way of user PHP filter_var validation options

## Installation
If you're using Composer to manage dependencies, you can include the following in your composer.json file:

```json
"require": {
    "rcleozier/Valid": "~0.1"
}
```
Then, after running `composer update` or `php composer.phar update`, you can
load the class using Composer's autoloading:

```php
require 'vendor/autoload.php';
```

Otherwise, you can simply require the file directly:

```php
require_once 'path/to/Valid/Valid.php';
```

## Usage

Below are some same usages below

### email()

Validates whether the value is a valid e-mail address.

```php
Valid::email("coder@github.com")
```

### float()

Validates value as float, and converts to float on success.

```php
Valid::float(1.22)
```

### ip()

Validates value as IP address, optionally only IPv4 or IPv6 or not from private or reserved ranges.

```php
Valid::ip(198.0.0.1)
```

## Docs

See all the available options by checking out 
http://php.net/manual/en/filter.filters.validate.php

