<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class ProjectsIntegrationsMapResponse extends \ArrayObject
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
     * @var array<string, list<string>>
     */
    protected $integrations;
    /**
     * 
     *
     * @return array<string, list<string>>
     */
    public function getIntegrations(): iterable
    {
        return $this->integrations;
    }
    /**
     * 
     *
     * @param array<string, list<string>> $integrations
     *
     * @return self
     */
    public function setIntegrations(iterable $integrations): self
    {
        $this->initialized['integrations'] = true;
        $this->integrations = $integrations;
        return $this;
    }
}