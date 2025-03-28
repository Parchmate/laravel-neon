<?php

namespace Vendor\Library\Generated\Model;

class AnnotationResponse extends \ArrayObject
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
     * @var AnnotationData
     */
    protected $annotation;
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