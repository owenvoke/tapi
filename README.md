# tAPI (torrentAPI)

A hook for uploading to/downloading from the [private torrent database API][ptdb] for caching and web development projects.

## Usage

__Include the class:__
- Using Composer  
`composer require pxgamer/tapi`  
```php
<?php
require 'vendor/autoload.php';
$tAPI = new \pxgamer\tAPI();
```
- Including the file manually  
```php
<?php
include 'src/tAPI.php';
$tAPI = new \pxgamer\tAPI();
```

__Uploading a torrent__  
`$tAPI::upload($code, $indentation);`  
__Downloading a torrent__  
`$tAPI::download($code, $indentation);`  

## Variables

Variable Name | Variable Type | Variable Description      | Required?
------------- | ------------- | ------------------------- | ---------
`$api_key`       | String        | The code to be formatted. | true
`$file_path`     | String       | The file to upload (upload only).     | false
`$hash`     | String       | The torrent hash (download only).     | false

[ptdb]: https://torrentapi.pxgamer.xyz