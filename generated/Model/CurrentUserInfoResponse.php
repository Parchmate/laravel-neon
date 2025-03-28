<?php

namespace Vendor\Library\Generated\Model;

class CurrentUserInfoResponse extends \ArrayObject
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
     * Control plane observes active endpoints of a user this amount of wall-clock time.
     *
     * @var int
     */
    protected $activeSecondsLimit;
    /**
     * 
     *
     * @var BillingAccount
     */
    protected $billingAccount;
    /**
     * 
     *
     * @var list<CurrentUserAuthAccount>
     */
    protected $authAccounts;
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
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $image;
    /**
     * DEPRECATED. Use `email` field.
     *
     * @deprecated
     *
     * @var string
     */
    protected $login;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $lastName;
    /**
     * 
     *
     * @var int
     */
    protected $projectsLimit;
    /**
     * 
     *
     * @var int
     */
    protected $branchesLimit;
    /**
     * 
     *
     * @var float
     */
    protected $maxAutoscalingLimit;
    /**
     * 
     *
     * @var int
     */
    protected $computeSecondsLimit;
    /**
     * 
     *
     * @var string
     */
    protected $plan;
    /**
     * Control plane observes active endpoints of a user this amount of wall-clock time.
     *
     * @return int
     */
    public function getActiveSecondsLimit(): int
    {
        return $this->activeSecondsLimit;
    }
    /**
     * Control plane observes active endpoints of a user this amount of wall-clock time.
     *
     * @param int $activeSecondsLimit
     *
     * @return self
     */
    public function setActiveSecondsLimit(int $activeSecondsLimit): self
    {
        $this->initialized['activeSecondsLimit'] = true;
        $this->activeSecondsLimit = $activeSecondsLimit;
        return $this;
    }
    /**
     * 
     *
     * @return BillingAccount
     */
    public function getBillingAccount(): BillingAccount
    {
        return $this->billingAccount;
    }
    /**
     * 
     *
     * @param BillingAccount $billingAccount
     *
     * @return self
     */
    public function setBillingAccount(BillingAccount $billingAccount): self
    {
        $this->initialized['billingAccount'] = true;
        $this->billingAccount = $billingAccount;
        return $this;
    }
    /**
     * 
     *
     * @return list<CurrentUserAuthAccount>
     */
    public function getAuthAccounts(): array
    {
        return $this->authAccounts;
    }
    /**
     * 
     *
     * @param list<CurrentUserAuthAccount> $authAccounts
     *
     * @return self
     */
    public function setAuthAccounts(array $authAccounts): self
    {
        $this->initialized['authAccounts'] = true;
        $this->authAccounts = $authAccounts;
        return $this;
    }
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
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }
    /**
     * 
     *
     * @param string $image
     *
     * @return self
     */
    public function setImage(string $image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
    /**
     * DEPRECATED. Use `email` field.
     *
     * @deprecated
     *
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }
    /**
     * DEPRECATED. Use `email` field.
     *
     * @param string $login
     *
     * @deprecated
     *
     * @return self
     */
    public function setLogin(string $login): self
    {
        $this->initialized['login'] = true;
        $this->login = $login;
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
     * @return string
     */
    public function getLastName(): string
    {
        return $this->lastName;
    }
    /**
     * 
     *
     * @param string $lastName
     *
     * @return self
     */
    public function setLastName(string $lastName): self
    {
        $this->initialized['lastName'] = true;
        $this->lastName = $lastName;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getProjectsLimit(): int
    {
        return $this->projectsLimit;
    }
    /**
     * 
     *
     * @param int $projectsLimit
     *
     * @return self
     */
    public function setProjectsLimit(int $projectsLimit): self
    {
        $this->initialized['projectsLimit'] = true;
        $this->projectsLimit = $projectsLimit;
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
     * 
     *
     * @return float
     */
    public function getMaxAutoscalingLimit(): float
    {
        return $this->maxAutoscalingLimit;
    }
    /**
     * 
     *
     * @param float $maxAutoscalingLimit
     *
     * @return self
     */
    public function setMaxAutoscalingLimit(float $maxAutoscalingLimit): self
    {
        $this->initialized['maxAutoscalingLimit'] = true;
        $this->maxAutoscalingLimit = $maxAutoscalingLimit;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getComputeSecondsLimit(): int
    {
        return $this->computeSecondsLimit;
    }
    /**
     * 
     *
     * @param int $computeSecondsLimit
     *
     * @return self
     */
    public function setComputeSecondsLimit(int $computeSecondsLimit): self
    {
        $this->initialized['computeSecondsLimit'] = true;
        $this->computeSecondsLimit = $computeSecondsLimit;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getPlan(): string
    {
        return $this->plan;
    }
    /**
     * 
     *
     * @param string $plan
     *
     * @return self
     */
    public function setPlan(string $plan): self
    {
        $this->initialized['plan'] = true;
        $this->plan = $plan;
        return $this;
    }
}