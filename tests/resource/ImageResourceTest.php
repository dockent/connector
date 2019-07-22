<?php

namespace Dockent\Connector\Tests\resource;

use Dockent\Connector\resource\ImageResource;
use Http\Client\HttpClient;
use Http\Message\MessageFactory;
use PHPUnit\Framework\TestCase;
use ReflectionException;
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

    /**
     * @throws ReflectionException
     */
    public function setUp()
    {
        $httpClientMock = $this->getMockForAbstractClass(HttpClient::class);
        $messageFactoryMock = $this->getMockForAbstractClass(MessageFactory::class);
        $serializer = $this->getMockForAbstractClass(Serializer::class);
        $this->instance = new class($httpClientMock, $messageFactoryMock, $serializer) extends ImageResource
        {
            public function imageBuild($inputStream, $parameters = array(), $fetch = self::FETCH_OBJECT)
            {
                return true;
            }
        };
    }

    /**
     * @throws \Exception
     */
    public function testBuild()
    {
        $this->expectOutputString('');
        $this->instance->build(realpath(__DIR__ . '/../dummy/'), ['t' => static::IMAGE_NAME]);
    }
}