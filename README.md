# A PHP Package to connect to RedStag WMS API

[![Latest Version on Packagist](https://img.shields.io/packagist/v/booni3/redstag-wms.svg?style=flat-square)](https://packagist.org/packages/booni3/redstag-wms)
[![Tests](https://img.shields.io/github/actions/workflow/status/booni3/redstag-wms/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/booni3/redstag-wms/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/booni3/redstag-wms.svg?style=flat-square)](https://packagist.org/packages/booni3/redstag-wms)

## Installation

You can install the package via composer:

```bash
composer require booni3/redstag-wms
```

## Usage

### Authenticate

```php
$config = new \Booni3\RedstagWms\Api\Config();
$config->username = 'username-123';
$config->password = 'abcdefghijklmnop';
$api = \Booni3\RedstagWms\RedstagWms::make($config)->login();
```

### Get Products

```php
$products = $api->products()->getProducts(
    [
        'created_at' => [
            'from' => now()->subYears(2)->format('Y-m-d'),
            'to' => now()->format('Y-m-d'),
        ]
    ],
    [
        'sort_field' => 'created_at',
        'sort_dir' => 'desc',
        'page' => 1,
        'limit' => 100
    ]
);
```

### Get Order

```php
$order = $api->orders()->getOrder(143708)
```

### Get Orders

```php
$orders = $api->orders()->getOrders(
    [
        'created_at' => [
            'from' => now()->subYears(2)->format('Y-m-d'),
            'to' => now()->format('Y-m-d'),
        ]
    ],
    [
        'sort_field' => 'created_at',
        'sort_dir' => 'desc',
        'page' => 1,
        'limit' => 100
    ],
    [
        'unique_id',
        'created_at'
    ]
);
```

### List Inventories

```php
$inventory = $api->inventory()->listInventories(null, null, new DateTime('now -24 hours'));
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](https://github.com/spatie/.github/blob/main/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

- [Adam Lambert](https://github.com/booni3)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
