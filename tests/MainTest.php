<?php

namespace pxgamer\tAPI;

use PHPUnit\Framework\TestCase;

/**
 * Class MainTest
 */
class MainTest extends TestCase
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
