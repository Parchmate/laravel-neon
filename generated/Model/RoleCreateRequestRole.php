<?php

namespace Vendor\Library\Generated\Model;

class RoleCreateRequestRole extends \ArrayObject
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
     * The role name. Cannot exceed 63 bytes in length.
     *
     * @var string
     */
    protected $name;
    /**
     * Whether to create a role that cannot login.
     *
     * @var bool
     */
    protected $noLogin;
    /**
     * The role name. Cannot exceed 63 bytes in length.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The role name. Cannot exceed 63 bytes in length.
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
     * Whether to create a role that cannot login.
     *
     * @return bool
     */
    public function getNoLogin(): bool
    {
        return $this->noLogin;
    }
    /**
     * Whether to create a role that cannot login.
     *
     * @param bool $noLogin
     *
     * @return self
     */
    public function setNoLogin(bool $noLogin): self
    {
        $this->initialized['noLogin'] = true;
        $this->noLogin = $noLogin;
        return $this;
    }
}