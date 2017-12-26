<?php

namespace Dockent\Connector\resource;

use Dockent\OpenAPI\Resource\ImageResource as ImageResourceAPI;

/**
 * Class ImageResource
 * @package Dockent\Connector\resource
 */
class ImageResource extends ImageResourceAPI
{
    /**
     * @param string $path
     * @param array $parameters
     * @return bool
     * @throws \Exception
     */
    public function build(string $path, array $parameters = []): bool
    {
        $tarFile = uniqid('docker_') . '.tar';
        $tar = new \PharData(sys_get_temp_dir() . DIRECTORY_SEPARATOR . $tarFile);
        $tar->buildFromDirectory($path);
        $resource = fopen(sys_get_temp_dir() . DIRECTORY_SEPARATOR . $tarFile, 'r');
        $result = $this->imageBuild($resource, $parameters);
        unlink(sys_get_temp_dir() . DIRECTORY_SEPARATOR . $tarFile);
        return $result;
    }
}