<?php

namespace Dockent\OpenAPI\Model;

class GenericResourcesItemNamedResourceSpec
{
    /**
     * @var string
     */
    protected $kind;
    /**
     * @var string
     */
    protected $value;
    /**
     * @return string
     */
    public function getKind()
    {
        return $this->kind;
    }
    /**
     * @param string $kind
     *
     * @return self
     */
    public function setKind($kind = null)
    {
        $this->kind = $kind;
        return $this;
    }
    /**
     * @return string
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * @param string $value
     *
     * @return self
     */
    public function setValue($value = null)
    {
        $this->value = $value;
        return $this;
    }
}