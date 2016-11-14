# tAPI (torrentAPI)

A hook for uploading to/downloading from the [private torrent database API](https://torrentapi.pxgamer.xyz) for caching and web development projects.

## Function calls

__Upload__  
Usage: _`$uTP::upload($api_key, $file_path)`_  
Allows you to upload torrents to the private API using `POST`.

__Download__  
Usage: _`$uTP::download($api_key, $hash)`_  
Allows you to download torrents from the private API using `GET`.
