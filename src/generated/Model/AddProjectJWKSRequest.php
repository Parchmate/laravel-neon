<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class AddProjectJWKSRequest extends \ArrayObject
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
     * The URL that lists the JWKS
     *
     * @var string
     */
    protected $jwksUrl;
    /**
     * The name of the authentication provider (e.g., Clerk, Stytch, Auth0)
     *
     * @var string
     */
    protected $providerName;
    /**
     * Branch ID
     *
     * @var string
     */
    protected $branchId;
    /**
     * The name of the required JWT Audience to be used
     *
     * @var string
     */
    protected $jwtAudience;
    /**
     * The roles the JWKS should be mapped to
     *
     * @var list<string>
     */
    protected $roleNames;
    /**
     * The URL that lists the JWKS
     *
     * @return string
     */
    public function getJwksUrl(): string
    {
        return $this->jwksUrl;
    }
    /**
     * The URL that lists the JWKS
     *
     * @param string $jwksUrl
     *
     * @return self
     */
    public function setJwksUrl(string $jwksUrl): self
    {
        $this->initialized['jwksUrl'] = true;
        $this->jwksUrl = $jwksUrl;
        return $this;
    }
    /**
     * The name of the authentication provider (e.g., Clerk, Stytch, Auth0)
     *
     * @return string
     */
    public function getProviderName(): string
    {
        return $this->providerName;
    }
    /**
     * The name of the authentication provider (e.g., Clerk, Stytch, Auth0)
     *
     * @param string $providerName
     *
     * @return self
     */
    public function setProviderName(string $providerName): self
    {
        $this->initialized['providerName'] = true;
        $this->providerName = $providerName;
        return $this;
    }
    /**
     * Branch ID
     *
     * @return string
     */
    public function getBranchId(): string
    {
        return $this->branchId;
    }
    /**
     * Branch ID
     *
     * @param string $branchId
     *
     * @return self
     */
    public function setBranchId(string $branchId): self
    {
        $this->initialized['branchId'] = true;
        $this->branchId = $branchId;
        return $this;
    }
    /**
     * The name of the required JWT Audience to be used
     *
     * @return string
     */
    public function getJwtAudience(): string
    {
        return $this->jwtAudience;
    }
    /**
     * The name of the required JWT Audience to be used
     *
     * @param string $jwtAudience
     *
     * @return self
     */
    public function setJwtAudience(string $jwtAudience): self
    {
        $this->initialized['jwtAudience'] = true;
        $this->jwtAudience = $jwtAudience;
        return $this;
    }
    /**
     * The roles the JWKS should be mapped to
     *
     * @return list<string>
     */
    public function getRoleNames(): array
    {
        return $this->roleNames;
    }
    /**
     * The roles the JWKS should be mapped to
     *
     * @param list<string> $roleNames
     *
     * @return self
     */
    public function setRoleNames(array $roleNames): self
    {
        $this->initialized['roleNames'] = true;
        $this->roleNames = $roleNames;
        return $this;
    }
}