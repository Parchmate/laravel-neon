<?php

namespace Vendor\Library\Generated\Model;

class OrganizationMembersResponse extends \ArrayObject
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
     * @var list<MemberWithUser>
     */
    protected $members;
    /**
     * 
     *
     * @return list<MemberWithUser>
     */
    public function getMembers(): array
    {
        return $this->members;
    }
    /**
     * 
     *
     * @param list<MemberWithUser> $members
     *
     * @return self
     */
    public function setMembers(array $members): self
    {
        $this->initialized['members'] = true;
        $this->members = $members;
        return $this;
    }
}