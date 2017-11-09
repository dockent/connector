<?php

namespace Dockent\OpenAPI\Model;

class SecretsCreatePostResponse201
{
    /**
     * @var string
     */
    protected $iD;
    /**
     * @return string
     */
    public function getID()
    {
        return $this->iD;
    }
    /**
     * @param string $iD
     *
     * @return self
     */
    public function setID($iD = null)
    {
        $this->iD = $iD;
        return $this;
    }
}