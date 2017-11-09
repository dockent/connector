<?php

namespace Dockent\OpenAPI\Model;

class EventsGetResponse200Actor
{
    /**
     * @var string
     */
    protected $iD;
    /**
     * @var string[]
     */
    protected $attributes;
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
     * @return string[]
     */
    public function getAttributes()
    {
        return $this->attributes;
    }
    /**
     * @param string[] $attributes
     *
     * @return self
     */
    public function setAttributes(\ArrayObject $attributes = null)
    {
        $this->attributes = $attributes;
        return $this;
    }
}