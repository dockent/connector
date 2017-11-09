<?php

namespace Dockent\OpenAPI\Model;

class GenericResourcesItem
{
    /**
     * @var GenericResourcesItemNamedResourceSpec
     */
    protected $namedResourceSpec;
    /**
     * @var GenericResourcesItemDiscreteResourceSpec
     */
    protected $discreteResourceSpec;
    /**
     * @return GenericResourcesItemNamedResourceSpec
     */
    public function getNamedResourceSpec()
    {
        return $this->namedResourceSpec;
    }
    /**
     * @param GenericResourcesItemNamedResourceSpec $namedResourceSpec
     *
     * @return self
     */
    public function setNamedResourceSpec(GenericResourcesItemNamedResourceSpec $namedResourceSpec = null)
    {
        $this->namedResourceSpec = $namedResourceSpec;
        return $this;
    }
    /**
     * @return GenericResourcesItemDiscreteResourceSpec
     */
    public function getDiscreteResourceSpec()
    {
        return $this->discreteResourceSpec;
    }
    /**
     * @param GenericResourcesItemDiscreteResourceSpec $discreteResourceSpec
     *
     * @return self
     */
    public function setDiscreteResourceSpec(GenericResourcesItemDiscreteResourceSpec $discreteResourceSpec = null)
    {
        $this->discreteResourceSpec = $discreteResourceSpec;
        return $this;
    }
}