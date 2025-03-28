<?php

namespace Vendor\Library\Generated\Model;

class Endpoint extends \ArrayObject
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
     * The hostname of the compute endpoint. This is the hostname specified when connecting to a Neon database.
     *
     * @var string
     */
    protected $host;
    /**
     * The compute endpoint ID. Compute endpoint IDs have an `ep-` prefix. For example: `ep-little-smoke-851426`
     *
     * @var string
     */
    protected $id;
    /**
     * The ID of the project to which the compute endpoint belongs
     *
     * @var string
     */
    protected $projectId;
    /**
     * The ID of the branch that the compute endpoint is associated with
     *
     * @var string
     */
    protected $branchId;
    /**
     * 
     *
     * @var float
     */
    protected $autoscalingLimitMinCu;
    /**
     * 
     *
     * @var float
     */
    protected $autoscalingLimitMaxCu;
    /**
     * The region identifier
     *
     * @var string
     */
    protected $regionId;
    /**
     * The compute endpoint type. Either `read_write` or `read_only`.
     *
     * @var string
     */
    protected $type;
    /**
     * The state of the compute endpoint
     *
     * @var string
     */
    protected $currentState;
    /**
     * The state of the compute endpoint
     *
     * @var string
     */
    protected $pendingState;
    /**
     * A collection of settings for a compute endpoint
     *
     * @var EndpointSettingsData
     */
    protected $settings;
    /**
     * Whether connection pooling is enabled for the compute endpoint
     *
     * @var bool
     */
    protected $poolerEnabled;
    /**
     * The connection pooler mode. Neon supports PgBouncer in `transaction` mode only.
     *
     * @var string
     */
    protected $poolerMode;
    /**
    * Whether to restrict connections to the compute endpoint.
    Enabling this option schedules a suspend compute operation.
    A disabled compute endpoint cannot be enabled by a connection or
    console action. However, the compute endpoint is periodically
    enabled by check_availability operations.
    
    *
    * @var bool
    */
    protected $disabled;
    /**
     * Whether to permit passwordless access to the compute endpoint
     *
     * @var bool
     */
    protected $passwordlessAccess;
    /**
     * A timestamp indicating when the compute endpoint was last active
     *
     * @var \DateTime
     */
    protected $lastActive;
    /**
     * The compute endpoint creation source
     *
     * @var string
     */
    protected $creationSource;
    /**
     * A timestamp indicating when the compute endpoint was created
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * A timestamp indicating when the compute endpoint was last updated
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * A timestamp indicating when the compute endpoint was last started
     *
     * @var \DateTime
     */
    protected $startedAt;
    /**
     * DEPRECATED. Use the "host" property instead.
     *
     * @var string
     */
    protected $proxyHost;
    /**
    * Duration of inactivity in seconds after which the compute endpoint is
    automatically suspended. The value `0` means use the default value.
    The value `-1` means never suspend. The default value is `300` seconds (5 minutes).
    The minimum value is `60` seconds (1 minute).
    The maximum value is `604800` seconds (1 week). For more information, see
    [Scale to zero configuration](https://neon.tech/docs/manage/endpoints#scale-to-zero-configuration).
    
    *
    * @var int
    */
    protected $suspendTimeoutSeconds;
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
     * Attached compute's release version number.
     *
     * @var string
     */
    protected $computeReleaseVersion;
    /**
     * The hostname of the compute endpoint. This is the hostname specified when connecting to a Neon database.
     *
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }
    /**
     * The hostname of the compute endpoint. This is the hostname specified when connecting to a Neon database.
     *
     * @param string $host
     *
     * @return self
     */
    public function setHost(string $host): self
    {
        $this->initialized['host'] = true;
        $this->host = $host;
        return $this;
    }
    /**
     * The compute endpoint ID. Compute endpoint IDs have an `ep-` prefix. For example: `ep-little-smoke-851426`
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * The compute endpoint ID. Compute endpoint IDs have an `ep-` prefix. For example: `ep-little-smoke-851426`
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
     * The ID of the project to which the compute endpoint belongs
     *
     * @return string
     */
    public function getProjectId(): string
    {
        return $this->projectId;
    }
    /**
     * The ID of the project to which the compute endpoint belongs
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
     * The ID of the branch that the compute endpoint is associated with
     *
     * @return string
     */
    public function getBranchId(): string
    {
        return $this->branchId;
    }
    /**
     * The ID of the branch that the compute endpoint is associated with
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
     * @return float
     */
    public function getAutoscalingLimitMinCu(): float
    {
        return $this->autoscalingLimitMinCu;
    }
    /**
     * 
     *
     * @param float $autoscalingLimitMinCu
     *
     * @return self
     */
    public function setAutoscalingLimitMinCu(float $autoscalingLimitMinCu): self
    {
        $this->initialized['autoscalingLimitMinCu'] = true;
        $this->autoscalingLimitMinCu = $autoscalingLimitMinCu;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getAutoscalingLimitMaxCu(): float
    {
        return $this->autoscalingLimitMaxCu;
    }
    /**
     * 
     *
     * @param float $autoscalingLimitMaxCu
     *
     * @return self
     */
    public function setAutoscalingLimitMaxCu(float $autoscalingLimitMaxCu): self
    {
        $this->initialized['autoscalingLimitMaxCu'] = true;
        $this->autoscalingLimitMaxCu = $autoscalingLimitMaxCu;
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
     * The compute endpoint type. Either `read_write` or `read_only`.
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * The compute endpoint type. Either `read_write` or `read_only`.
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * The state of the compute endpoint
     *
     * @return string
     */
    public function getCurrentState(): string
    {
        return $this->currentState;
    }
    /**
     * The state of the compute endpoint
     *
     * @param string $currentState
     *
     * @return self
     */
    public function setCurrentState(string $currentState): self
    {
        $this->initialized['currentState'] = true;
        $this->currentState = $currentState;
        return $this;
    }
    /**
     * The state of the compute endpoint
     *
     * @return string
     */
    public function getPendingState(): string
    {
        return $this->pendingState;
    }
    /**
     * The state of the compute endpoint
     *
     * @param string $pendingState
     *
     * @return self
     */
    public function setPendingState(string $pendingState): self
    {
        $this->initialized['pendingState'] = true;
        $this->pendingState = $pendingState;
        return $this;
    }
    /**
     * A collection of settings for a compute endpoint
     *
     * @return EndpointSettingsData
     */
    public function getSettings(): EndpointSettingsData
    {
        return $this->settings;
    }
    /**
     * A collection of settings for a compute endpoint
     *
     * @param EndpointSettingsData $settings
     *
     * @return self
     */
    public function setSettings(EndpointSettingsData $settings): self
    {
        $this->initialized['settings'] = true;
        $this->settings = $settings;
        return $this;
    }
    /**
     * Whether connection pooling is enabled for the compute endpoint
     *
     * @return bool
     */
    public function getPoolerEnabled(): bool
    {
        return $this->poolerEnabled;
    }
    /**
     * Whether connection pooling is enabled for the compute endpoint
     *
     * @param bool $poolerEnabled
     *
     * @return self
     */
    public function setPoolerEnabled(bool $poolerEnabled): self
    {
        $this->initialized['poolerEnabled'] = true;
        $this->poolerEnabled = $poolerEnabled;
        return $this;
    }
    /**
     * The connection pooler mode. Neon supports PgBouncer in `transaction` mode only.
     *
     * @return string
     */
    public function getPoolerMode(): string
    {
        return $this->poolerMode;
    }
    /**
     * The connection pooler mode. Neon supports PgBouncer in `transaction` mode only.
     *
     * @param string $poolerMode
     *
     * @return self
     */
    public function setPoolerMode(string $poolerMode): self
    {
        $this->initialized['poolerMode'] = true;
        $this->poolerMode = $poolerMode;
        return $this;
    }
    /**
    * Whether to restrict connections to the compute endpoint.
    Enabling this option schedules a suspend compute operation.
    A disabled compute endpoint cannot be enabled by a connection or
    console action. However, the compute endpoint is periodically
    enabled by check_availability operations.
    
    *
    * @return bool
    */
    public function getDisabled(): bool
    {
        return $this->disabled;
    }
    /**
    * Whether to restrict connections to the compute endpoint.
    Enabling this option schedules a suspend compute operation.
    A disabled compute endpoint cannot be enabled by a connection or
    console action. However, the compute endpoint is periodically
    enabled by check_availability operations.
    
    *
    * @param bool $disabled
    *
    * @return self
    */
    public function setDisabled(bool $disabled): self
    {
        $this->initialized['disabled'] = true;
        $this->disabled = $disabled;
        return $this;
    }
    /**
     * Whether to permit passwordless access to the compute endpoint
     *
     * @return bool
     */
    public function getPasswordlessAccess(): bool
    {
        return $this->passwordlessAccess;
    }
    /**
     * Whether to permit passwordless access to the compute endpoint
     *
     * @param bool $passwordlessAccess
     *
     * @return self
     */
    public function setPasswordlessAccess(bool $passwordlessAccess): self
    {
        $this->initialized['passwordlessAccess'] = true;
        $this->passwordlessAccess = $passwordlessAccess;
        return $this;
    }
    /**
     * A timestamp indicating when the compute endpoint was last active
     *
     * @return \DateTime
     */
    public function getLastActive(): \DateTime
    {
        return $this->lastActive;
    }
    /**
     * A timestamp indicating when the compute endpoint was last active
     *
     * @param \DateTime $lastActive
     *
     * @return self
     */
    public function setLastActive(\DateTime $lastActive): self
    {
        $this->initialized['lastActive'] = true;
        $this->lastActive = $lastActive;
        return $this;
    }
    /**
     * The compute endpoint creation source
     *
     * @return string
     */
    public function getCreationSource(): string
    {
        return $this->creationSource;
    }
    /**
     * The compute endpoint creation source
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
     * A timestamp indicating when the compute endpoint was created
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * A timestamp indicating when the compute endpoint was created
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
     * A timestamp indicating when the compute endpoint was last updated
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * A timestamp indicating when the compute endpoint was last updated
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
     * A timestamp indicating when the compute endpoint was last started
     *
     * @return \DateTime
     */
    public function getStartedAt(): \DateTime
    {
        return $this->startedAt;
    }
    /**
     * A timestamp indicating when the compute endpoint was last started
     *
     * @param \DateTime $startedAt
     *
     * @return self
     */
    public function setStartedAt(\DateTime $startedAt): self
    {
        $this->initialized['startedAt'] = true;
        $this->startedAt = $startedAt;
        return $this;
    }
    /**
     * DEPRECATED. Use the "host" property instead.
     *
     * @return string
     */
    public function getProxyHost(): string
    {
        return $this->proxyHost;
    }
    /**
     * DEPRECATED. Use the "host" property instead.
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
    * Duration of inactivity in seconds after which the compute endpoint is
    automatically suspended. The value `0` means use the default value.
    The value `-1` means never suspend. The default value is `300` seconds (5 minutes).
    The minimum value is `60` seconds (1 minute).
    The maximum value is `604800` seconds (1 week). For more information, see
    [Scale to zero configuration](https://neon.tech/docs/manage/endpoints#scale-to-zero-configuration).
    
    *
    * @return int
    */
    public function getSuspendTimeoutSeconds(): int
    {
        return $this->suspendTimeoutSeconds;
    }
    /**
    * Duration of inactivity in seconds after which the compute endpoint is
    automatically suspended. The value `0` means use the default value.
    The value `-1` means never suspend. The default value is `300` seconds (5 minutes).
    The minimum value is `60` seconds (1 minute).
    The maximum value is `604800` seconds (1 week). For more information, see
    [Scale to zero configuration](https://neon.tech/docs/manage/endpoints#scale-to-zero-configuration).
    
    *
    * @param int $suspendTimeoutSeconds
    *
    * @return self
    */
    public function setSuspendTimeoutSeconds(int $suspendTimeoutSeconds): self
    {
        $this->initialized['suspendTimeoutSeconds'] = true;
        $this->suspendTimeoutSeconds = $suspendTimeoutSeconds;
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
     * Attached compute's release version number.
     *
     * @return string
     */
    public function getComputeReleaseVersion(): string
    {
        return $this->computeReleaseVersion;
    }
    /**
     * Attached compute's release version number.
     *
     * @param string $computeReleaseVersion
     *
     * @return self
     */
    public function setComputeReleaseVersion(string $computeReleaseVersion): self
    {
        $this->initialized['computeReleaseVersion'] = true;
        $this->computeReleaseVersion = $computeReleaseVersion;
        return $this;
    }
}