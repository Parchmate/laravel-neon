<?php

namespace Vendor\Library\Generated\Model;

class ProjectsWithIntegrationResponseProjectsItem extends \ArrayObject
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
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $integration;
    /**
     * 
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
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
     * 
     *
     * @return string
     */
    public function getIntegration(): string
    {
        return $this->integration;
    }
    /**
     * 
     *
     * @param string $integration
     *
     * @return self
     */
    public function setIntegration(string $integration): self
    {
        $this->initialized['integration'] = true;
        $this->integration = $integration;
        return $this;
    }
}