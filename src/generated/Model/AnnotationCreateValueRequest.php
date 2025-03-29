<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class AnnotationCreateValueRequest extends \ArrayObject
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
     * Annotation properties.
     *
     * @var array<string, string>
     */
    protected $annotationValue;
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