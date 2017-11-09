<?php

namespace Dockent\OpenAPI\Model;

class ContainersCreatePostBodyNetworkingConfig
{
    /**
     * @var EndpointSettings[]
     */
    protected $endpointsConfig;
    /**
     * @return EndpointSettings[]
     */
    public function getEndpointsConfig()
    {
        return $this->endpointsConfig;
    }
    /**
     * @param EndpointSettings[] $endpointsConfig
     *
     * @return self
     */
    public function setEndpointsConfig(\ArrayObject $endpointsConfig = null)
    {
        $this->endpointsConfig = $endpointsConfig;
        return $this;
    }
}