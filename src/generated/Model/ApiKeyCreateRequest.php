<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class ApiKeyCreateRequest extends \ArrayObject
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
     * A user-specified API key name. This value is required when creating an API key.
     *
     * @var string
     */
    protected $keyName;
    /**
     * A user-specified API key name. This value is required when creating an API key.
     *
     * @return string
     */
    public function getKeyName(): string
    {
        return $this->keyName;
    }
    /**
     * A user-specified API key name. This value is required when creating an API key.
     *
     * @param string $keyName
     *
     * @return self
     */
    public function setKeyName(string $keyName): self
    {
        $this->initialized['keyName'] = true;
        $this->keyName = $keyName;
        return $this;
    }
}