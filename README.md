# utpc (uploadToPrivateCache)

A hook for uploading to the private torrent database API for caching and web development projects.

## Function calls

Function Name | Function Usage                         | Function Description
------------- | -------------------------------------- | --------------------
Upload        | _$uTP::upload($api_key, $file_path)_   | Allows you to upload torrents to the private API using `POST`.
Download      | _$uTP::download($api_key, $hash)_      | Allows you to download torrents from the private API using `GET`.
