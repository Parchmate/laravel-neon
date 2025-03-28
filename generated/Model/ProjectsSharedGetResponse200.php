<?php

namespace Vendor\Library\Generated\Model;

class ProjectsSharedGetResponse200 extends \ArrayObject
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
     * @var list<ProjectListItem>
     */
    protected $projects;
    /**
    * A list of project IDs indicating which projects are known to exist, but whose details could not
    be fetched within the requested (or implicit) time limit
    
    *
    * @var list<string>
    */
    protected $unavailableProjectIds;
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
     * @return list<ProjectListItem>
     */
    public function getProjects(): array
    {
        return $this->projects;
    }
    /**
     * 
     *
     * @param list<ProjectListItem> $projects
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
    * A list of project IDs indicating which projects are known to exist, but whose details could not
    be fetched within the requested (or implicit) time limit
    
    *
    * @return list<string>
    */
    public function getUnavailableProjectIds(): array
    {
        return $this->unavailableProjectIds;
    }
    /**
    * A list of project IDs indicating which projects are known to exist, but whose details could not
    be fetched within the requested (or implicit) time limit
    
    *
    * @param list<string> $unavailableProjectIds
    *
    * @return self
    */
    public function setUnavailableProjectIds(array $unavailableProjectIds): self
    {
        $this->initialized['unavailableProjectIds'] = true;
        $this->unavailableProjectIds = $unavailableProjectIds;
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