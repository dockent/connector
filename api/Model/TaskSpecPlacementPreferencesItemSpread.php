<?php

namespace Dockent\OpenAPI\Model;

class TaskSpecPlacementPreferencesItemSpread
{
    /**
     * @var string
     */
    protected $spreadDescriptor;
    /**
     * @return string
     */
    public function getSpreadDescriptor()
    {
        return $this->spreadDescriptor;
    }
    /**
     * @param string $spreadDescriptor
     *
     * @return self
     */
    public function setSpreadDescriptor($spreadDescriptor = null)
    {
        $this->spreadDescriptor = $spreadDescriptor;
        return $this;
    }
}