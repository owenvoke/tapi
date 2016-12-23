<?php
use pxgamer\tAPI\Client;

class MainTest extends PHPUnit_Framework_TestCase
{
    public function testCanBeInitialised()
    {
        $tApiInstance = new Client;
        $this->assertInstanceOf(Client::class, $tApiInstance);
    }

    public function testCanUploadTorrent()
    {
        $tApiInstance = new Client;
        $response = $tApiInstance->upload(null);
        $this->assertObjectHasAttribute('status', $response);
    }

    public function testCanDownloadTorrent()
    {
        $tApiInstance = new Client;
        $data = $tApiInstance->download(null);
        $this->assertObjectHasAttribute('status', $data);
    }
}
