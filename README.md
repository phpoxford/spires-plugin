## Create new spires plugin

``` bash
$ composer create-project phpoxford/spires-plugin {spires-plugin-tictactoe} --stability="dev"
```
Where `{spires-plugin-tictactoe}` is the folder that will be created.

---

# Spires PluginName

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]][link-license]
[![Build Status][ico-travis]][link-travis]
[![Coverage Status][ico-scrutinizer]][link-scrutinizer]
[![Quality Score][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

Plugin for the IRC bot [Spires](link-spires) made by the [PHPOxford](link-phpoxford) user group.

---

This plugin let users play some game with eachother.

## Usage

| Command | Action |
|---|---|
| `!game start {nick}` | Start a game with {nick} |
| `!game accept`       | Accept game request      |

## Change log

Please see [CHANGELOG](/CHANGELOG.md) for more information what has changed recently.

## Testing

The test suite can be run with the following composer script.

``` bash
$ composer test
```

## Contributing and Forking

Please note that this project is licensed under the MIT license. We encourage forking of this project, but ask that you keep all copyright, attribution notices, and continue to use the [MIT license][link-license] in your fork of the project.

For further details on Contributing guidelines, please read the [contributing guide][link-contributing].

## Security

If you discover any security related issues, please email martindilling@gmail.com instead of using the issue tracker.

## Credits

- [Author][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File][link-license] for more information.


[ico-version]: https://img.shields.io/packagist/v/phpoxford/spires.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/phpoxford/spires/master.svg?style=flat-square
[ico-scrutinizer]: https://img.shields.io/scrutinizer/coverage/g/phpoxford/spires.svg?style=flat-square
[ico-code-quality]: https://img.shields.io/scrutinizer/g/phpoxford/spires.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/phpoxford/spires.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/phpoxford/spires
[link-travis]: https://travis-ci.org/phpoxford/spires
[link-scrutinizer]: https://scrutinizer-ci.com/g/phpoxford/spires/code-structure
[link-code-quality]: https://scrutinizer-ci.com/g/phpoxford/spires
[link-downloads]: https://packagist.org/packages/phpoxford/spires

[link-author]: https://github.com/phpoxford
[link-spires]: https://github.com/phpoxford/spires
[link-phpoxford]: http://phpoxford.uk

[link-license]: /LICENSE.md
[link-contributing]: /CONTRIBUTING.md
[link-contributors]: ../../contributors
