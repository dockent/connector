<?php

namespace Dockent\OpenAPI\Model;

class NetworksPrunePostResponse200
{
    /**
     * @var string[]
     */
    protected $networksDeleted;
    /**
     * @return string[]
     */
    public function getNetworksDeleted()
    {
        return $this->networksDeleted;
    }
    /**
     * @param string[] $networksDeleted
     *
     * @return self
     */
    public function setNetworksDeleted(array $networksDeleted = null)
    {
        $this->networksDeleted = $networksDeleted;
        return $this;
    }
}