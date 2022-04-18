[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/support-ukraine.svg?t=1" />](https://supportukrainenow.org)

# This is my package unique-code-generator

[![Latest Version on Packagist](https://img.shields.io/packagist/v/mhfereydouni/unique-code-generator.svg?style=flat-square)](https://packagist.org/packages/mhfereydouni/unique-code-generator)
[![Tests](https://github.com/mhfereydouni/unique-code-generator/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/mhfereydouni/unique-code-generator/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/mhfereydouni/unique-code-generator.svg?style=flat-square)](https://packagist.org/packages/mhfereydouni/unique-code-generator)

This package helps to generate codes which look like random strings. These codes can be used instead of your items ids to hide data.

## Installation

You can install the package via composer:

```bash
composer require mhfereydouni/unique-code-generator
```

## Usage

```php
$uniqueCodeGenerator = new Mhfereydouni\UniqueCodeGenerator\UniqueCodeGenerator(7230323, 9006077);
echo $uniqueCodeGenerator
            ->characterList('LQJCKZMWDPTSXRGANYVBHF')
            ->outputLength(6)
            ->generate(4);

// output: QDWQGD
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

- [Mohammadhossein Fereydouni](https://github.com/mhfereydouni)
- [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
