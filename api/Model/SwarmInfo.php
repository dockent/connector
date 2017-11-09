<?php

namespace Dockent\OpenAPI\Model;

class SwarmInfo
{
    /**
     * @var string
     */
    protected $nodeID;
    /**
     * @var string
     */
    protected $nodeAddr;
    /**
     * @var string
     */
    protected $localNodeState;
    /**
     * @var bool
     */
    protected $controlAvailable;
    /**
     * @var string
     */
    protected $error;
    /**
     * @var PeerNode[]
     */
    protected $remoteManagers;
    /**
     * @var int
     */
    protected $nodes;
    /**
     * @var int
     */
    protected $managers;
    /**
     * @var ClusterInfo
     */
    protected $cluster;
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
    public function getNodeAddr()
    {
        return $this->nodeAddr;
    }
    /**
     * @param string $nodeAddr
     *
     * @return self
     */
    public function setNodeAddr($nodeAddr = null)
    {
        $this->nodeAddr = $nodeAddr;
        return $this;
    }
    /**
     * @return string
     */
    public function getLocalNodeState()
    {
        return $this->localNodeState;
    }
    /**
     * @param string $localNodeState
     *
     * @return self
     */
    public function setLocalNodeState($localNodeState = null)
    {
        $this->localNodeState = $localNodeState;
        return $this;
    }
    /**
     * @return bool
     */
    public function getControlAvailable()
    {
        return $this->controlAvailable;
    }
    /**
     * @param bool $controlAvailable
     *
     * @return self
     */
    public function setControlAvailable($controlAvailable = null)
    {
        $this->controlAvailable = $controlAvailable;
        return $this;
    }
    /**
     * @return string
     */
    public function getError()
    {
        return $this->error;
    }
    /**
     * @param string $error
     *
     * @return self
     */
    public function setError($error = null)
    {
        $this->error = $error;
        return $this;
    }
    /**
     * @return PeerNode[]
     */
    public function getRemoteManagers()
    {
        return $this->remoteManagers;
    }
    /**
     * @param PeerNode[] $remoteManagers
     *
     * @return self
     */
    public function setRemoteManagers(array $remoteManagers = null)
    {
        $this->remoteManagers = $remoteManagers;
        return $this;
    }
    /**
     * @return int
     */
    public function getNodes()
    {
        return $this->nodes;
    }
    /**
     * @param int $nodes
     *
     * @return self
     */
    public function setNodes($nodes = null)
    {
        $this->nodes = $nodes;
        return $this;
    }
    /**
     * @return int
     */
    public function getManagers()
    {
        return $this->managers;
    }
    /**
     * @param int $managers
     *
     * @return self
     */
    public function setManagers($managers = null)
    {
        $this->managers = $managers;
        return $this;
    }
    /**
     * @return ClusterInfo
     */
    public function getCluster()
    {
        return $this->cluster;
    }
    /**
     * @param ClusterInfo $cluster
     *
     * @return self
     */
    public function setCluster(ClusterInfo $cluster = null)
    {
        $this->cluster = $cluster;
        return $this;
    }
}