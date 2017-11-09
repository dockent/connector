<?php

namespace Dockent\OpenAPI\Model;

class Runtime
{
    /**
     * @var string
     */
    protected $path;
    /**
     * @var string[]
     */
    protected $runtimeArgs;
    /**
     * @return string
     */
    public function getPath()
    {
        return $this->path;
    }
    /**
     * @param string $path
     *
     * @return self
     */
    public function setPath($path = null)
    {
        $this->path = $path;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getRuntimeArgs()
    {
        return $this->runtimeArgs;
    }
    /**
     * @param string[] $runtimeArgs
     *
     * @return self
     */
    public function setRuntimeArgs(array $runtimeArgs = null)
    {
        $this->runtimeArgs = $runtimeArgs;
        return $this;
    }
}