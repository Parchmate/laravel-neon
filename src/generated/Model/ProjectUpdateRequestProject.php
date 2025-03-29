<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class ProjectUpdateRequestProject extends \ArrayObject
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
     * The project name
     *
     * @var string
     */
    protected $name;
    /**
     * A collection of settings for a Neon endpoint
     *
     * @var DefaultEndpointSettings
     */
    protected $defaultEndpointSettings;
    /**
    * The number of seconds to retain the shared history for all branches in this project.
    The default is 1 day (604800 seconds).
    
    *
    * @var int
    */
    protected $historyRetentionSeconds;
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
    * The number of seconds to retain the shared history for all branches in this project.
    The default is 1 day (604800 seconds).
    
    *
    * @return int
    */
    public function getHistoryRetentionSeconds(): int
    {
        return $this->historyRetentionSeconds;
    }
    /**
    * The number of seconds to retain the shared history for all branches in this project.
    The default is 1 day (604800 seconds).
    
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
}