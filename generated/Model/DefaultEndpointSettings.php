<?php

namespace Vendor\Library\Generated\Model;

class DefaultEndpointSettings extends \ArrayObject
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
     * A raw representation of Postgres settings
     *
     * @var array<string, string>
     */
    protected $pgSettings;
    /**
     * A raw representation of PgBouncer settings
     *
     * @var array<string, string>
     */
    protected $pgbouncerSettings;
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
     * A raw representation of Postgres settings
     *
     * @return array<string, string>
     */
    public function getPgSettings(): iterable
    {
        return $this->pgSettings;
    }
    /**
     * A raw representation of Postgres settings
     *
     * @param array<string, string> $pgSettings
     *
     * @return self
     */
    public function setPgSettings(iterable $pgSettings): self
    {
        $this->initialized['pgSettings'] = true;
        $this->pgSettings = $pgSettings;
        return $this;
    }
    /**
     * A raw representation of PgBouncer settings
     *
     * @return array<string, string>
     */
    public function getPgbouncerSettings(): iterable
    {
        return $this->pgbouncerSettings;
    }
    /**
     * A raw representation of PgBouncer settings
     *
     * @param array<string, string> $pgbouncerSettings
     *
     * @return self
     */
    public function setPgbouncerSettings(iterable $pgbouncerSettings): self
    {
        $this->initialized['pgbouncerSettings'] = true;
        $this->pgbouncerSettings = $pgbouncerSettings;
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