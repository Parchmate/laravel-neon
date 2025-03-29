<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class ResponseListOperations extends \ArrayObject
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
     * @var list<Operation>
     */
    protected $operations;
    /**
    * Cursor based pagination is used. The user must pass the cursor as is to the backend.
    For more information about cursor based pagination, see
    https://learn.microsoft.com/en-us/ef/core/querying/pagination#keyset-pagination
    
    *
    * @var Pagination
    */
    protected $pagination;
    /**
     * 
     *
     * @return list<Operation>
     */
    public function getOperations(): array
    {
        return $this->operations;
    }
    /**
     * 
     *
     * @param list<Operation> $operations
     *
     * @return self
     */
    public function setOperations(array $operations): self
    {
        $this->initialized['operations'] = true;
        $this->operations = $operations;
        return $this;
    }
    /**
    * Cursor based pagination is used. The user must pass the cursor as is to the backend.
    For more information about cursor based pagination, see
    https://learn.microsoft.com/en-us/ef/core/querying/pagination#keyset-pagination
    
    *
    * @return Pagination
    */
    public function getPagination(): Pagination
    {
        return $this->pagination;
    }
    /**
    * Cursor based pagination is used. The user must pass the cursor as is to the backend.
    For more information about cursor based pagination, see
    https://learn.microsoft.com/en-us/ef/core/querying/pagination#keyset-pagination
    
    *
    * @param Pagination $pagination
    *
    * @return self
    */
    public function setPagination(Pagination $pagination): self
    {
        $this->initialized['pagination'] = true;
        $this->pagination = $pagination;
        return $this;
    }
}