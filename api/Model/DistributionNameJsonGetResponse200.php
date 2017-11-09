<?php

namespace Dockent\OpenAPI\Model;

class DistributionNameJsonGetResponse200
{
    /**
     * @var DistributionNameJsonGetResponse200Descriptor
     */
    protected $descriptor;
    /**
     * @var DistributionNameJsonGetResponse200PlatformsItem[]
     */
    protected $platforms;
    /**
     * @return DistributionNameJsonGetResponse200Descriptor
     */
    public function getDescriptor()
    {
        return $this->descriptor;
    }
    /**
     * @param DistributionNameJsonGetResponse200Descriptor $descriptor
     *
     * @return self
     */
    public function setDescriptor(DistributionNameJsonGetResponse200Descriptor $descriptor = null)
    {
        $this->descriptor = $descriptor;
        return $this;
    }
    /**
     * @return DistributionNameJsonGetResponse200PlatformsItem[]
     */
    public function getPlatforms()
    {
        return $this->platforms;
    }
    /**
     * @param DistributionNameJsonGetResponse200PlatformsItem[] $platforms
     *
     * @return self
     */
    public function setPlatforms(array $platforms = null)
    {
        $this->platforms = $platforms;
        return $this;
    }
}