<?php

namespace Vendor\Library\Generated\Model;

class AnnotationsMapResponse extends \ArrayObject
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
     * @var array<string, AnnotationData>
     */
    protected $annotations;
    /**
     * 
     *
     * @return array<string, AnnotationData>
     */
    public function getAnnotations(): iterable
    {
        return $this->annotations;
    }
    /**
     * 
     *
     * @param array<string, AnnotationData> $annotations
     *
     * @return self
     */
    public function setAnnotations(iterable $annotations): self
    {
        $this->initialized['annotations'] = true;
        $this->annotations = $annotations;
        return $this;
    }
}