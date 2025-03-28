<?php

namespace Vendor\Library\Generated\Model;

class LimitsUnsatisfiedResponseLimitsItem extends \ArrayObject
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
     * @var string
     */
    protected $name;
    /**
     * 
     *
     * @var string
     */
    protected $expected;
    /**
     * 
     *
     * @var string
     */
    protected $actual;
    /**
     * 
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * 
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getExpected(): string
    {
        return $this->expected;
    }
    /**
     * 
     *
     * @param string $expected
     *
     * @return self
     */
    public function setExpected(string $expected): self
    {
        $this->initialized['expected'] = true;
        $this->expected = $expected;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getActual(): string
    {
        return $this->actual;
    }
    /**
     * 
     *
     * @param string $actual
     *
     * @return self
     */
    public function setActual(string $actual): self
    {
        $this->initialized['actual'] = true;
        $this->actual = $actual;
        return $this;
    }
}