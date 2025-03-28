<?php

namespace Vendor\Library\Generated\Model;

class OrganizationCreateRequest extends \ArrayObject
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
     * @var OrganizationCreateRequestOrganization
     */
    protected $organization;
    /**
    * Type of subscription to Neon Cloud.
    Notice that for users without billing account this will be "UNKNOWN"
    
    *
    * @var string
    */
    protected $subscriptionType;
    /**
     * 
     *
     * @return OrganizationCreateRequestOrganization
     */
    public function getOrganization(): OrganizationCreateRequestOrganization
    {
        return $this->organization;
    }
    /**
     * 
     *
     * @param OrganizationCreateRequestOrganization $organization
     *
     * @return self
     */
    public function setOrganization(OrganizationCreateRequestOrganization $organization): self
    {
        $this->initialized['organization'] = true;
        $this->organization = $organization;
        return $this;
    }
    /**
    * Type of subscription to Neon Cloud.
    Notice that for users without billing account this will be "UNKNOWN"
    
    *
    * @return string
    */
    public function getSubscriptionType(): string
    {
        return $this->subscriptionType;
    }
    /**
    * Type of subscription to Neon Cloud.
    Notice that for users without billing account this will be "UNKNOWN"
    
    *
    * @param string $subscriptionType
    *
    * @return self
    */
    public function setSubscriptionType(string $subscriptionType): self
    {
        $this->initialized['subscriptionType'] = true;
        $this->subscriptionType = $subscriptionType;
        return $this;
    }
}