<?php

namespace Dockent\OpenAPI\Model;

class IdResponse
{
    /**
     * @var string
     */
    protected $id;
    /**
     * @return string
     */
    public function getId()
    {
        return $this->id;
    }
    /**
     * @param string $id
     *
     * @return self
     */
    public function setId($id = null)
    {
        $this->id = $id;
        return $this;
    }
}