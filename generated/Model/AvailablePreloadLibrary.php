<?php

namespace Vendor\Library\Generated\Model;

class AvailablePreloadLibrary extends \ArrayObject
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
    protected $libraryName;
    /**
     * 
     *
     * @var string
     */
    protected $description;
    /**
     * 
     *
     * @var bool
     */
    protected $isDefault;
    /**
     * 
     *
     * @var bool
     */
    protected $isExperimental;
    /**
     * 
     *
     * @var string
     */
    protected $version;
    /**
     * 
     *
     * @return string
     */
    public function getLibraryName(): string
    {
        return $this->libraryName;
    }
    /**
     * 
     *
     * @param string $libraryName
     *
     * @return self
     */
    public function setLibraryName(string $libraryName): self
    {
        $this->initialized['libraryName'] = true;
        $this->libraryName = $libraryName;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }
    /**
     * 
     *
     * @param string $description
     *
     * @return self
     */
    public function setDescription(string $description): self
    {
        $this->initialized['description'] = true;
        $this->description = $description;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsDefault(): bool
    {
        return $this->isDefault;
    }
    /**
     * 
     *
     * @param bool $isDefault
     *
     * @return self
     */
    public function setIsDefault(bool $isDefault): self
    {
        $this->initialized['isDefault'] = true;
        $this->isDefault = $isDefault;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getIsExperimental(): bool
    {
        return $this->isExperimental;
    }
    /**
     * 
     *
     * @param bool $isExperimental
     *
     * @return self
     */
    public function setIsExperimental(bool $isExperimental): self
    {
        $this->initialized['isExperimental'] = true;
        $this->isExperimental = $isExperimental;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getVersion(): string
    {
        return $this->version;
    }
    /**
     * 
     *
     * @param string $version
     *
     * @return self
     */
    public function setVersion(string $version): self
    {
        $this->initialized['version'] = true;
        $this->version = $version;
        return $this;
    }
}