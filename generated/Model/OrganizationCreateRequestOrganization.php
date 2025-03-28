<?php

namespace Vendor\Library\Generated\Model;

class OrganizationCreateRequestOrganization extends \ArrayObject
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
     * The organization name
     *
     * @var string
     */
    protected $name;
    /**
     * Emails with roles to invite to the organization
     *
     * @var list<InvitationCreateRequest>
     */
    protected $invitations;
    /**
     * The organization name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The organization name
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Emails with roles to invite to the organization
     *
     * @return list<InvitationCreateRequest>
     */
    public function getInvitations(): array
    {
        return $this->invitations;
    }
    /**
     * Emails with roles to invite to the organization
     *
     * @param list<InvitationCreateRequest> $invitations
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