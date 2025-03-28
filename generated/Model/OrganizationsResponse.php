<?php

namespace Vendor\Library\Generated\Model;

class OrganizationsResponse extends \ArrayObject
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
     * @var list<Organization>
     */
    protected $organizations;
    /**
     * 
     *
     * @return list<Organization>
     */
    public function getOrganizations(): array
    {
        return $this->organizations;
    }
    /**
     * 
     *
     * @param list<Organization> $organizations
     *
     * @return self
     */
    public function setOrganizations(array $organizations): self
    {
        $this->initialized['organizations'] = true;
        $this->organizations = $organizations;
        return $this;
    }
}