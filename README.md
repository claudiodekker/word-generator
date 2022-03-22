<p align="left">
  <a href="https://github.com/claudiodekker/word-generator/releases">
    <img src="https://img.shields.io/github/release/claudiodekker/word-generator.svg?style=flat-square" alt="Latest Version">
  </a>
  <a href="https://github.com/claudiodekker/word-generator/actions?query=workflow%3Atests+branch%3Amaster">
    <img src="https://img.shields.io/github/workflow/status/claudiodekker/word-generator/tests/master.svg?style=flat-square" alt="Build Status">
  </a>
  <a href="https://scrutinizer-ci.com/g/claudiodekker/word-generator">
    <img src="https://img.shields.io/scrutinizer/g/claudiodekker/word-generator.svg?style=flat-square" alt="Quality Score">
  </a>
  <a href="https://packagist.org/packages/claudiodekker/word-generator">
    <img src="https://img.shields.io/packagist/dt/claudiodekker/word-generator.svg?style=flat-square" alt="Total Downloads">
  </a>
</p>

# Word Generator

Generates creative words by randomly combining adjectives and nouns. 
This is useful for situations in which you need to generate a name that is unique or memorable.

## Installation

To install the package, run the following command:
```bash 
composer require claudiodekker/word-generator
```

## Usage

```php
<?php

use ClaudioDekker\WordGenerator\Generator;

echo Generator::generate(); // Outputs 'autumn firefly', 'crimson meadow', etc.
```

It's also possible to use a custom separator character, by passing it as the first argument:
```php
<?php

use ClaudioDekker\WordGenerator\Generator;

echo Generator::generate('-'); // Outputs 'autumn-firefly', 'crimson-meadow', etc.
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email claudio@ubient.net instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
