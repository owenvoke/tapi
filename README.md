# tAPI (torrentAPI)

A hook for uploading to/downloading from the [private torrent database API][ptdb] for caching and web development projects.

## Usage

__Include the class:__
- Using Composer  
`composer require pxgamer/tapi`  
```php
<?php
require 'vendor/autoload.php';
```
- Including the file manually  
```php
<?php
include 'src/Client.php';
```

Once included, you can initialise the class using either of the following:
```php
$tAPI = new \pxgamer\tAPI\Client;
```
```php
use \pxgamer\tAPI\Client;
$tAPI = new Client;
```

## Class Methods

Method Name           | Parameters | Returns
--------------------- | ---------- | -------
setApiAuth()          | string     | `string (json)`
unsetApiAuth()        | void       | `string (json)`
upload()              | string     | `string (json)`
download()            | string     | `string (json)`

## Examples

### _Validating and signing in_
```php
$tAPI = new \pxgamer\tAPI\Client;
$tAPI->setApiAuth('api_key');
```
Returns: `boolean`

### _Signing out_
```php
$tAPI = new \pxgamer\tAPI\Client;
$tAPI->unsetApiAuth();
```
Returns: `boolean`

### _Uploading a torrent_
```php
$tAPI = new \pxgamer\tAPI\Client;
$tAPI->upload('file_path');
```
Returns: `json`

### _Downloading a torrent_
```php
$tAPI = new \pxgamer\tAPI\Client;
$tAPI->download('info_hash');
```
Returns: `json` | `file_content`

[ptdb]: https://torrentapi.pxgamer.xyz