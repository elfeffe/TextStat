# This is a package to use Python's TextStat inside Laravel

[![Latest Version on Packagist](https://img.shields.io/packagist/v/elfeffe/textstat.svg?style=flat-square)](https://packagist.org/packages/elfeffe/textstat)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/elfeffe/textstat/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/elfeffe/textstat/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/elfeffe/textstat/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/elfeffe/textstat/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/elfeffe/textstat.svg?style=flat-square)](https://packagist.org/packages/elfeffe/textstat)

This is a wrapper for Python's texstat in Laravel.
You can use all its functions https://github.com/textstat/textstat
## Installation

You can install the package via composer:

```bash
pip install textstat
```

```bash
composer require elfeffe/textstat
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="textstat-config"
```

## Usage

```php
$text = "Your sample text goes here";
$results = TextStat::syllable_count($text);
dump($results);
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Federico](https://github.com/elfeffe)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
