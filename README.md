# PHP OLC SDK with saloon

[![Latest Version on Packagist](https://img.shields.io/packagist/v/smart-dato/php-olc-sdk.svg?style=flat-square)](https://packagist.org/packages/smart-dato/php-olc-sdk)
[![Tests](https://img.shields.io/github/actions/workflow/status/smart-dato/php-olc-sdk/run-tests.yml?branch=main&label=tests&style=flat-square)](https://github.com/smart-dato/php-olc-sdk/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/smart-dato/php-olc-sdk.svg?style=flat-square)](https://packagist.org/packages/smart-dato/php-olc-sdk)

This PHP package provides a clean and efficient integration of the OLC v2 API, a logistics platform API, enabling seamless communication with OLC's services. Built for modern PHP applications needing to interface with OLC for shipment tracking, shipment processing, and other logistics operations.

## Installation

You can install the package via composer:

```bash
composer require smart-dato/php-olc-sdk
```

## Usage

```php

$connector = new OlcConnector(
    url: 'https://olc.test/',
    token: '...',
);

$response = $connector->send(
    new CreateShipmentRequest(
        new ShipmentObject(
            shipmentType: 'PARCEL',
            shippingService: 'EC',
            pickupAddress: new AddressObject(
                warehouse: 'WH_1'
            ),
            deliveryAddress: new AddressObject(
                personName: "John Doe",
                companyName: 'Acme Inc.',
                street: '123 Main St',
                city: 'Anytown',
                zipcode: '12345',
                countryCode: 'DE',
            ),
            parcels: (new ParcelObjectCollection)
                ->add(new ParcelObject(
                    weight: 2.5, height: 10, length: 10, width: 10,
                ))
                ->add(new ParcelObject(
                    weight: 1.23
                ))
        )
    )
);

$response = $connector->send(
    new GetShipmentLabelRequest(
        value: 'OLS000000000001'
    )
);

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

- [SmartDato](https://github.com/smart-dato)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
