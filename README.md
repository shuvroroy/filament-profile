# A simple profile page for Filament.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/ryangjchandler/filament-profile.svg?style=flat-square)](https://packagist.org/packages/ryangjchandler/filament-profile)
[![GitHub Tests Action Status](https://img.shields.io/github/workflow/status/ryangjchandler/filament-profile/run-tests?label=tests)](https://github.com/ryangjchandler/filament-profile/actions?query=workflow%3Arun-tests+branch%3Amain)
[![GitHub Code Style Action Status](https://img.shields.io/github/workflow/status/ryangjchandler/filament-profile/Check%20&%20fix%20styling?label=code%20style)](https://github.com/ryangjchandler/filament-profile/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amain)
[![Total Downloads](https://img.shields.io/packagist/dt/ryangjchandler/filament-profile.svg?style=flat-square)](https://packagist.org/packages/ryangjchandler/filament-profile)

This package provides a very simple `Profile` page that allows the current user to manage their name, email address and password inside of Filament.

## Installation

You can install the package via Composer:

```bash
composer require ryangjchandler/filament-profile
```

Optionally, you can publish the views using

```bash
php artisan vendor:publish --tag="filament-profile-views"
```

## Usage

```php
$filament-profile = new RyanChandler\FilamentProfile();
echo $filament-profile->echoPhrase('Hello, RyanChandler!');
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

- [Ryan Chandler](https://github.com/ryangjchandler)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
