<?php

namespace Dockent\OpenAPI\Model;

class PeerNode
{
    /**
     * @var string
     */
    protected $nodeID;
    /**
     * @var string
     */
    protected $addr;
    /**
     * @return string
     */
    public function getNodeID()
    {
        return $this->nodeID;
    }
    /**
     * @param string $nodeID
     *
     * @return self
     */
    public function setNodeID($nodeID = null)
    {
        $this->nodeID = $nodeID;
        return $this;
    }
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
}