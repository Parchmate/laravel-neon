<?php

namespace Vendor\Library\Generated\Model;

class ProjectPermissions extends \ArrayObject
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
     * @var list<ProjectPermission>
     */
    protected $projectPermissions;
    /**
     * 
     *
     * @return list<ProjectPermission>
     */
    public function getProjectPermissions(): array
    {
        return $this->projectPermissions;
    }
    /**
     * 
     *
     * @param list<ProjectPermission> $projectPermissions
     *
     * @return self
     */
    public function setProjectPermissions(array $projectPermissions): self
    {
        $this->initialized['projectPermissions'] = true;
        $this->projectPermissions = $projectPermissions;
        return $this;
    }
}