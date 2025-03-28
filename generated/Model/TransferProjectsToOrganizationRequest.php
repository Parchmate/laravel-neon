<?php

namespace Vendor\Library\Generated\Model;

class TransferProjectsToOrganizationRequest extends \ArrayObject
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
     * The destination organization identifier
     *
     * @var string
     */
    protected $destinationOrgId;
    /**
     * The list of projects ids to transfer. Maximum of 400 project ids
     *
     * @var list<string>
     */
    protected $projectIds;
    /**
     * The destination organization identifier
     *
     * @return string
     */
    public function getDestinationOrgId(): string
    {
        return $this->destinationOrgId;
    }
    /**
     * The destination organization identifier
     *
     * @param string $destinationOrgId
     *
     * @return self
     */
    public function setDestinationOrgId(string $destinationOrgId): self
    {
        $this->initialized['destinationOrgId'] = true;
        $this->destinationOrgId = $destinationOrgId;
        return $this;
    }
    /**
     * The list of projects ids to transfer. Maximum of 400 project ids
     *
     * @return list<string>
     */
    public function getProjectIds(): array
    {
        return $this->projectIds;
    }
    /**
     * The list of projects ids to transfer. Maximum of 400 project ids
     *
     * @param list<string> $projectIds
     *
     * @return self
     */
    public function setProjectIds(array $projectIds): self
    {
        $this->initialized['projectIds'] = true;
        $this->projectIds = $projectIds;
        return $this;
    }
}