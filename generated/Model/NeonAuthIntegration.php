<?php

namespace Vendor\Library\Generated\Model;

class NeonAuthIntegration extends \ArrayObject
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
    protected $authProvider;
    /**
     * 
     *
     * @var string
     */
    protected $authProviderProjectId;
    /**
     * 
     *
     * @var string
     */
    protected $branchId;
    /**
     * 
     *
     * @var string
     */
    protected $dbName;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var string
     */
    protected $ownedBy;
    /**
     * 
     *
     * @var string
     */
    protected $transferStatus;
    /**
     * 
     *
     * @var string
     */
    protected $jwksUrl;
    /**
     * 
     *
     * @return string
     */
    public function getAuthProvider(): string
    {
        return $this->authProvider;
    }
    /**
     * 
     *
     * @param string $authProvider
     *
     * @return self
     */
    public function setAuthProvider(string $authProvider): self
    {
        $this->initialized['authProvider'] = true;
        $this->authProvider = $authProvider;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAuthProviderProjectId(): string
    {
        return $this->authProviderProjectId;
    }
    /**
     * 
     *
     * @param string $authProviderProjectId
     *
     * @return self
     */
    public function setAuthProviderProjectId(string $authProviderProjectId): self
    {
        $this->initialized['authProviderProjectId'] = true;
        $this->authProviderProjectId = $authProviderProjectId;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getBranchId(): string
    {
        return $this->branchId;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getDbName(): string
    {
        return $this->dbName;
    }
    /**
     * 
     *
     * @param string $dbName
     *
     * @return self
     */
    public function setDbName(string $dbName): self
    {
        $this->initialized['dbName'] = true;
        $this->dbName = $dbName;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getOwnedBy(): string
    {
        return $this->ownedBy;
    }
    /**
     * 
     *
     * @param string $ownedBy
     *
     * @return self
     */
    public function setOwnedBy(string $ownedBy): self
    {
        $this->initialized['ownedBy'] = true;
        $this->ownedBy = $ownedBy;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getTransferStatus(): string
    {
        return $this->transferStatus;
    }
    /**
     * 
     *
     * @param string $transferStatus
     *
     * @return self
     */
    public function setTransferStatus(string $transferStatus): self
    {
        $this->initialized['transferStatus'] = true;
        $this->transferStatus = $transferStatus;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getJwksUrl(): string
    {
        return $this->jwksUrl;
    }
    /**
     * 
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
}