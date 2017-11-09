<?php

namespace Dockent\OpenAPI\Model;

class RegistryServiceConfig
{
    /**
     * @var string[]
     */
    protected $allowNondistributableArtifactsCIDRs;
    /**
     * @var string[]
     */
    protected $allowNondistributableArtifactsHostnames;
    /**
     * @var string[]
     */
    protected $insecureRegistryCIDRs;
    /**
     * @var IndexInfo[]
     */
    protected $indexConfigs;
    /**
     * @var string[]
     */
    protected $mirrors;
    /**
     * @return string[]
     */
    public function getAllowNondistributableArtifactsCIDRs()
    {
        return $this->allowNondistributableArtifactsCIDRs;
    }
    /**
     * @param string[] $allowNondistributableArtifactsCIDRs
     *
     * @return self
     */
    public function setAllowNondistributableArtifactsCIDRs(array $allowNondistributableArtifactsCIDRs = null)
    {
        $this->allowNondistributableArtifactsCIDRs = $allowNondistributableArtifactsCIDRs;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getAllowNondistributableArtifactsHostnames()
    {
        return $this->allowNondistributableArtifactsHostnames;
    }
    /**
     * @param string[] $allowNondistributableArtifactsHostnames
     *
     * @return self
     */
    public function setAllowNondistributableArtifactsHostnames(array $allowNondistributableArtifactsHostnames = null)
    {
        $this->allowNondistributableArtifactsHostnames = $allowNondistributableArtifactsHostnames;
        return $this;
    }
    /**
     * @return string[]
     */
    public function getInsecureRegistryCIDRs()
    {
        return $this->insecureRegistryCIDRs;
    }
    /**
     * @param string[] $insecureRegistryCIDRs
     *
     * @return self
     */
    public function setInsecureRegistryCIDRs(array $insecureRegistryCIDRs = null)
    {
        $this->insecureRegistryCIDRs = $insecureRegistryCIDRs;
        return $this;
    }
    /**
     * @return IndexInfo[]
     */
    public function getIndexConfigs()
    {
        return $this->indexConfigs;
    }
    /**
     * @param IndexInfo[] $indexConfigs
     *
     * @return self
     */
    public function setIndexConfigs(\ArrayObject $indexConfigs = null)
    {
        $this->indexConfigs = $indexConfigs;
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
}