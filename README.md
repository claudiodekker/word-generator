[![Latest Version on Packagist](https://img.shields.io/packagist/v/claudiodekker/word-generator.svg)](https://packagist.org/packages/claudiodekker/word-generator)
[![Github Tests Action Status](https://github.com/claudiodekker/word-generator/actions/workflows/tests.yml/badge.svg)](https://github.com/claudiodekker/word-generator/actions/workflows/tests.yml)
[![GitHub Code Style Action Status](https://img.shields.io/github/actions/workflow/status/claudiodekker/word-generator/fix-styling.yml?label=code%20style&logo=github&branch=master)](https://github.com/claudiodekker/word-generator/actions?query=workflow%3A"Check+%26+fix+styling"+branch%3Amaster)
[![Total Downloads](https://img.shields.io/packagist/dt/claudiodekker/word-generator.svg)](https://packagist.org/packages/claudiodekker/word-generator)

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

### Custom Word Lists

It is also possible to override the adjectives and nouns that can be used to generate the random phrases. For example, you may wish to do this if you want to use words that are themed or branded to your project.

To override the adjectives and nouns at the same time, you can pass an array of strings for both the first and second parameter:

```php
<?php

use ClaudioDekker\WordGenerator\Generator;

$adjectives = ['adjective one', 'adjective two'];
$nouns = ['noun one', 'noun two'];

Generator::setWordLists($adjectives, $nouns);
```

If you only wish to override the adjectives, you can use the following:

```php
<?php

use ClaudioDekker\WordGenerator\Words\Adjective;

$adjectives = ['adjective one', 'adjective two'];

Adjective::setWordList($adjectives);
```

If you only wish to override the nouns, you can use the following:

```php
<?php

use ClaudioDekker\WordGenerator\Words\Noun;

$nouns = ['noun one', 'noun two'];

Noun::setWordList($nouns);
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information what has changed recently.

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) for details.

## Security

If you discover any security related issues, please email claudio@ubient.net instead of using the issue tracker.

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
