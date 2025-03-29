<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class ProjectOwnerData extends \ArrayObject
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
    protected $email;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var int
     */
    protected $branchesLimit;
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
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * 
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
     * 
     *
     * @return int
     */
    public function getBranchesLimit(): int
    {
        return $this->branchesLimit;
    }
    /**
     * 
     *
     * @param int $branchesLimit
     *
     * @return self
     */
    public function setBranchesLimit(int $branchesLimit): self
    {
        $this->initialized['branchesLimit'] = true;
        $this->branchesLimit = $branchesLimit;
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