<?php

namespace Dockent\OpenAPI\Model;

class Node
{
    /**
     * @var string
     */
    protected $iD;
    /**
     * @var ObjectVersion
     */
    protected $version;
    /**
     * @var string
     */
    protected $createdAt;
    /**
     * @var string
     */
    protected $updatedAt;
    /**
     * @var NodeSpec
     */
    protected $spec;
    /**
     * @var NodeDescription
     */
    protected $description;
    /**
     * @var NodeStatus
     */
    protected $status;
    /**
     * @var ManagerStatus
     */
    protected $managerStatus;
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
    /**
     * @return ObjectVersion
     */
    public function getVersion()
    {
        return $this->version;
    }
    /**
     * @param ObjectVersion $version
     *
     * @return self
     */
    public function setVersion(ObjectVersion $version = null)
    {
        $this->version = $version;
        return $this;
    }
    /**
     * @return string
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }
    /**
     * @param string $createdAt
     *
     * @return self
     */
    public function setCreatedAt($createdAt = null)
    {
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * @return string
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
    /**
     * @param string $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt($updatedAt = null)
    {
        $this->updatedAt = $updatedAt;
        return $this;
    }
    /**
     * @return NodeSpec
     */
    public function getSpec()
    {
        return $this->spec;
    }
    /**
     * @param NodeSpec $spec
     *
     * @return self
     */
    public function setSpec(NodeSpec $spec = null)
    {
        $this->spec = $spec;
        return $this;
    }
    /**
     * @return NodeDescription
     */
    public function getDescription()
    {
        return $this->description;
    }
    /**
     * @param NodeDescription $description
     *
     * @return self
     */
    public function setDescription(NodeDescription $description = null)
    {
        $this->description = $description;
        return $this;
    }
    /**
     * @return NodeStatus
     */
    public function getStatus()
    {
        return $this->status;
    }
    /**
     * @param NodeStatus $status
     *
     * @return self
     */
    public function setStatus(NodeStatus $status = null)
    {
        $this->status = $status;
        return $this;
    }
    /**
     * @return ManagerStatus
     */
    public function getManagerStatus()
    {
        return $this->managerStatus;
    }
    /**
     * @param ManagerStatus $managerStatus
     *
     * @return self
     */
    public function setManagerStatus(ManagerStatus $managerStatus = null)
    {
        $this->managerStatus = $managerStatus;
        return $this;
    }
}