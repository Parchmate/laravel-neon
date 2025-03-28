<?php

namespace Vendor\Library\Generated\Model;

class PreloadLibraries extends \ArrayObject
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
     * @var bool
     */
    protected $useDefaults;
    /**
     * 
     *
     * @var list<string>
     */
    protected $enabledLibraries;
    /**
     * 
     *
     * @return bool
     */
    public function getUseDefaults(): bool
    {
        return $this->useDefaults;
    }
    /**
     * 
     *
     * @param bool $useDefaults
     *
     * @return self
     */
    public function setUseDefaults(bool $useDefaults): self
    {
        $this->initialized['useDefaults'] = true;
        $this->useDefaults = $useDefaults;
        return $this;
    }
    /**
     * 
     *
     * @return list<string>
     */
    public function getEnabledLibraries(): array
    {
        return $this->enabledLibraries;
    }
    /**
     * 
     *
     * @param list<string> $enabledLibraries
     *
     * @return self
     */
    public function setEnabledLibraries(array $enabledLibraries): self
    {
        $this->initialized['enabledLibraries'] = true;
        $this->enabledLibraries = $enabledLibraries;
        return $this;
    }
}