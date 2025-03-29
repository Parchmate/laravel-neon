<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class ProjectSettingsData extends \ArrayObject
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
    * Per-project consumption quota. If the quota is exceeded, all active computes
    are automatically suspended and it will not be possible to start them with
    an API method call or incoming proxy connections. The only exception is
    `logical_size_bytes`, which is applied on per-branch basis, i.e., only the
    compute on the branch that exceeds the `logical_size` quota will be suspended.
    
    Quotas are enforced based on per-project consumption metrics with the same names,
    which are reset at the end of each billing period (the first day of the month).
    Logical size is also an exception in this case, as it represents the total size
    of data stored in a branch, so it is not reset.
    
    A zero or empty quota value means 'unlimited'.
    
    *
    * @var ProjectQuota
    */
    protected $quota;
    /**
    * A list of IP addresses that are allowed to connect to the compute endpoint.
    If the list is empty or not set, all IP addresses are allowed.
    If protected_branches_only is true, the list will be applied only to protected branches.
    
    *
    * @var AllowedIps
    */
    protected $allowedIps;
    /**
    * Sets wal_level=logical for all compute endpoints in this project.
    All active endpoints will be suspended.
    Once enabled, logical replication cannot be disabled.
    
    *
    * @var bool
    */
    protected $enableLogicalReplication;
    /**
    * A maintenance window is a time period during which Neon may perform maintenance on the project's infrastructure.
    During this time, the project's compute endpoints may be unavailable and existing connections can be
    interrupted.
    
    *
    * @var MaintenanceWindow
    */
    protected $maintenanceWindow;
    /**
    * When set, connections from the public internet
    are disallowed. This supersedes the AllowedIPs list.
    This parameter is under active development and its semantics may change in the future.
    
    *
    * @var bool
    */
    protected $blockPublicConnections;
    /**
    * When set, connections using VPC endpoints are disallowed.
    This parameter is under active development and its semantics may change in the future.
    
    *
    * @var bool
    */
    protected $blockVpcConnections;
    /**
     * 
     *
     * @var string
     */
    protected $auditLogLevel;
    /**
     * The shared libraries to preload into the project's compute instances.
     *
     * @var PreloadLibraries
     */
    protected $preloadLibraries;
    /**
    * Per-project consumption quota. If the quota is exceeded, all active computes
    are automatically suspended and it will not be possible to start them with
    an API method call or incoming proxy connections. The only exception is
    `logical_size_bytes`, which is applied on per-branch basis, i.e., only the
    compute on the branch that exceeds the `logical_size` quota will be suspended.
    
    Quotas are enforced based on per-project consumption metrics with the same names,
    which are reset at the end of each billing period (the first day of the month).
    Logical size is also an exception in this case, as it represents the total size
    of data stored in a branch, so it is not reset.
    
    A zero or empty quota value means 'unlimited'.
    
    *
    * @return ProjectQuota
    */
    public function getQuota(): ProjectQuota
    {
        return $this->quota;
    }
    /**
    * Per-project consumption quota. If the quota is exceeded, all active computes
    are automatically suspended and it will not be possible to start them with
    an API method call or incoming proxy connections. The only exception is
    `logical_size_bytes`, which is applied on per-branch basis, i.e., only the
    compute on the branch that exceeds the `logical_size` quota will be suspended.
    
    Quotas are enforced based on per-project consumption metrics with the same names,
    which are reset at the end of each billing period (the first day of the month).
    Logical size is also an exception in this case, as it represents the total size
    of data stored in a branch, so it is not reset.
    
    A zero or empty quota value means 'unlimited'.
    
    *
    * @param ProjectQuota $quota
    *
    * @return self
    */
    public function setQuota(ProjectQuota $quota): self
    {
        $this->initialized['quota'] = true;
        $this->quota = $quota;
        return $this;
    }
    /**
    * A list of IP addresses that are allowed to connect to the compute endpoint.
    If the list is empty or not set, all IP addresses are allowed.
    If protected_branches_only is true, the list will be applied only to protected branches.
    
    *
    * @return AllowedIps
    */
    public function getAllowedIps(): AllowedIps
    {
        return $this->allowedIps;
    }
    /**
    * A list of IP addresses that are allowed to connect to the compute endpoint.
    If the list is empty or not set, all IP addresses are allowed.
    If protected_branches_only is true, the list will be applied only to protected branches.
    
    *
    * @param AllowedIps $allowedIps
    *
    * @return self
    */
    public function setAllowedIps(AllowedIps $allowedIps): self
    {
        $this->initialized['allowedIps'] = true;
        $this->allowedIps = $allowedIps;
        return $this;
    }
    /**
    * Sets wal_level=logical for all compute endpoints in this project.
    All active endpoints will be suspended.
    Once enabled, logical replication cannot be disabled.
    
    *
    * @return bool
    */
    public function getEnableLogicalReplication(): bool
    {
        return $this->enableLogicalReplication;
    }
    /**
    * Sets wal_level=logical for all compute endpoints in this project.
    All active endpoints will be suspended.
    Once enabled, logical replication cannot be disabled.
    
    *
    * @param bool $enableLogicalReplication
    *
    * @return self
    */
    public function setEnableLogicalReplication(bool $enableLogicalReplication): self
    {
        $this->initialized['enableLogicalReplication'] = true;
        $this->enableLogicalReplication = $enableLogicalReplication;
        return $this;
    }
    /**
    * A maintenance window is a time period during which Neon may perform maintenance on the project's infrastructure.
    During this time, the project's compute endpoints may be unavailable and existing connections can be
    interrupted.
    
    *
    * @return MaintenanceWindow
    */
    public function getMaintenanceWindow(): MaintenanceWindow
    {
        return $this->maintenanceWindow;
    }
    /**
    * A maintenance window is a time period during which Neon may perform maintenance on the project's infrastructure.
    During this time, the project's compute endpoints may be unavailable and existing connections can be
    interrupted.
    
    *
    * @param MaintenanceWindow $maintenanceWindow
    *
    * @return self
    */
    public function setMaintenanceWindow(MaintenanceWindow $maintenanceWindow): self
    {
        $this->initialized['maintenanceWindow'] = true;
        $this->maintenanceWindow = $maintenanceWindow;
        return $this;
    }
    /**
    * When set, connections from the public internet
    are disallowed. This supersedes the AllowedIPs list.
    This parameter is under active development and its semantics may change in the future.
    
    *
    * @return bool
    */
    public function getBlockPublicConnections(): bool
    {
        return $this->blockPublicConnections;
    }
    /**
    * When set, connections from the public internet
    are disallowed. This supersedes the AllowedIPs list.
    This parameter is under active development and its semantics may change in the future.
    
    *
    * @param bool $blockPublicConnections
    *
    * @return self
    */
    public function setBlockPublicConnections(bool $blockPublicConnections): self
    {
        $this->initialized['blockPublicConnections'] = true;
        $this->blockPublicConnections = $blockPublicConnections;
        return $this;
    }
    /**
    * When set, connections using VPC endpoints are disallowed.
    This parameter is under active development and its semantics may change in the future.
    
    *
    * @return bool
    */
    public function getBlockVpcConnections(): bool
    {
        return $this->blockVpcConnections;
    }
    /**
    * When set, connections using VPC endpoints are disallowed.
    This parameter is under active development and its semantics may change in the future.
    
    *
    * @param bool $blockVpcConnections
    *
    * @return self
    */
    public function setBlockVpcConnections(bool $blockVpcConnections): self
    {
        $this->initialized['blockVpcConnections'] = true;
        $this->blockVpcConnections = $blockVpcConnections;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getAuditLogLevel(): string
    {
        return $this->auditLogLevel;
    }
    /**
     * 
     *
     * @param string $auditLogLevel
     *
     * @return self
     */
    public function setAuditLogLevel(string $auditLogLevel): self
    {
        $this->initialized['auditLogLevel'] = true;
        $this->auditLogLevel = $auditLogLevel;
        return $this;
    }
    /**
     * The shared libraries to preload into the project's compute instances.
     *
     * @return PreloadLibraries
     */
    public function getPreloadLibraries(): PreloadLibraries
    {
        return $this->preloadLibraries;
    }
    /**
     * The shared libraries to preload into the project's compute instances.
     *
     * @param PreloadLibraries $preloadLibraries
     *
     * @return self
     */
    public function setPreloadLibraries(PreloadLibraries $preloadLibraries): self
    {
        $this->initialized['preloadLibraries'] = true;
        $this->preloadLibraries = $preloadLibraries;
        return $this;
    }
}