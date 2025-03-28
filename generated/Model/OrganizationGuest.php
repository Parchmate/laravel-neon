<?php

namespace Vendor\Library\Generated\Model;

class OrganizationGuest extends \ArrayObject
{
    /**
     * @var array
     */
    protected $initialized = [];
    public function isInitialized($property): bool
    {
        return array_key_exists($property, $this->initialized);
    }
    /**
     * 
     *
     * @var string
     */
    protected $permissionId;
    /**
     * 
     *
     * @var string
     */
    protected $userEmail;
    /**
     * 
     *
     * @var string
     */
    protected $projectId;
    /**
     * 
     *
     * @var string
     */
    protected $projectName;
    /**
     * 
     *
     * @return string
     */
    public function getPermissionId(): string
    {
        return $this->permissionId;
    }
    /**
     * 
     *
     * @param string $permissionId
     *
     * @return self
     */
    public function setPermissionId(string $permissionId): self
    {
        $this->initialized['permissionId'] = true;
        $this->permissionId = $permissionId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getUserEmail(): string
    {
        return $this->userEmail;
    }
    /**
     * 
     *
     * @param string $userEmail
     *
     * @return self
     */
    public function setUserEmail(string $userEmail): self
    {
        $this->initialized['userEmail'] = true;
        $this->userEmail = $userEmail;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }
    /**
     * 
     *
     * @param string $projectId
     *
     * @return self
     */
    public function setProjectId(string $projectId): self
    {
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getProjectName(): string
    {
        return $this->projectName;
    }
    /**
     * 
     *
     * @param string $projectName
     *
     * @return self
     */
    public function setProjectName(string $projectName): self
    {
        $this->initialized['projectName'] = true;
        $this->projectName = $projectName;
        return $this;
    }
}