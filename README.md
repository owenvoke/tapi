# tAPI (torrentAPI)

[![Latest Version on Packagist][ico-version]][link-packagist]
[![Software License][ico-license]](LICENSE.md)
[![Build Status][ico-travis]][link-travis]
[![Style CI][ico-styleci]][link-styleci]
[![Code Coverage][ico-code-quality]][link-code-quality]
[![Total Downloads][ico-downloads]][link-downloads]

A PHP class for utilising the TorrentAPI.

## Structure

```
bin/
config/
src/
tests/
vendor/
```

## Install

Via Composer

``` bash
$ composer require pxgamer/tapi
```

## Usage

## Class Methods

#### _Validating and signing in_

```php
$tAPI = new \pxgamer\tAPI\Client;
$tAPI->setApiAuth('api_key');
```
Returns: `boolean`

#### _Signing out_

```php
$tAPI = new \pxgamer\tAPI\Client;
$tAPI->unsetApiAuth();
```
Returns: `boolean`

#### _Uploading a torrent_

```php
$tAPI = new \pxgamer\tAPI\Client;
$tAPI->upload('file_path');
```
Returns: `json`

#### _Downloading a torrent_

```php
$tAPI = new \pxgamer\tAPI\Client;
$tAPI->download('info_hash');
```
Returns: `json` | `file_content`

## Change log

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Testing

``` bash
$ composer test
```

## Contributing

Please see [CONTRIBUTING](CONTRIBUTING.md) and [CODE_OF_CONDUCT](CODE_OF_CONDUCT.md) for details.

## Security

If you discover any security related issues, please email owzie123@gmail.com instead of using the issue tracker.

## Credits

- [pxgamer][link-author]
- [All Contributors][link-contributors]

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.

[ico-version]: https://img.shields.io/packagist/v/pxgamer/tapi.svg?style=flat-square
[ico-license]: https://img.shields.io/badge/license-MIT-brightgreen.svg?style=flat-square
[ico-travis]: https://img.shields.io/travis/pxgamer/tapi/master.svg?style=flat-square
[ico-styleci]: https://styleci.io/repos/73486371/shield
[ico-code-quality]: https://img.shields.io/codecov/c/github/pxgamer/tapi.svg?style=flat-square
[ico-downloads]: https://img.shields.io/packagist/dt/pxgamer/tapi.svg?style=flat-square

[link-packagist]: https://packagist.org/packages/pxgamer/tapi
[link-travis]: https://travis-ci.org/pxgamer/tapi
[link-styleci]: https://styleci.io/repos/73486371
[link-code-quality]: https://codecov.io/gh/pxgamer/tapi
[link-downloads]: https://packagist.org/packages/pxgamer/tapi
[link-author]: https://github.com/pxgamer
[link-contributors]: ../../contributors
