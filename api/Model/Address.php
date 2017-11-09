<?php

namespace Dockent\OpenAPI\Model;

class Address
{
    /**
     * @var string
     */
    protected $addr;
    /**
     * @var int
     */
    protected $prefixLen;
    /**
     * @return string
     */
    public function getAddr()
    {
        return $this->addr;
    }
    /**
     * @param string $addr
     *
     * @return self
     */
    public function setAddr($addr = null)
    {
        $this->addr = $addr;
        return $this;
    }
    /**
     * @return int
     */
    public function getPrefixLen()
    {
        return $this->prefixLen;
    }
    /**
     * @param int $prefixLen
     *
     * @return self
     */
    public function setPrefixLen($prefixLen = null)
    {
        $this->prefixLen = $prefixLen;
        return $this;
    }
}