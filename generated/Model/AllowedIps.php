<?php

namespace Vendor\Library\Generated\Model;

class AllowedIps extends \ArrayObject
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
     * A list of IP addresses that are allowed to connect to the endpoint.
     *
     * @var list<string>
     */
    protected $ips;
    /**
     * If true, the list will be applied only to protected branches.
     *
     * @var bool
     */
    protected $protectedBranchesOnly;
    /**
     * A list of IP addresses that are allowed to connect to the endpoint.
     *
     * @return list<string>
     */
    public function getIps(): array
    {
        return $this->ips;
    }
    /**
     * A list of IP addresses that are allowed to connect to the endpoint.
     *
     * @param list<string> $ips
     *
     * @return self
     */
    public function setIps(array $ips): self
    {
        $this->initialized['ips'] = true;
        $this->ips = $ips;
        return $this;
    }
    /**
     * If true, the list will be applied only to protected branches.
     *
     * @return bool
     */
    public function getProtectedBranchesOnly(): bool
    {
        return $this->protectedBranchesOnly;
    }
    /**
     * If true, the list will be applied only to protected branches.
     *
     * @param bool $protectedBranchesOnly
     *
     * @return self
     */
    public function setProtectedBranchesOnly(bool $protectedBranchesOnly): self
    {
        $this->initialized['protectedBranchesOnly'] = true;
        $this->protectedBranchesOnly = $protectedBranchesOnly;
        return $this;
    }
}