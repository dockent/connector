<?php

namespace Dockent\Connector\Tests;

use Dockent\Connector\CurlHandler;
use GuzzleHttp\Handler\CurlFactoryInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class CurlHandlerTest
 * @package Dockent\Connector\Tests
 */
class CurlHandlerTest extends TestCase
{
    /**
     * @var CurlHandler
     */
    private $instance;

    public function setUp()
    {
        $this->instance = new CurlHandler();
    }

    public function testConstructorWithoutOptions()
    {
        $factory = new \ReflectionProperty($this->instance, 'factory');
        $factory->setAccessible(true);
        $this->assertInstanceOf(CurlFactoryInterface::class, $factory->getValue($this->instance));
    }

    public function testConstructorWithOptions()
    {
        $this->instance = new CurlHandler(['handle_factory' => 'some_factory']);
        $factory = new \ReflectionProperty($this->instance, 'factory');
        $factory->setAccessible(true);
        $this->assertEquals('some_factory', $factory->getValue($this->instance));
    }
}