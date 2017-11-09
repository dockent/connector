<?php

namespace Dockent\OpenAPI\Model;

class NodeDescription
{
    /**
     * @var string
     */
    protected $hostname;
    /**
     * @var Platform
     */
    protected $platform;
    /**
     * @var ResourceObject
     */
    protected $resources;
    /**
     * @var EngineDescription
     */
    protected $engine;
    /**
     * @var TLSInfo
     */
    protected $tLSInfo;
    /**
     * @return string
     */
    public function getHostname()
    {
        return $this->hostname;
    }
    /**
     * @param string $hostname
     *
     * @return self
     */
    public function setHostname($hostname = null)
    {
        $this->hostname = $hostname;
        return $this;
    }
    /**
     * @return Platform
     */
    public function getPlatform()
    {
        return $this->platform;
    }
    /**
     * @param Platform $platform
     *
     * @return self
     */
    public function setPlatform(Platform $platform = null)
    {
        $this->platform = $platform;
        return $this;
    }
    /**
     * @return ResourceObject
     */
    public function getResources()
    {
        return $this->resources;
    }
    /**
     * @param ResourceObject $resources
     *
     * @return self
     */
    public function setResources(ResourceObject $resources = null)
    {
        $this->resources = $resources;
        return $this;
    }
    /**
     * @return EngineDescription
     */
    public function getEngine()
    {
        return $this->engine;
    }
    /**
     * @param EngineDescription $engine
     *
     * @return self
     */
    public function setEngine(EngineDescription $engine = null)
    {
        $this->engine = $engine;
        return $this;
    }
    /**
     * @return TLSInfo
     */
    public function getTLSInfo()
    {
        return $this->tLSInfo;
    }
    /**
     * @param TLSInfo $tLSInfo
     *
     * @return self
     */
    public function setTLSInfo(TLSInfo $tLSInfo = null)
    {
        $this->tLSInfo = $tLSInfo;
        return $this;
    }
}