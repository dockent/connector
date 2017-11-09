<?php

namespace Dockent\OpenAPI\Model;

class VolumeUsageData
{
    /**
     * @var int
     */
    protected $size;
    /**
     * @var int
     */
    protected $refCount;
    /**
     * @return int
     */
    public function getSize()
    {
        return $this->size;
    }
    /**
     * @param int $size
     *
     * @return self
     */
    public function setSize($size = null)
    {
        $this->size = $size;
        return $this;
    }
    /**
     * @return int
     */
    public function getRefCount()
    {
        return $this->refCount;
    }
    /**
     * @param int $refCount
     *
     * @return self
     */
    public function setRefCount($refCount = null)
    {
        $this->refCount = $refCount;
        return $this;
    }
}