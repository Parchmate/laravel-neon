<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class VPCEndpointDetails extends \ArrayObject
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
    * The current state of the VPC endpoint. Possible values are
    `new` (just configured, pending acceptance) or `accepted`
    (VPC connection was accepted by Neon).
    
    *
    * @var string
    */
    protected $state;
    /**
     * The number of projects that are restricted to use this VPC endpoint.
     *
     * @var int
     */
    protected $numRestrictedProjects;
    /**
    * A list of example projects that are restricted to use this VPC endpoint.
    There are at most 3 projects in the list, even if more projects are restricted.
    
    *
    * @var list<string>
    */
    protected $exampleRestrictedProjects;
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
    /**
    * The current state of the VPC endpoint. Possible values are
    `new` (just configured, pending acceptance) or `accepted`
    (VPC connection was accepted by Neon).
    
    *
    * @return string
    */
    public function getState(): string
    {
        return $this->state;
    }
    /**
    * The current state of the VPC endpoint. Possible values are
    `new` (just configured, pending acceptance) or `accepted`
    (VPC connection was accepted by Neon).
    
    *
    * @param string $state
    *
    * @return self
    */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * The number of projects that are restricted to use this VPC endpoint.
     *
     * @return int
     */
    public function getNumRestrictedProjects(): int
    {
        return $this->numRestrictedProjects;
    }
    /**
     * The number of projects that are restricted to use this VPC endpoint.
     *
     * @param int $numRestrictedProjects
     *
     * @return self
     */
    public function setNumRestrictedProjects(int $numRestrictedProjects): self
    {
        $this->initialized['numRestrictedProjects'] = true;
        $this->numRestrictedProjects = $numRestrictedProjects;
        return $this;
    }
    /**
    * A list of example projects that are restricted to use this VPC endpoint.
    There are at most 3 projects in the list, even if more projects are restricted.
    
    *
    * @return list<string>
    */
    public function getExampleRestrictedProjects(): array
    {
        return $this->exampleRestrictedProjects;
    }
    /**
    * A list of example projects that are restricted to use this VPC endpoint.
    There are at most 3 projects in the list, even if more projects are restricted.
    
    *
    * @param list<string> $exampleRestrictedProjects
    *
    * @return self
    */
    public function setExampleRestrictedProjects(array $exampleRestrictedProjects): self
    {
        $this->initialized['exampleRestrictedProjects'] = true;
        $this->exampleRestrictedProjects = $exampleRestrictedProjects;
        return $this;
    }
}