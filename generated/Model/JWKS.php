<?php

namespace Vendor\Library\Generated\Model;

class JWKS extends \ArrayObject
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
     * JWKS ID
     *
     * @var string
     */
    protected $id;
    /**
     * Project ID
     *
     * @var string
     */
    protected $projectId;
    /**
     * Branch ID
     *
     * @var string
     */
    protected $branchId;
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
     * The date and time when the JWKS was created
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * The date and time when the JWKS was last modified
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * The name of the required JWT Audience to be used
     *
     * @var string
     */
    protected $jwtAudience;
    /**
     * JWKS ID
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * JWKS ID
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
     * Project ID
     *
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }
    /**
     * Project ID
     *
     * @param string $projectId
     *
     * @return self
     */
    public function setProjectId(string $projectId): self
    {
        $this->initialized['projectId'] = true;
        $this->projectId = $projectId;
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
     * The date and time when the JWKS was created
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * The date and time when the JWKS was created
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * The date and time when the JWKS was last modified
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * The date and time when the JWKS was last modified
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
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
}