<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class Limits extends \ArrayObject
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
     * @var int
     */
    protected $activeTime;
    /**
     * 
     *
     * @var int
     */
    protected $maxProjects;
    /**
     * 
     *
     * @var int
     */
    protected $maxBranches;
    /**
     * 
     *
     * @var int
     */
    protected $maxProtectedBranches;
    /**
     * 
     *
     * @var float
     */
    protected $maxAutoscalingCu;
    /**
     * 
     *
     * @var float
     */
    protected $maxFixedSizeCu;
    /**
     * 
     *
     * @var int
     */
    protected $cpuSeconds;
    /**
     * 
     *
     * @var int
     */
    protected $maxComputeTimeNonPrimary;
    /**
     * 
     *
     * @var int
     */
    protected $maxActiveEndpoints;
    /**
     * 
     *
     * @var int
     */
    protected $maxReadOnlyEndpoints;
    /**
     * 
     *
     * @var int
     */
    protected $maxAllowedIps;
    /**
     * 
     *
     * @var int
     */
    protected $maxVpcEndpointsPerRegion;
    /**
     * 
     *
     * @var int
     */
    protected $maxMonitoringRetentionHours;
    /**
     * 
     *
     * @var int
     */
    protected $maxHistoryRetentionSeconds;
    /**
     * 
     *
     * @var int
     */
    protected $minAutosuspendSeconds;
    /**
     * 
     *
     * @var int
     */
    protected $maxDataTransfer;
    /**
     * 
     *
     * @var int
     */
    protected $minIdleSecondsToAutoarchive;
    /**
     * 
     *
     * @var int
     */
    protected $minAgeSecondsToAutoarchive;
    /**
     * 
     *
     * @var int
     */
    protected $maxBranchRoles;
    /**
     * 
     *
     * @var int
     */
    protected $maxBranchDatabases;
    /**
     * 
     *
     * @var int
     */
    protected $maxConcurrentScheduledOperationChainsPerProject;
    /**
     * 
     *
     * @var int
     */
    protected $maxConcurrentExecutingOperationChainsPerProject;
    /**
     * 
     *
     * @var int
     */
    protected $maxRootBranches;
    /**
     * 
     *
     * @var int
     */
    protected $maxImportSize;
    /**
     * 
     *
     * @var int
     */
    protected $maxOrganizationMembers;
    /**
     * 
     *
     * @var LimitsPerProject
     */
    protected $perProject;
    /**
     * 
     *
     * @return int
     */
    public function getActiveTime(): int
    {
        return $this->activeTime;
    }
    /**
     * 
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
     * 
     *
     * @return int
     */
    public function getMaxProjects(): int
    {
        return $this->maxProjects;
    }
    /**
     * 
     *
     * @param int $maxProjects
     *
     * @return self
     */
    public function setMaxProjects(int $maxProjects): self
    {
        $this->initialized['maxProjects'] = true;
        $this->maxProjects = $maxProjects;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxBranches(): int
    {
        return $this->maxBranches;
    }
    /**
     * 
     *
     * @param int $maxBranches
     *
     * @return self
     */
    public function setMaxBranches(int $maxBranches): self
    {
        $this->initialized['maxBranches'] = true;
        $this->maxBranches = $maxBranches;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxProtectedBranches(): int
    {
        return $this->maxProtectedBranches;
    }
    /**
     * 
     *
     * @param int $maxProtectedBranches
     *
     * @return self
     */
    public function setMaxProtectedBranches(int $maxProtectedBranches): self
    {
        $this->initialized['maxProtectedBranches'] = true;
        $this->maxProtectedBranches = $maxProtectedBranches;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMaxAutoscalingCu(): float
    {
        return $this->maxAutoscalingCu;
    }
    /**
     * 
     *
     * @param float $maxAutoscalingCu
     *
     * @return self
     */
    public function setMaxAutoscalingCu(float $maxAutoscalingCu): self
    {
        $this->initialized['maxAutoscalingCu'] = true;
        $this->maxAutoscalingCu = $maxAutoscalingCu;
        return $this;
    }
    /**
     * 
     *
     * @return float
     */
    public function getMaxFixedSizeCu(): float
    {
        return $this->maxFixedSizeCu;
    }
    /**
     * 
     *
     * @param float $maxFixedSizeCu
     *
     * @return self
     */
    public function setMaxFixedSizeCu(float $maxFixedSizeCu): self
    {
        $this->initialized['maxFixedSizeCu'] = true;
        $this->maxFixedSizeCu = $maxFixedSizeCu;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getCpuSeconds(): int
    {
        return $this->cpuSeconds;
    }
    /**
     * 
     *
     * @param int $cpuSeconds
     *
     * @return self
     */
    public function setCpuSeconds(int $cpuSeconds): self
    {
        $this->initialized['cpuSeconds'] = true;
        $this->cpuSeconds = $cpuSeconds;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxComputeTimeNonPrimary(): int
    {
        return $this->maxComputeTimeNonPrimary;
    }
    /**
     * 
     *
     * @param int $maxComputeTimeNonPrimary
     *
     * @return self
     */
    public function setMaxComputeTimeNonPrimary(int $maxComputeTimeNonPrimary): self
    {
        $this->initialized['maxComputeTimeNonPrimary'] = true;
        $this->maxComputeTimeNonPrimary = $maxComputeTimeNonPrimary;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxActiveEndpoints(): int
    {
        return $this->maxActiveEndpoints;
    }
    /**
     * 
     *
     * @param int $maxActiveEndpoints
     *
     * @return self
     */
    public function setMaxActiveEndpoints(int $maxActiveEndpoints): self
    {
        $this->initialized['maxActiveEndpoints'] = true;
        $this->maxActiveEndpoints = $maxActiveEndpoints;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxReadOnlyEndpoints(): int
    {
        return $this->maxReadOnlyEndpoints;
    }
    /**
     * 
     *
     * @param int $maxReadOnlyEndpoints
     *
     * @return self
     */
    public function setMaxReadOnlyEndpoints(int $maxReadOnlyEndpoints): self
    {
        $this->initialized['maxReadOnlyEndpoints'] = true;
        $this->maxReadOnlyEndpoints = $maxReadOnlyEndpoints;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxAllowedIps(): int
    {
        return $this->maxAllowedIps;
    }
    /**
     * 
     *
     * @param int $maxAllowedIps
     *
     * @return self
     */
    public function setMaxAllowedIps(int $maxAllowedIps): self
    {
        $this->initialized['maxAllowedIps'] = true;
        $this->maxAllowedIps = $maxAllowedIps;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxVpcEndpointsPerRegion(): int
    {
        return $this->maxVpcEndpointsPerRegion;
    }
    /**
     * 
     *
     * @param int $maxVpcEndpointsPerRegion
     *
     * @return self
     */
    public function setMaxVpcEndpointsPerRegion(int $maxVpcEndpointsPerRegion): self
    {
        $this->initialized['maxVpcEndpointsPerRegion'] = true;
        $this->maxVpcEndpointsPerRegion = $maxVpcEndpointsPerRegion;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxMonitoringRetentionHours(): int
    {
        return $this->maxMonitoringRetentionHours;
    }
    /**
     * 
     *
     * @param int $maxMonitoringRetentionHours
     *
     * @return self
     */
    public function setMaxMonitoringRetentionHours(int $maxMonitoringRetentionHours): self
    {
        $this->initialized['maxMonitoringRetentionHours'] = true;
        $this->maxMonitoringRetentionHours = $maxMonitoringRetentionHours;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxHistoryRetentionSeconds(): int
    {
        return $this->maxHistoryRetentionSeconds;
    }
    /**
     * 
     *
     * @param int $maxHistoryRetentionSeconds
     *
     * @return self
     */
    public function setMaxHistoryRetentionSeconds(int $maxHistoryRetentionSeconds): self
    {
        $this->initialized['maxHistoryRetentionSeconds'] = true;
        $this->maxHistoryRetentionSeconds = $maxHistoryRetentionSeconds;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMinAutosuspendSeconds(): int
    {
        return $this->minAutosuspendSeconds;
    }
    /**
     * 
     *
     * @param int $minAutosuspendSeconds
     *
     * @return self
     */
    public function setMinAutosuspendSeconds(int $minAutosuspendSeconds): self
    {
        $this->initialized['minAutosuspendSeconds'] = true;
        $this->minAutosuspendSeconds = $minAutosuspendSeconds;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxDataTransfer(): int
    {
        return $this->maxDataTransfer;
    }
    /**
     * 
     *
     * @param int $maxDataTransfer
     *
     * @return self
     */
    public function setMaxDataTransfer(int $maxDataTransfer): self
    {
        $this->initialized['maxDataTransfer'] = true;
        $this->maxDataTransfer = $maxDataTransfer;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMinIdleSecondsToAutoarchive(): int
    {
        return $this->minIdleSecondsToAutoarchive;
    }
    /**
     * 
     *
     * @param int $minIdleSecondsToAutoarchive
     *
     * @return self
     */
    public function setMinIdleSecondsToAutoarchive(int $minIdleSecondsToAutoarchive): self
    {
        $this->initialized['minIdleSecondsToAutoarchive'] = true;
        $this->minIdleSecondsToAutoarchive = $minIdleSecondsToAutoarchive;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMinAgeSecondsToAutoarchive(): int
    {
        return $this->minAgeSecondsToAutoarchive;
    }
    /**
     * 
     *
     * @param int $minAgeSecondsToAutoarchive
     *
     * @return self
     */
    public function setMinAgeSecondsToAutoarchive(int $minAgeSecondsToAutoarchive): self
    {
        $this->initialized['minAgeSecondsToAutoarchive'] = true;
        $this->minAgeSecondsToAutoarchive = $minAgeSecondsToAutoarchive;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxBranchRoles(): int
    {
        return $this->maxBranchRoles;
    }
    /**
     * 
     *
     * @param int $maxBranchRoles
     *
     * @return self
     */
    public function setMaxBranchRoles(int $maxBranchRoles): self
    {
        $this->initialized['maxBranchRoles'] = true;
        $this->maxBranchRoles = $maxBranchRoles;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxBranchDatabases(): int
    {
        return $this->maxBranchDatabases;
    }
    /**
     * 
     *
     * @param int $maxBranchDatabases
     *
     * @return self
     */
    public function setMaxBranchDatabases(int $maxBranchDatabases): self
    {
        $this->initialized['maxBranchDatabases'] = true;
        $this->maxBranchDatabases = $maxBranchDatabases;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxConcurrentScheduledOperationChainsPerProject(): int
    {
        return $this->maxConcurrentScheduledOperationChainsPerProject;
    }
    /**
     * 
     *
     * @param int $maxConcurrentScheduledOperationChainsPerProject
     *
     * @return self
     */
    public function setMaxConcurrentScheduledOperationChainsPerProject(int $maxConcurrentScheduledOperationChainsPerProject): self
    {
        $this->initialized['maxConcurrentScheduledOperationChainsPerProject'] = true;
        $this->maxConcurrentScheduledOperationChainsPerProject = $maxConcurrentScheduledOperationChainsPerProject;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxConcurrentExecutingOperationChainsPerProject(): int
    {
        return $this->maxConcurrentExecutingOperationChainsPerProject;
    }
    /**
     * 
     *
     * @param int $maxConcurrentExecutingOperationChainsPerProject
     *
     * @return self
     */
    public function setMaxConcurrentExecutingOperationChainsPerProject(int $maxConcurrentExecutingOperationChainsPerProject): self
    {
        $this->initialized['maxConcurrentExecutingOperationChainsPerProject'] = true;
        $this->maxConcurrentExecutingOperationChainsPerProject = $maxConcurrentExecutingOperationChainsPerProject;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxRootBranches(): int
    {
        return $this->maxRootBranches;
    }
    /**
     * 
     *
     * @param int $maxRootBranches
     *
     * @return self
     */
    public function setMaxRootBranches(int $maxRootBranches): self
    {
        $this->initialized['maxRootBranches'] = true;
        $this->maxRootBranches = $maxRootBranches;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxImportSize(): int
    {
        return $this->maxImportSize;
    }
    /**
     * 
     *
     * @param int $maxImportSize
     *
     * @return self
     */
    public function setMaxImportSize(int $maxImportSize): self
    {
        $this->initialized['maxImportSize'] = true;
        $this->maxImportSize = $maxImportSize;
        return $this;
    }
    /**
     * 
     *
     * @return int
     */
    public function getMaxOrganizationMembers(): int
    {
        return $this->maxOrganizationMembers;
    }
    /**
     * 
     *
     * @param int $maxOrganizationMembers
     *
     * @return self
     */
    public function setMaxOrganizationMembers(int $maxOrganizationMembers): self
    {
        $this->initialized['maxOrganizationMembers'] = true;
        $this->maxOrganizationMembers = $maxOrganizationMembers;
        return $this;
    }
    /**
     * 
     *
     * @return LimitsPerProject
     */
    public function getPerProject(): LimitsPerProject
    {
        return $this->perProject;
    }
    /**
     * 
     *
     * @param LimitsPerProject $perProject
     *
     * @return self
     */
    public function setPerProject(LimitsPerProject $perProject): self
    {
        $this->initialized['perProject'] = true;
        $this->perProject = $perProject;
        return $this;
    }
}