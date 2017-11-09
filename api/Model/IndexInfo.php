<?php

namespace Dockent\OpenAPI\Model;

class IndexInfo
{
    /**
     * @var string
     */
    protected $name;
    /**
     * @var string[]
     */
    protected $mirrors;
    /**
     * @var bool
     */
    protected $secure;
    /**
     * @var bool
     */
    protected $official;
    /**
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @param string $name
     *
     * @return self
     */
    public function setName($name = null)
    {
        $this->name = $name;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getMirrors()
    {
        return $this->mirrors;
    }
    /**
     * @param string[] $mirrors
     *
     * @return self
     */
    public function setMirrors(array $mirrors = null)
    {
        $this->mirrors = $mirrors;
        return $this;
    }
    /**
     * @return bool
     */
    public function getSecure()
    {
        return $this->secure;
    }
    /**
     * @param bool $secure
     *
     * @return self
     */
    public function setSecure($secure = null)
    {
        $this->secure = $secure;
        return $this;
    }
    /**
     * @return bool
     */
    public function getOfficial()
    {
        return $this->official;
    }
    /**
     * @param bool $official
     *
     * @return self
     */
    public function setOfficial($official = null)
    {
        $this->official = $official;
        return $this;
    }
}