<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class NeonAuthTransferAuthProviderProjectResponse extends \ArrayObject
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
     * URL for completing the process of ownership transfer
     *
     * @var string
     */
    protected $url;
    /**
     * URL for completing the process of ownership transfer
     *
     * @return string
     */
    public function getUrl(): string
    {
        return $this->url;
    }
    /**
     * URL for completing the process of ownership transfer
     *
     * @param string $url
     *
     * @return self
     */
    public function setUrl(string $url): self
    {
        $this->initialized['url'] = true;
        $this->url = $url;
        return $this;
    }
}