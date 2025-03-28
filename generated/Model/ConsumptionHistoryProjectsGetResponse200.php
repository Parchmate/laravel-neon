<?php

namespace Vendor\Library\Generated\Model;

class ConsumptionHistoryProjectsGetResponse200 extends \ArrayObject
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
     * @var list<ConsumptionHistoryPerProject>
     */
    protected $projects;
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
     * @return list<ConsumptionHistoryPerProject>
     */
    public function getProjects(): array
    {
        return $this->projects;
    }
    /**
     * 
     *
     * @param list<ConsumptionHistoryPerProject> $projects
     *
     * @return self
     */
    public function setProjects(array $projects): self
    {
        $this->initialized['projects'] = true;
        $this->projects = $projects;
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