<?php

namespace Vendor\Library\Generated\Model;

class ProjectsProjectIdBranchesPostBody extends \ArrayObject
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
     * @var list<BranchCreateRequestEndpointOptions>
     */
    protected $endpoints;
    /**
     * 
     *
     * @var BranchCreateRequestBranch
     */
    protected $branch;
    /**
     * Annotation properties.
     *
     * @var array<string, string>
     */
    protected $annotationValue;
    /**
     * 
     *
     * @return list<BranchCreateRequestEndpointOptions>
     */
    public function getEndpoints(): array
    {
        return $this->endpoints;
    }
    /**
     * 
     *
     * @param list<BranchCreateRequestEndpointOptions> $endpoints
     *
     * @return self
     */
    public function setEndpoints(array $endpoints): self
    {
        $this->initialized['endpoints'] = true;
        $this->endpoints = $endpoints;
        return $this;
    }
    /**
     * 
     *
     * @return BranchCreateRequestBranch
     */
    public function getBranch(): BranchCreateRequestBranch
    {
        return $this->branch;
    }
    /**
     * 
     *
     * @param BranchCreateRequestBranch $branch
     *
     * @return self
     */
    public function setBranch(BranchCreateRequestBranch $branch): self
    {
        $this->initialized['branch'] = true;
        $this->branch = $branch;
        return $this;
    }
    /**
     * Annotation properties.
     *
     * @return array<string, string>
     */
    public function getAnnotationValue(): iterable
    {
        return $this->annotationValue;
    }
    /**
     * Annotation properties.
     *
     * @param array<string, string> $annotationValue
     *
     * @return self
     */
    public function setAnnotationValue(iterable $annotationValue): self
    {
        $this->initialized['annotationValue'] = true;
        $this->annotationValue = $annotationValue;
        return $this;
    }
}