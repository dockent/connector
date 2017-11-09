<?php

namespace Dockent\OpenAPI\Model;

class NetworksIdConnectPostBody
{
    /**
     * @var string
     */
    protected $container;
    /**
     * @var EndpointSettings
     */
    protected $endpointConfig;
    /**
     * @return string
     */
    public function getContainer()
    {
        return $this->container;
    }
    /**
     * @param string $container
     *
     * @return self
     */
    public function setContainer($container = null)
    {
        $this->container = $container;
        return $this;
    }
    /**
     * @return EndpointSettings
     */
    public function getEndpointConfig()
    {
        return $this->endpointConfig;
    }
    /**
     * @param EndpointSettings $endpointConfig
     *
     * @return self
     */
    public function setEndpointConfig(EndpointSettings $endpointConfig = null)
    {
        $this->endpointConfig = $endpointConfig;
        return $this;
    }
}