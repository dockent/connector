<?php

namespace Dockent\OpenAPI\Model;

class SwarmUnlockkeyGetResponse200
{
    /**
     * @var string
     */
    protected $unlockKey;
    /**
     * @return string
     */
    public function getUnlockKey()
    {
        return $this->unlockKey;
    }
    /**
     * @param string $unlockKey
     *
     * @return self
     */
    public function setUnlockKey($unlockKey = null)
    {
        $this->unlockKey = $unlockKey;
        return $this;
    }
}