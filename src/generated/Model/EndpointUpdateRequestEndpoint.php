<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class EndpointUpdateRequestEndpoint extends \ArrayObject
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
    * DEPRECATED: This field will be removed in a future release.
    The destination branch ID. The destination branch must not have an existing read-write endpoint.
    
    *
    * @deprecated
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
     * A collection of settings for a compute endpoint
     *
     * @var EndpointSettingsData
     */
    protected $settings;
    /**
     * Whether to enable connection pooling for the compute endpoint
     *
     * @deprecated
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
     * NOT YET IMPLEMENTED. Whether to permit passwordless access to the compute endpoint.
     *
     * @var bool
     */
    protected $passwordlessAccess;
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
    * DEPRECATED: This field will be removed in a future release.
    The destination branch ID. The destination branch must not have an existing read-write endpoint.
    
    *
    * @deprecated
    *
    * @return string
    */
    public function getBranchId(): string
    {
        return $this->branchId;
    }
    /**
    * DEPRECATED: This field will be removed in a future release.
    The destination branch ID. The destination branch must not have an existing read-write endpoint.
    
    *
    * @param string $branchId
    *
    * @deprecated
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
     * Whether to enable connection pooling for the compute endpoint
     *
     * @deprecated
     *
     * @return bool
     */
    public function getPoolerEnabled(): bool
    {
        return $this->poolerEnabled;
    }
    /**
     * Whether to enable connection pooling for the compute endpoint
     *
     * @param bool $poolerEnabled
     *
     * @deprecated
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
     * NOT YET IMPLEMENTED. Whether to permit passwordless access to the compute endpoint.
     *
     * @return bool
     */
    public function getPasswordlessAccess(): bool
    {
        return $this->passwordlessAccess;
    }
    /**
     * NOT YET IMPLEMENTED. Whether to permit passwordless access to the compute endpoint.
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
}