<?php

namespace Vendor\Library\Generated\Model;

class CursorPagination extends \ArrayObject
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
    protected $next;
    /**
     * 
     *
     * @var string
     */
    protected $sortBy;
    /**
     * 
     *
     * @var string
     */
    protected $sortOrder;
    /**
     * 
     *
     * @return string
     */
    public function getNext(): string
    {
        return $this->next;
    }
    /**
     * 
     *
     * @param string $next
     *
     * @return self
     */
    public function setNext(string $next): self
    {
        $this->initialized['next'] = true;
        $this->next = $next;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSortBy(): string
    {
        return $this->sortBy;
    }
    /**
     * 
     *
     * @param string $sortBy
     *
     * @return self
     */
    public function setSortBy(string $sortBy): self
    {
        $this->initialized['sortBy'] = true;
        $this->sortBy = $sortBy;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getSortOrder(): string
    {
        return $this->sortOrder;
    }
    /**
     * 
     *
     * @param string $sortOrder
     *
     * @return self
     */
    public function setSortOrder(string $sortOrder): self
    {
        $this->initialized['sortOrder'] = true;
        $this->sortOrder = $sortOrder;
        return $this;
    }
}