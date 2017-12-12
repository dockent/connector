<?php

namespace Dockent\Connector\Tests\dataProviders;

use Dockent\OpenAPI\Resource\ConfigResource;
use Dockent\OpenAPI\Resource\ContainerResource;

/**
 * Trait ResourceCall
 * @package Dockent\Connector\Tests\dataProviders
 */
trait ResourceCall
{
    /**
     * @return array
     */
    public function dataProviderResourceCall(): array
    {
        return [
            ['ConfigResource', ConfigResource::class],
            ['ContainerResource', ContainerResource::class]
        ];
    }
}