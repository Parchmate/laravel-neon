<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class OrganizationInvitationsResponse extends \ArrayObject
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
     * @var list<Invitation>
     */
    protected $invitations;
    /**
     * 
     *
     * @return list<Invitation>
     */
    public function getInvitations(): array
    {
        return $this->invitations;
    }
    /**
     * 
     *
     * @param list<Invitation> $invitations
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