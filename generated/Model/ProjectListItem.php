<?php

namespace Vendor\Library\Generated\Model;

class ProjectListItem extends \ArrayObject
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
     * The project ID
     *
     * @var string
     */
    protected $id;
    /**
     * The cloud platform identifier. Currently, only AWS is supported, for which the identifier is `aws`.
     *
     * @var string
     */
    protected $platformId;
    /**
     * The region identifier
     *
     * @var string
     */
    protected $regionId;
    /**
     * The project name
     *
     * @var string
     */
    protected $name;
    /**
    * The Neon compute provisioner.
    Specify the `k8s-neonvm` provisioner to create a compute endpoint that supports Autoscaling.
    
    Provisioner can be one of the following values:
    * k8s-pod
    * k8s-neonvm
    
    Clients must expect, that any string value that is not documented in the description above should be treated as a error. UNKNOWN value if safe to treat as an error too.
    
    *
    * @var string
    */
    protected $provisioner;
    /**
     * A collection of settings for a Neon endpoint
     *
     * @var DefaultEndpointSettings
     */
    protected $defaultEndpointSettings;
    /**
     * 
     *
     * @var ProjectSettingsData
     */
    protected $settings;
    /**
     * The major Postgres version number. Currently supported versions are `14`, `15`, `16`, and `17`.
     *
     * @var int
     */
    protected $pgVersion = 17;
    /**
     * The proxy host for the project. This value combines the `region_id`, the `platform_id`, and the Neon domain (`neon.tech`).
     *
     * @var string
     */
    protected $proxyHost;
    /**
     * The logical size limit for a branch. The value is in MiB.
     *
     * @var int
     */
    protected $branchLogicalSizeLimit;
    /**
     * The logical size limit for a branch. The value is in B.
     *
     * @var int
     */
    protected $branchLogicalSizeLimitBytes;
    /**
     * Whether or not passwords are stored for roles in the Neon project. Storing passwords facilitates access to Neon features that require authorization.
     *
     * @var bool
     */
    protected $storePasswords;
    /**
     * Control plane observed endpoints of this project being active this amount of wall-clock time.
     *
     * @var int
     */
    protected $activeTime;
    /**
     * DEPRECATED. Use data from the getProject endpoint instead.
     *
     * @deprecated
     *
     * @var int
     */
    protected $cpuUsedSec;
    /**
     * A timestamp indicating when project maintenance begins. If set, the project is placed into maintenance mode at this time.
     *
     * @var \DateTime
     */
    protected $maintenanceStartsAt;
    /**
     * The project creation source
     *
     * @var string
     */
    protected $creationSource;
    /**
     * A timestamp indicating when the project was created
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * A timestamp indicating when the project was last updated
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * The current space occupied by the project in storage, in bytes. Synthetic storage size combines the logical data size and Write-Ahead Log (WAL) size for all branches in a project.
     *
     * @var int
     */
    protected $syntheticStorageSize;
    /**
    * DEPRECATED. Use `consumption_period_end` from the getProject endpoint instead.
    A timestamp indicating when the project quota resets
    
    *
    * @deprecated
    *
    * @var \DateTime
    */
    protected $quotaResetAt;
    /**
     * 
     *
     * @var string
     */
    protected $ownerId;
    /**
    * The most recent time when any endpoint of this project was active.
    
    Omitted when observed no activity for endpoints of this project.
    
    *
    * @var \DateTime
    */
    protected $computeLastActiveAt;
    /**
    * Organization id if a project belongs to organization.
    Permissions for the project will be given to organization members as defined by the organization admins.
    The permissions of the project do not depend on the user that created the project if a project belongs to an organization.
    
    *
    * @var string
    */
    protected $orgId;
    /**
     * The project ID
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The project ID
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
     * The cloud platform identifier. Currently, only AWS is supported, for which the identifier is `aws`.
     *
     * @return string
     */
    public function getPlatformId(): string
    {
        return $this->platformId;
    }
    /**
     * The cloud platform identifier. Currently, only AWS is supported, for which the identifier is `aws`.
     *
     * @param string $platformId
     *
     * @return self
     */
    public function setPlatformId(string $platformId): self
    {
        $this->initialized['platformId'] = true;
        $this->platformId = $platformId;
        return $this;
    }
    /**
     * The region identifier
     *
     * @return string
     */
    public function getRegionId(): string
    {
        return $this->regionId;
    }
    /**
     * The region identifier
     *
     * @param string $regionId
     *
     * @return self
     */
    public function setRegionId(string $regionId): self
    {
        $this->initialized['regionId'] = true;
        $this->regionId = $regionId;
        return $this;
    }
    /**
     * The project name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The project name
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
    * The Neon compute provisioner.
    Specify the `k8s-neonvm` provisioner to create a compute endpoint that supports Autoscaling.
    
    Provisioner can be one of the following values:
    * k8s-pod
    * k8s-neonvm
    
    Clients must expect, that any string value that is not documented in the description above should be treated as a error. UNKNOWN value if safe to treat as an error too.
    
    *
    * @return string
    */
    public function getProvisioner(): string
    {
        return $this->provisioner;
    }
    /**
    * The Neon compute provisioner.
    Specify the `k8s-neonvm` provisioner to create a compute endpoint that supports Autoscaling.
    
    Provisioner can be one of the following values:
    * k8s-pod
    * k8s-neonvm
    
    Clients must expect, that any string value that is not documented in the description above should be treated as a error. UNKNOWN value if safe to treat as an error too.
    
    *
    * @param string $provisioner
    *
    * @return self
    */
    public function setProvisioner(string $provisioner): self
    {
        $this->initialized['provisioner'] = true;
        $this->provisioner = $provisioner;
        return $this;
    }
    /**
     * A collection of settings for a Neon endpoint
     *
     * @return DefaultEndpointSettings
     */
    public function getDefaultEndpointSettings(): DefaultEndpointSettings
    {
        return $this->defaultEndpointSettings;
    }
    /**
     * A collection of settings for a Neon endpoint
     *
     * @param DefaultEndpointSettings $defaultEndpointSettings
     *
     * @return self
     */
    public function setDefaultEndpointSettings(DefaultEndpointSettings $defaultEndpointSettings): self
    {
        $this->initialized['defaultEndpointSettings'] = true;
        $this->defaultEndpointSettings = $defaultEndpointSettings;
        return $this;
    }
    /**
     * 
     *
     * @return ProjectSettingsData
     */
    public function getSettings(): ProjectSettingsData
    {
        return $this->settings;
    }
    /**
     * 
     *
     * @param ProjectSettingsData $settings
     *
     * @return self
     */
    public function setSettings(ProjectSettingsData $settings): self
    {
        $this->initialized['settings'] = true;
        $this->settings = $settings;
        return $this;
    }
    /**
     * The major Postgres version number. Currently supported versions are `14`, `15`, `16`, and `17`.
     *
     * @return int
     */
    public function getPgVersion(): int
    {
        return $this->pgVersion;
    }
    /**
     * The major Postgres version number. Currently supported versions are `14`, `15`, `16`, and `17`.
     *
     * @param int $pgVersion
     *
     * @return self
     */
    public function setPgVersion(int $pgVersion): self
    {
        $this->initialized['pgVersion'] = true;
        $this->pgVersion = $pgVersion;
        return $this;
    }
    /**
     * The proxy host for the project. This value combines the `region_id`, the `platform_id`, and the Neon domain (`neon.tech`).
     *
     * @return string
     */
    public function getProxyHost(): string
    {
        return $this->proxyHost;
    }
    /**
     * The proxy host for the project. This value combines the `region_id`, the `platform_id`, and the Neon domain (`neon.tech`).
     *
     * @param string $proxyHost
     *
     * @return self
     */
    public function setProxyHost(string $proxyHost): self
    {
        $this->initialized['proxyHost'] = true;
        $this->proxyHost = $proxyHost;
        return $this;
    }
    /**
     * The logical size limit for a branch. The value is in MiB.
     *
     * @return int
     */
    public function getBranchLogicalSizeLimit(): int
    {
        return $this->branchLogicalSizeLimit;
    }
    /**
     * The logical size limit for a branch. The value is in MiB.
     *
     * @param int $branchLogicalSizeLimit
     *
     * @return self
     */
    public function setBranchLogicalSizeLimit(int $branchLogicalSizeLimit): self
    {
        $this->initialized['branchLogicalSizeLimit'] = true;
        $this->branchLogicalSizeLimit = $branchLogicalSizeLimit;
        return $this;
    }
    /**
     * The logical size limit for a branch. The value is in B.
     *
     * @return int
     */
    public function getBranchLogicalSizeLimitBytes(): int
    {
        return $this->branchLogicalSizeLimitBytes;
    }
    /**
     * The logical size limit for a branch. The value is in B.
     *
     * @param int $branchLogicalSizeLimitBytes
     *
     * @return self
     */
    public function setBranchLogicalSizeLimitBytes(int $branchLogicalSizeLimitBytes): self
    {
        $this->initialized['branchLogicalSizeLimitBytes'] = true;
        $this->branchLogicalSizeLimitBytes = $branchLogicalSizeLimitBytes;
        return $this;
    }
    /**
     * Whether or not passwords are stored for roles in the Neon project. Storing passwords facilitates access to Neon features that require authorization.
     *
     * @return bool
     */
    public function getStorePasswords(): bool
    {
        return $this->storePasswords;
    }
    /**
     * Whether or not passwords are stored for roles in the Neon project. Storing passwords facilitates access to Neon features that require authorization.
     *
     * @param bool $storePasswords
     *
     * @return self
     */
    public function setStorePasswords(bool $storePasswords): self
    {
        $this->initialized['storePasswords'] = true;
        $this->storePasswords = $storePasswords;
        return $this;
    }
    /**
     * Control plane observed endpoints of this project being active this amount of wall-clock time.
     *
     * @return int
     */
    public function getActiveTime(): int
    {
        return $this->activeTime;
    }
    /**
     * Control plane observed endpoints of this project being active this amount of wall-clock time.
     *
     * @param int $activeTime
     *
     * @return self
     */
    public function setActiveTime(int $activeTime): self
    {
        $this->initialized['activeTime'] = true;
        $this->activeTime = $activeTime;
        return $this;
    }
    /**
     * DEPRECATED. Use data from the getProject endpoint instead.
     *
     * @deprecated
     *
     * @return int
     */
    public function getCpuUsedSec(): int
    {
        return $this->cpuUsedSec;
    }
    /**
     * DEPRECATED. Use data from the getProject endpoint instead.
     *
     * @param int $cpuUsedSec
     *
     * @deprecated
     *
     * @return self
     */
    public function setCpuUsedSec(int $cpuUsedSec): self
    {
        $this->initialized['cpuUsedSec'] = true;
        $this->cpuUsedSec = $cpuUsedSec;
        return $this;
    }
    /**
     * A timestamp indicating when project maintenance begins. If set, the project is placed into maintenance mode at this time.
     *
     * @return \DateTime
     */
    public function getMaintenanceStartsAt(): \DateTime
    {
        return $this->maintenanceStartsAt;
    }
    /**
     * A timestamp indicating when project maintenance begins. If set, the project is placed into maintenance mode at this time.
     *
     * @param \DateTime $maintenanceStartsAt
     *
     * @return self
     */
    public function setMaintenanceStartsAt(\DateTime $maintenanceStartsAt): self
    {
        $this->initialized['maintenanceStartsAt'] = true;
        $this->maintenanceStartsAt = $maintenanceStartsAt;
        return $this;
    }
    /**
     * The project creation source
     *
     * @return string
     */
    public function getCreationSource(): string
    {
        return $this->creationSource;
    }
    /**
     * The project creation source
     *
     * @param string $creationSource
     *
     * @return self
     */
    public function setCreationSource(string $creationSource): self
    {
        $this->initialized['creationSource'] = true;
        $this->creationSource = $creationSource;
        return $this;
    }
    /**
     * A timestamp indicating when the project was created
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * A timestamp indicating when the project was created
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
     * A timestamp indicating when the project was last updated
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * A timestamp indicating when the project was last updated
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
     * The current space occupied by the project in storage, in bytes. Synthetic storage size combines the logical data size and Write-Ahead Log (WAL) size for all branches in a project.
     *
     * @return int
     */
    public function getSyntheticStorageSize(): int
    {
        return $this->syntheticStorageSize;
    }
    /**
     * The current space occupied by the project in storage, in bytes. Synthetic storage size combines the logical data size and Write-Ahead Log (WAL) size for all branches in a project.
     *
     * @param int $syntheticStorageSize
     *
     * @return self
     */
    public function setSyntheticStorageSize(int $syntheticStorageSize): self
    {
        $this->initialized['syntheticStorageSize'] = true;
        $this->syntheticStorageSize = $syntheticStorageSize;
        return $this;
    }
    /**
    * DEPRECATED. Use `consumption_period_end` from the getProject endpoint instead.
    A timestamp indicating when the project quota resets
    
    *
    * @deprecated
    *
    * @return \DateTime
    */
    public function getQuotaResetAt(): \DateTime
    {
        return $this->quotaResetAt;
    }
    /**
    * DEPRECATED. Use `consumption_period_end` from the getProject endpoint instead.
    A timestamp indicating when the project quota resets
    
    *
    * @param \DateTime $quotaResetAt
    *
    * @deprecated
    *
    * @return self
    */
    public function setQuotaResetAt(\DateTime $quotaResetAt): self
    {
        $this->initialized['quotaResetAt'] = true;
        $this->quotaResetAt = $quotaResetAt;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getOwnerId(): string
    {
        return $this->ownerId;
    }
    /**
     * 
     *
     * @param string $ownerId
     *
     * @return self
     */
    public function setOwnerId(string $ownerId): self
    {
        $this->initialized['ownerId'] = true;
        $this->ownerId = $ownerId;
        return $this;
    }
    /**
    * The most recent time when any endpoint of this project was active.
    
    Omitted when observed no activity for endpoints of this project.
    
    *
    * @return \DateTime
    */
    public function getComputeLastActiveAt(): \DateTime
    {
        return $this->computeLastActiveAt;
    }
    /**
    * The most recent time when any endpoint of this project was active.
    
    Omitted when observed no activity for endpoints of this project.
    
    *
    * @param \DateTime $computeLastActiveAt
    *
    * @return self
    */
    public function setComputeLastActiveAt(\DateTime $computeLastActiveAt): self
    {
        $this->initialized['computeLastActiveAt'] = true;
        $this->computeLastActiveAt = $computeLastActiveAt;
        return $this;
    }
    /**
    * Organization id if a project belongs to organization.
    Permissions for the project will be given to organization members as defined by the organization admins.
    The permissions of the project do not depend on the user that created the project if a project belongs to an organization.
    
    *
    * @return string
    */
    public function getOrgId(): string
    {
        return $this->orgId;
    }
    /**
    * Organization id if a project belongs to organization.
    Permissions for the project will be given to organization members as defined by the organization admins.
    The permissions of the project do not depend on the user that created the project if a project belongs to an organization.
    
    *
    * @param string $orgId
    *
    * @return self
    */
    public function setOrgId(string $orgId): self
    {
        $this->initialized['orgId'] = true;
        $this->orgId = $orgId;
        return $this;
    }
}