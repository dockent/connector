<?php

namespace Dockent\Connector\Tests;

use Dockent\Connector\Connector;
use Dockent\Connector\Tests\dataProviders\ResourceCall;
use Dockent\OpenAPI\Resource\ContainerResource;
use Http\Client\HttpClient;
use Http\Message\MessageFactory;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Serializer\SerializerInterface;

/**
 * Class ConnectorTest
 * @package Dockent\Connector\Tests
 */
class ConnectorTest extends TestCase
{
    use ResourceCall;

    /**
     * @var Connector
     */
    private $instance;

    public function setUp()
    {
        $this->instance = new Connector();
    }

    public function testConstructor()
    {
        $httpClient = new \ReflectionProperty($this->instance, 'httpClient');
        $httpClient->setAccessible(true);
        $this->assertInstanceOf(HttpClient::class, $httpClient->getValue($this->instance));
        $requestFactory = new \ReflectionProperty($this->instance, 'requestFactory');
        $requestFactory->setAccessible(true);
        $this->assertInstanceOf(MessageFactory::class, $requestFactory->getValue($this->instance));
        $serializer = new \ReflectionProperty($this->instance, 'serializer');
        $serializer->setAccessible(true);
        $this->assertInstanceOf(SerializerInterface::class, $serializer->getValue($this->instance));
    }

    /**
     * @dataProvider dataProviderResourceCall
     * @param string $call
     * @param string $expectedInstance
     */
    public function testCall(string $call, string $expectedInstance)
    {
        $this->assertInstanceOf($expectedInstance, $this->instance->$call());
    }

    public function testCallNotExistingResource()
    {
        $this->expectException(\Exception::class);
        $this->expectExceptionMessage('Class \'Dockent\OpenAPI\Resource\SomeResource\' is not exist');
        $this->instance->SomeResource();
    }

    public function testCallResourceFromClassMap()
    {
        $classMap = new \ReflectionProperty($this->instance, 'classMap');
        $classMap->setAccessible(true);
        $classMap->setValue($this->instance, [
            'SomeResource' => ContainerResource::class
        ]);
        $this->assertInstanceOf(ContainerResource::class, $this->instance->SomeResource());
    }
}