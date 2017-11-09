<?php
/**
 * Created by PhpStorm.
 * User: vpozdnyakov
 * Date: 09.11.17
 * Time: 18:22
 */

namespace Dockent\Connector;

use Dockent\OpenAPI\Resource\ConfigResource;
use Dockent\OpenAPI\Resource\ContainerResource;
use Dockent\OpenAPI\Resource\DefaultResource;
use Dockent\OpenAPI\Resource\DistributionResource;
use Dockent\OpenAPI\Resource\ExecResource;
use Dockent\OpenAPI\Resource\ImageResource;
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
use Joli\Jane\OpenApi\Runtime\Client\Resource;

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
     * @param string $name
     * @param array $arguments
     * @return Resource
     * @throws \Exception
     */
    public function __call(string $name, array $arguments): Resource
    {
        if (!array_key_exists($name, $this->storage)) {
            $className = 'Resource\\' . $name;
            if (!class_exists($className)) {
                throw new \Exception("Class '$className' is not exist");
            }
            $resource = new $className(...$arguments);
            $this->storage[$name] = $resource;
        }

        return $this->storage[$name];
    }
}