<?php

namespace Dockent\OpenAPI\Model;

class NodeStatus
{
    /**
     * @var string
     */
    protected $state;
    /**
     * @var string
     */
    protected $message;
    /**
     * @var string
     */
    protected $addr;
    /**
     * @return string
     */
    public function getState()
    {
        return $this->state;
    }
    /**
     * @param string $state
     *
     * @return self
     */
    public function setState($state = null)
    {
        $this->state = $state;
        return $this;
    }
    /**
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }
    /**
     * @param string $message
     *
     * @return self
     */
    public function setMessage($message = null)
    {
        $this->message = $message;
        return $this;
    }
    /**
     * @return string
     */
    public function getAddr()
    {
        return $this->addr;
    }
    /**
     * @param string $addr
     *
     * @return self
     */
    public function setAddr($addr = null)
    {
        $this->addr = $addr;
        return $this;
    }
}