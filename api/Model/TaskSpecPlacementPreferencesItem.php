<?php

namespace Dockent\OpenAPI\Model;

class TaskSpecPlacementPreferencesItem
{
    /**
     * @var TaskSpecPlacementPreferencesItemSpread
     */
    protected $spread;
    /**
     * @return TaskSpecPlacementPreferencesItemSpread
     */
    public function getSpread()
    {
        return $this->spread;
    }
    /**
     * @param TaskSpecPlacementPreferencesItemSpread $spread
     *
     * @return self
     */
    public function setSpread(TaskSpecPlacementPreferencesItemSpread $spread = null)
    {
        $this->spread = $spread;
        return $this;
    }
}