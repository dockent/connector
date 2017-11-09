<?php

namespace Dockent\OpenAPI\Model;

class PluginsInfo
{
    /**
     * @var string[]
     */
    protected $volume;
    /**
     * @var string[]
     */
    protected $network;
    /**
     * @var string[]
     */
    protected $authorization;
    /**
     * @var string[]
     */
    protected $log;
    /**
     * @return string[]
     */
    public function getVolume()
    {
        return $this->volume;
    }
    /**
     * @param string[] $volume
     *
     * @return self
     */
    public function setVolume(array $volume = null)
    {
        $this->volume = $volume;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getNetwork()
    {
        return $this->network;
    }
    /**
     * @param string[] $network
     *
     * @return self
     */
    public function setNetwork(array $network = null)
    {
        $this->network = $network;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getAuthorization()
    {
        return $this->authorization;
    }
    /**
     * @param string[] $authorization
     *
     * @return self
     */
    public function setAuthorization(array $authorization = null)
    {
        $this->authorization = $authorization;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getLog()
    {
        return $this->log;
    }
    /**
     * @param string[] $log
     *
     * @return self
     */
    public function setLog(array $log = null)
    {
        $this->log = $log;
        return $this;
    }
}