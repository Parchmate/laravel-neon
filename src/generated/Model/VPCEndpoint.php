<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class VPCEndpoint extends \ArrayObject
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
     * The VPC endpoint ID
     *
     * @var string
     */
    protected $vpcEndpointId;
    /**
     * A descriptive label for the VPC endpoint
     *
     * @var string
     */
    protected $label;
    /**
     * The VPC endpoint ID
     *
     * @return string
     */
    public function getVpcEndpointId(): string
    {
        return $this->vpcEndpointId;
    }
    /**
     * The VPC endpoint ID
     *
     * @param string $vpcEndpointId
     *
     * @return self
     */
    public function setVpcEndpointId(string $vpcEndpointId): self
    {
        $this->initialized['vpcEndpointId'] = true;
        $this->vpcEndpointId = $vpcEndpointId;
        return $this;
    }
    /**
     * A descriptive label for the VPC endpoint
     *
     * @return string
     */
    public function getLabel(): string
    {
        return $this->label;
    }
    /**
     * A descriptive label for the VPC endpoint
     *
     * @param string $label
     *
     * @return self
     */
    public function setLabel(string $label): self
    {
        $this->initialized['label'] = true;
        $this->label = $label;
        return $this;
    }
}