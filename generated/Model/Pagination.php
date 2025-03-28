<?php

namespace Vendor\Library\Generated\Model;

class Pagination extends \ArrayObject
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
    protected $cursor;
    /**
     * 
     *
     * @return string
     */
    public function getCursor(): string
    {
        return $this->cursor;
    }
    /**
     * 
     *
     * @param string $cursor
     *
     * @return self
     */
    public function setCursor(string $cursor): self
    {
        $this->initialized['cursor'] = true;
        $this->cursor = $cursor;
        return $this;
    }
}