<?php

namespace Dockent\Connector\Tests\resource;

use Dockent\Connector\CurlHandler;
use Dockent\Connector\resource\ImageResource;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;
use Http\Message\MessageFactory\GuzzleMessageFactory;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

/**
 * Class ImageResourceTest
 * @package Dockent\Connector\Tests\resource
 */
class ImageResourceTest extends TestCase
{
    const IMAGE_NAME = 'phpunit_test_image';

    /**
     * @var ImageResource
     */
    private $instance;

    public function setUp()
    {
        $connectionSettings = [
            'handler' => HandlerStack::create(new CurlHandler()),
            'base_uri' => 'http:/'
        ];
        $httpClient = new GuzzleAdapter(new Client($connectionSettings));
        $serializer = new Serializer([], [new JsonEncoder(new JsonEncode(), new JsonDecode())]);
        $this->instance = new ImageResource($httpClient, new GuzzleMessageFactory(), $serializer);
    }

    /**
     * @throws \Exception
     */
    public function testBuild()
    {
        $this->expectOutputString('');
        $this->instance->build(realpath(__DIR__ . '/../dummy/'));
    }

    public function tearDown()
    {
        $this->instance->imageDelete(static::IMAGE_NAME);
    }
}