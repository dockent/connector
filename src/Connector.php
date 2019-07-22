<?php

namespace Dockent\Connector;

use Dockent\OpenAPI\Resource\ConfigResource;
use Dockent\OpenAPI\Resource\ContainerResource;
use Dockent\OpenAPI\Resource\DefaultResource;
use Dockent\OpenAPI\Resource\DistributionResource;
use Dockent\OpenAPI\Resource\ExecResource;
use Dockent\Connector\resource\ImageResource;
use Dockent\OpenAPI\Resource\NetworkResource;
use Dockent\OpenAPI\Resource\NodeResource;
use Dockent\OpenAPI\Resource\PluginResource;
use Dockent\OpenAPI\Resource\SecretResource;
use Dockent\OpenAPI\Resource\ServiceResource;
use Dockent\OpenAPI\Resource\SessionExperimentalResource;
use Dockent\OpenAPI\Resource\SwarmResource;
use Dockent\OpenAPI\Resource\SystemResource;
use Dockent\OpenAPI\Resource\TaskResource;
use Dockent\OpenAPI\Resource\VolumeResource;
use Exception;
use GuzzleHttp\Client;
use GuzzleHttp\HandlerStack;
use Http\Adapter\Guzzle6\Client as GuzzleAdapter;
use Http\Message\MessageFactory\GuzzleMessageFactory;
use Joli\Jane\OpenApi\Runtime\Client\Resource;
use Symfony\Component\Serializer\Encoder\JsonDecode;
use Symfony\Component\Serializer\Encoder\JsonEncode;
use Symfony\Component\Serializer\Encoder\JsonEncoder;
use Symfony\Component\Serializer\Serializer;

/**
 * Class Connector
 * @package Dockent\Connector
 * @method ConfigResource ConfigResource()
 * @method ContainerResource ContainerResource()
 * @method DefaultResource DefaultResource()
 * @method DistributionResource DistributionResource()
 * @method ExecResource ExecResource()
 * @method ImageResource ImageResource()
 * @method NetworkResource NetworkResource()
 * @method NodeResource NodeResource()
 * @method PluginResource PluginResource()
 * @method SecretResource SecretResource()
 * @method ServiceResource ServiceResource()
 * @method SessionExperimentalResource SessionExperimentalResource()
 * @method SwarmResource SwarmResource()
 * @method SystemResource SystemResource()
 * @method TaskResource TaskResource()
 * @method VolumeResource VolumeResource()
 */
class Connector
{
    /**
     * @var Resource[]
     */
    private $storage = [];

    /**
     * @var array
     */
    private $classMap = [
        'ImageResource' => ImageResource::class
    ];

    /**
     * @var GuzzleAdapter
     */
    private $httpClient;

    /**
     * @var GuzzleMessageFactory
     */
    private $requestFactory;

    /**
     * @var Serializer
     */
    private $serializer;

    /**
     * Connector constructor.
     */
    public function __construct()
    {
        $handler = new CurlHandler();
        $connectionSettings = [
            'handler' => HandlerStack::create($handler),
            'base_uri' => 'http:/'
        ];
        $this->httpClient = new GuzzleAdapter(new Client($connectionSettings));
        $this->requestFactory = new GuzzleMessageFactory();
        $this->serializer = new Serializer([], [new JsonEncoder(new JsonEncode(), new JsonDecode())]);
    }

    /**
     * @param string $name
     * @param array $arguments
     * @return Resource
     * @throws Exception
     */
    public function __call(string $name, array $arguments): Resource
    {
        if (!array_key_exists($name, $this->storage)) {
            if (array_key_exists($name, $this->classMap)) {
                $className = $this->classMap[$name];
            } else {
                $className = "Dockent\\OpenAPI\\Resource\\$name";
            }
            if (!class_exists($className)) {
                throw new Exception("Class '$className' is not exist");
            }
            $resource = new $className($this->httpClient, $this->requestFactory, $this->serializer);
            $this->storage[$name] = $resource;
        }

        return $this->storage[$name];
    }
}