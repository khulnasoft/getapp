<?php

namespace Tests\Unit\Docker;

use Getapp\Docker\Compose;
use Exception;
use PHPUnit\Framework\TestCase;

class ComposeTest extends TestCase
{
    protected ?Compose $object = null;

    public function setUp(): void
    {
        $data = @file_get_contents(__DIR__ . '/../../resources/docker/docker-compose.yml');

        if ($data === false) {
            throw new Exception('Failed to read compose file');
        }

        $this->object = new Compose($data);
    }

    public function testServices(): void
    {
        $this->assertCount(15, $this->object->getServices());
        $this->assertEquals('appwrite', $this->object->getService('appwrite')->getContainerName());
        $this->assertEquals('', $this->object->getService('appwrite')->getImageVersion());
        $this->assertEquals('2.2', $this->object->getService('traefik')->getImageVersion());
        $this->assertEquals(['2080' => '80', '2443' => '443', '8080' => '8080'], $this->object->getService('traefik')->getPorts());
    }

    public function testNetworks(): void
    {
        $this->assertCount(2, $this->object->getNetworks());
    }

    public function testVolumes(): void
    {
        $this->assertCount(7, $this->object->getVolumes());
        $this->assertEquals('getapp-mariadb', $this->object->getVolumes()[0]);
        $this->assertEquals('getapp-redis', $this->object->getVolumes()[1]);
        $this->assertEquals('getapp-cache', $this->object->getVolumes()[2]);
    }
}
