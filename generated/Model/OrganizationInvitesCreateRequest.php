<?php

namespace Vendor\Library\Generated\Model;

class OrganizationInvitesCreateRequest extends \ArrayObject
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
     * @var list<OrganizationInviteCreateRequest>
     */
    protected $invitations;
    /**
     * 
     *
     * @return list<OrganizationInviteCreateRequest>
     */
    public function getInvitations(): array
    {
        return $this->invitations;
    }
    /**
     * 
     *
     * @param list<OrganizationInviteCreateRequest> $invitations
     *
     * @return self
     */
    public function setInvitations(array $invitations): self
    {
        $this->initialized['invitations'] = true;
        $this->invitations = $invitations;
        return $this;
    }
}