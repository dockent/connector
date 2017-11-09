<?php

namespace Dockent\OpenAPI\Model;

class PluginConfigNetwork
{
    /**
     * @var string
     */
    protected $type;
    /**
     * @return string
     */
    public function getType()
    {
        return $this->type;
    }
    /**
     * @param string $type
     *
     * @return self
     */
    public function setType($type = null)
    {
        $this->type = $type;
        return $this;
    }
}