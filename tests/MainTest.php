<?php
use pxgamer\tAPI;

class MainTest extends PHPUnit_Framework_TestCase
{

    public function testCanBeInitialised()
    {
        $dirtyAPI = new tAPI();
        $this->assertInstanceOf(tAPI::class, $dirtyAPI);
    }

    public function testCanUploadTorrent()
    {
        $response = tAPI::upload('null_api_key', null);
        $this->assertObjectHasAttribute('status', $response);
    }

    public function testCanDownloadTorrent()
    {
        $response = json_decode(tAPI::download('*', ''));
        $this->assertObjectHasAttribute('status', $response);
    }

}
