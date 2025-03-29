<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class ProjectCreateRequestProject extends \ArrayObject
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
     * @var ProjectSettingsData
     */
    protected $settings;
    /**
     * The project name. If not specified, the name will be identical to the generated project ID
     *
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var ProjectCreateRequestProjectBranch
     */
    protected $branch;
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
     * The region identifier. Refer to our [Regions](https://neon.tech/docs/introduction/regions) documentation for supported regions. Values are specified in this format: `aws-us-east-1`
     *
     * @var string
     */
    protected $regionId;
    /**
     * A collection of settings for a Neon endpoint
     *
     * @var DefaultEndpointSettings
     */
    protected $defaultEndpointSettings;
    /**
     * The major Postgres version number. Currently supported versions are `14`, `15`, `16`, and `17`.
     *
     * @var int
     */
    protected $pgVersion = 17;
    /**
     * Whether or not passwords are stored for roles in the Neon project. Storing passwords facilitates access to Neon features that require authorization.
     *
     * @var bool
     */
    protected $storePasswords;
    /**
    * The number of seconds to retain the shared history for all branches in this project.
    The default is 1 day (86400 seconds).
    
    *
    * @var int
    */
    protected $historyRetentionSeconds;
    /**
    * Organization id in case the project created belongs to an organization.
    If not present, project is owned by a user and not by org.
    
    *
    * @var string
    */
    protected $orgId;
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
     * The project name. If not specified, the name will be identical to the generated project ID
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The project name. If not specified, the name will be identical to the generated project ID
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
     * 
     *
     * @return ProjectCreateRequestProjectBranch
     */
    public function getBranch(): ProjectCreateRequestProjectBranch
    {
        return $this->branch;
    }
    /**
     * 
     *
     * @param ProjectCreateRequestProjectBranch $branch
     *
     * @return self
     */
    public function setBranch(ProjectCreateRequestProjectBranch $branch): self
    {
        $this->initialized['branch'] = true;
        $this->branch = $branch;
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
     * The region identifier. Refer to our [Regions](https://neon.tech/docs/introduction/regions) documentation for supported regions. Values are specified in this format: `aws-us-east-1`
     *
     * @return string
     */
    public function getRegionId(): string
    {
        return $this->regionId;
    }
    /**
     * The region identifier. Refer to our [Regions](https://neon.tech/docs/introduction/regions) documentation for supported regions. Values are specified in this format: `aws-us-east-1`
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
    * The number of seconds to retain the shared history for all branches in this project.
    The default is 1 day (86400 seconds).
    
    *
    * @return int
    */
    public function getHistoryRetentionSeconds(): int
    {
        return $this->historyRetentionSeconds;
    }
    /**
    * The number of seconds to retain the shared history for all branches in this project.
    The default is 1 day (86400 seconds).
    
    *
    * @param int $historyRetentionSeconds
    *
    * @return self
    */
    public function setHistoryRetentionSeconds(int $historyRetentionSeconds): self
    {
        $this->initialized['historyRetentionSeconds'] = true;
        $this->historyRetentionSeconds = $historyRetentionSeconds;
        return $this;
    }
    /**
    * Organization id in case the project created belongs to an organization.
    If not present, project is owned by a user and not by org.
    
    *
    * @return string
    */
    public function getOrgId(): string
    {
        return $this->orgId;
    }
    /**
    * Organization id in case the project created belongs to an organization.
    If not present, project is owned by a user and not by org.
    
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