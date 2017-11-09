<?php

namespace Dockent\OpenAPI\Model;

class ContainerSummaryItemNetworkSettings
{
    /**
     * @var EndpointSettings[]
     */
    protected $networks;
    /**
     * @return EndpointSettings[]
     */
    public function getNetworks()
    {
        return $this->networks;
    }
    /**
     * @param EndpointSettings[] $networks
     *
     * @return self
     */
    public function setNetworks(\ArrayObject $networks = null)
    {
        $this->networks = $networks;
        return $this;
    }
}