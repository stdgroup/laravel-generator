# laravel-generator

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]


This is where your description should go. Try and limit it to a paragraph or two, and maybe throw in a mention of what
PSRs you support to avoid any confusion with users and contributors.

## Structure

If any of the following are applicable to your project, then the directory structure should follow industry best practices by being named the following.

```
bin/
build/
docs/
config/
src/
tests/
vendor/
```


## Install

Via Composer

``` bash
$ composer require stdgroup/laravel-generator
```

## Usage

``` php
$skeleton = new StdGroup\LaravelGenerator();
echo $skeleton->echoPhrase('Hello, League!');
```

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email stdgroup@example.com instead of using the issue tracker.

## Credits

- [Tuan Pham][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/stdgroup/laravel-generator.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/stdgroup/laravel-generator/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/stdgroup/laravel-generator.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/stdgroup/laravel-generator.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/stdgroup/laravel-generator.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/stdgroup/laravel-generator
[link-travis]: https://travis-ci.org/stdgroup/laravel-generator
[link-scrutinizer]: https://scrutinizer-ci.com/g/stdgroup/laravel-generator/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/stdgroup/laravel-generator
[link-downloads]: https://packagist.org/packages/stdgroup/laravel-generator
[link-author]: https://github.com/stdgroup
[link-contributors]: ../../contributors
