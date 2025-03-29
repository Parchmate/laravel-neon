<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class AvailablePreloadLibraries extends \ArrayObject
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
     * @var list<AvailablePreloadLibrary>
     */
    protected $libraries;
    /**
     * 
     *
     * @return list<AvailablePreloadLibrary>
     */
    public function getLibraries(): array
    {
        return $this->libraries;
    }
    /**
     * 
     *
     * @param list<AvailablePreloadLibrary> $libraries
     *
     * @return self
     */
    public function setLibraries(array $libraries): self
    {
        $this->initialized['libraries'] = true;
        $this->libraries = $libraries;
        return $this;
    }
}