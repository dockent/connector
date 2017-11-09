<?php

namespace Dockent\OpenAPI\Model;

class EngineDescription
{
    /**
     * @var string
     */
    protected $engineVersion;
    /**
     * @var string[]
     */
    protected $labels;
    /**
     * @var EngineDescriptionPluginsItem[]
     */
    protected $plugins;
    /**
     * @return string
     */
    public function getEngineVersion()
    {
        return $this->engineVersion;
    }
    /**
     * @param string $engineVersion
     *
     * @return self
     */
    public function setEngineVersion($engineVersion = null)
    {
        $this->engineVersion = $engineVersion;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getLabels()
    {
        return $this->labels;
    }
    /**
     * @param string[] $labels
     *
     * @return self
     */
    public function setLabels(\ArrayObject $labels = null)
    {
        $this->labels = $labels;
        return $this;
    }
    /**
     * @return EngineDescriptionPluginsItem[]
     */
    public function getPlugins()
    {
        return $this->plugins;
    }
    /**
     * @param EngineDescriptionPluginsItem[] $plugins
     *
     * @return self
     */
    public function setPlugins(array $plugins = null)
    {
        $this->plugins = $plugins;
        return $this;
    }
}