<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class ListNeonAuthIntegrationsResponse extends \ArrayObject
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
     * @var list<NeonAuthIntegration>
     */
    protected $data;
    /**
     * 
     *
     * @return list<NeonAuthIntegration>
     */
    public function getData(): array
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param list<NeonAuthIntegration> $data
     *
     * @return self
     */
    public function setData(array $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
}