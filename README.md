# A Filament plugin for adding a confirmation dialog when a form is dirty

[![Latest Version on Packagist](https://img.shields.io/packagist/v/jsn1nj4/filament-confirm-nav-with-dirty-state.svg?style=flat-square)](https://packagist.org/packages/jsn1nj4/filament-confirm-nav-with-dirty-state)
[![GitHub Tests Action Status](https://img.shields.io/github/actions/workflow/status/jsn1nj4/filament-confirm-nav-with-dirty-state/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/jsn1nj4/filament-confirm-nav-with-dirty-state/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/jsn1nj4/filament-confirm-nav-with-dirty-state/fix-php-code-style-issues.yml?branch=main&label=code%20style&style=flat-square)](https://github.com/jsn1nj4/filament-confirm-nav-with-dirty-state/actions?query=workflow%3A"Fix+PHP+code+style+issues"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/jsn1nj4/filament-confirm-nav-with-dirty-state.svg?style=flat-square)](https://packagist.org/packages/jsn1nj4/filament-confirm-nav-with-dirty-state)



This is where your description should go. Limit it to a paragraph or two. Consider adding a small example.

## Installation

You can install the package via composer:

```bash
composer require jsn1nj4/filament-confirm-nav-with-dirty-state
```

You can publish and run the migrations with:

```bash
php artisan vendor:publish --tag="filament-confirm-nav-with-dirty-state-migrations"
php artisan migrate
```

You can publish the config file with:

```bash
php artisan vendor:publish --tag="filament-confirm-nav-with-dirty-state-config"
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-confirm-nav-with-dirty-state-views"
```

This is the contents of the published config file:

```php
return [
];
```

## Usage

```php
$confirmNavigationWtihDirtyState = new JSn1nj4\ConfirmNavigationWtihDirtyState();
echo $confirmNavigationWtihDirtyState->echoPhrase('Hello, JSn1nj4!');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Elliot Derhay](https://github.com/JSn1nj4)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
