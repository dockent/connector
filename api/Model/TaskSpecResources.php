<?php

namespace Dockent\OpenAPI\Model;

class TaskSpecResources
{
    /**
     * @var ResourceObject
     */
    protected $limits;
    /**
     * @var ResourceObject
     */
    protected $reservation;
    /**
     * @return ResourceObject
     */
    public function getLimits()
    {
        return $this->limits;
    }
    /**
     * @param ResourceObject $limits
     *
     * @return self
     */
    public function setLimits(ResourceObject $limits = null)
    {
        $this->limits = $limits;
        return $this;
    }
    /**
     * @return ResourceObject
     */
    public function getReservation()
    {
        return $this->reservation;
    }
    /**
     * @param ResourceObject $reservation
     *
     * @return self
     */
    public function setReservation(ResourceObject $reservation = null)
    {
        $this->reservation = $reservation;
        return $this;
    }
}