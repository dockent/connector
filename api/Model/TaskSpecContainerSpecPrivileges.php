<?php

namespace Dockent\OpenAPI\Model;

class TaskSpecContainerSpecPrivileges
{
    /**
     * @var TaskSpecContainerSpecPrivilegesCredentialSpec
     */
    protected $credentialSpec;
    /**
     * @var TaskSpecContainerSpecPrivilegesSELinuxContext
     */
    protected $sELinuxContext;
    /**
     * @return TaskSpecContainerSpecPrivilegesCredentialSpec
     */
    public function getCredentialSpec()
    {
        return $this->credentialSpec;
    }
    /**
     * @param TaskSpecContainerSpecPrivilegesCredentialSpec $credentialSpec
     *
     * @return self
     */
    public function setCredentialSpec(TaskSpecContainerSpecPrivilegesCredentialSpec $credentialSpec = null)
    {
        $this->credentialSpec = $credentialSpec;
        return $this;
    }
    /**
     * @return TaskSpecContainerSpecPrivilegesSELinuxContext
     */
    public function getSELinuxContext()
    {
        return $this->sELinuxContext;
    }
    /**
     * @param TaskSpecContainerSpecPrivilegesSELinuxContext $sELinuxContext
     *
     * @return self
     */
    public function setSELinuxContext(TaskSpecContainerSpecPrivilegesSELinuxContext $sELinuxContext = null)
    {
        $this->sELinuxContext = $sELinuxContext;
        return $this;
    }
}