<?php

namespace Dockent\OpenAPI\Model;

class GenericResourcesItemDiscreteResourceSpec
{
    /**
     * @var string
     */
    protected $kind;
    /**
     * @var int
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
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }
    /**
     * @param int $value
     *
     * @return self
     */
    public function setValue($value = null)
    {
        $this->value = $value;
        return $this;
    }
}