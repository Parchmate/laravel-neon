<?php

namespace Vendor\Library\Generated\Model;

class StatementData extends \ArrayObject
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
     * @var list<string>
     */
    protected $fields;
    /**
     * 
     *
     * @var list<list<string>>
     */
    protected $rows;
    /**
     * 
     *
     * @var bool
     */
    protected $truncated;
    /**
     * 
     *
     * @return list<string>
     */
    public function getFields(): array
    {
        return $this->fields;
    }
    /**
     * 
     *
     * @param list<string> $fields
     *
     * @return self
     */
    public function setFields(array $fields): self
    {
        $this->initialized['fields'] = true;
        $this->fields = $fields;
        return $this;
    }
    /**
     * 
     *
     * @return list<list<string>>
     */
    public function getRows(): array
    {
        return $this->rows;
    }
    /**
     * 
     *
     * @param list<list<string>> $rows
     *
     * @return self
     */
    public function setRows(array $rows): self
    {
        $this->initialized['rows'] = true;
        $this->rows = $rows;
        return $this;
    }
    /**
     * 
     *
     * @return bool
     */
    public function getTruncated(): bool
    {
        return $this->truncated;
    }
    /**
     * 
     *
     * @param bool $truncated
     *
     * @return self
     */
    public function setTruncated(bool $truncated): self
    {
        $this->initialized['truncated'] = true;
        $this->truncated = $truncated;
        return $this;
    }
}