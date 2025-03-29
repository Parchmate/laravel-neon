<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class BranchCreateRequestEndpointOptions extends \ArrayObject
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
     * The compute endpoint type. Either `read_write` or `read_only`.
     *
     * @var string
     */
    protected $type;
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