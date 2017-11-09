<?php

namespace Dockent\OpenAPI\Model;

class ContainerSummaryItemHostConfig
{
    /**
     * @var string
     */
    protected $networkMode;
    /**
     * @return string
     */
    public function getNetworkMode()
    {
        return $this->networkMode;
    }
    /**
     * @param string $networkMode
     *
     * @return self
     */
    public function setNetworkMode($networkMode = null)
    {
        $this->networkMode = $networkMode;
        return $this;
    }
}