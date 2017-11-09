<?php

namespace Dockent\OpenAPI\Model;

class ObjectVersion
{
    /**
     * @var int
     */
    protected $index;
    /**
     * @return int
     */
    public function getIndex()
    {
        return $this->index;
    }
    /**
     * @param int $index
     *
     * @return self
     */
    public function setIndex($index = null)
    {
        $this->index = $index;
        return $this;
    }
}