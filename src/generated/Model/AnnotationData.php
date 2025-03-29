<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class AnnotationData extends \ArrayObject
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
     * @var AnnotationObjectData
     */
    protected $object;
    /**
     * Annotation properties.
     *
     * @var array<string, string>
     */
    protected $value;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $updatedAt;
    /**
     * 
     *
     * @return AnnotationObjectData
     */
    public function getObject(): AnnotationObjectData
    {
        return $this->object;
    }
    /**
     * 
     *
     * @param AnnotationObjectData $object
     *
     * @return self
     */
    public function setObject(AnnotationObjectData $object): self
    {
        $this->initialized['object'] = true;
        $this->object = $object;
        return $this;
    }
    /**
     * Annotation properties.
     *
     * @return array<string, string>
     */
    public function getValue(): iterable
    {
        return $this->value;
    }
    /**
     * Annotation properties.
     *
     * @param array<string, string> $value
     *
     * @return self
     */
    public function setValue(iterable $value): self
    {
        $this->initialized['value'] = true;
        $this->value = $value;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * 
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getUpdatedAt(): \DateTime
    {
        return $this->updatedAt;
    }
    /**
     * 
     *
     * @param \DateTime $updatedAt
     *
     * @return self
     */
    public function setUpdatedAt(\DateTime $updatedAt): self
    {
        $this->initialized['updatedAt'] = true;
        $this->updatedAt = $updatedAt;
        return $this;
    }
}