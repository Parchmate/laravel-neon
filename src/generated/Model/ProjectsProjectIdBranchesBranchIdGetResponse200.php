<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class ProjectsProjectIdBranchesBranchIdGetResponse200 extends \ArrayObject
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
     * @var Branch
     */
    protected $branch;
    /**
     * 
     *
     * @var AnnotationData
     */
    protected $annotation;
    /**
     * 
     *
     * @return Branch
     */
    public function getBranch(): Branch
    {
        return $this->branch;
    }
    /**
     * 
     *
     * @param Branch $branch
     *
     * @return self
     */
    public function setBranch(Branch $branch): self
    {
        $this->initialized['branch'] = true;
        $this->branch = $branch;
        return $this;
    }
    /**
     * 
     *
     * @return AnnotationData
     */
    public function getAnnotation(): AnnotationData
    {
        return $this->annotation;
    }
    /**
     * 
     *
     * @param AnnotationData $annotation
     *
     * @return self
     */
    public function setAnnotation(AnnotationData $annotation): self
    {
        $this->initialized['annotation'] = true;
        $this->annotation = $annotation;
        return $this;
    }
}