<?php

namespace Dockent\OpenAPI\Model;

class ContainerConfigVolumes
{
    /**
     * @var mixed
     */
    protected $additionalProperties;
    /**
     * @return mixed
     */
    public function getAdditionalProperties()
    {
        return $this->additionalProperties;
    }
    /**
     * @param mixed $additionalProperties
     *
     * @return self
     */
    public function setAdditionalProperties($additionalProperties = null)
    {
        $this->additionalProperties = $additionalProperties;
        return $this;
    }
}