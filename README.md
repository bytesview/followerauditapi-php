![Alt text](https://www.followeraudit.com/images/fa-logo-dark.png)

# <p align="center">FollowerAudit PHP bindings
The FollowerAudit PHP library provides convenient access to the FollowerAudit API from applications written in the PHP language. It includes a pre-defined set of classes for API resources that initialize themselves dynamically from API responses which makes it compatible with a wide range of versions of the FollowerAudit API.

[![License](https://img.shields.io/badge/license-GNUV3-blue)](https://github.com/bytesview/followerauditapi-php/blob/main/LICENSE)

<br />

## Requirements

PHP 7.0 and later.

<br />

## Composer

You can install the bindings via [Composer](http://getcomposer.org/). Run the following command:

```bash
composer require faudit/fauditapi
```

<br />

## Manual Installation

If you do not wish to use Composer, you can download the [latest release](https://github.com/bytesview/followerauditapi-php/releases). Then, to use the bindings, include the `autoload.php` file.

```php
require_once('/path/to/followerauditapi-php/autoload.php');
```

<br />

## Dependencies

The bindings require the following extensions in order to work properly:

-   [`curl`](https://secure.php.net/manual/en/book.curl.php), although you can use your own non-cURL client if you prefer
-   [`json`](https://secure.php.net/manual/en/book.json.php)

If you use Composer, these dependencies should be handled automatically. If you install manually, you'll want to make sure that these extensions are available.

<br />

## Documentation

See the [API docs](https://www.followeraudit.com/docs/).