<?php

namespace Vendor\Library\Generated\Model;

class StatementResult extends \ArrayObject
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
     * @var StatementData
     */
    protected $data;
    /**
     * 
     *
     * @var string
     */
    protected $error;
    /**
     * 
     *
     * @var list<ExplainData>
     */
    protected $explainData;
    /**
     * 
     *
     * @var string
     */
    protected $query;
    /**
     * 
     *
     * @return StatementData
     */
    public function getData(): StatementData
    {
        return $this->data;
    }
    /**
     * 
     *
     * @param StatementData $data
     *
     * @return self
     */
    public function setData(StatementData $data): self
    {
        $this->initialized['data'] = true;
        $this->data = $data;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getError(): string
    {
        return $this->error;
    }
    /**
     * 
     *
     * @param string $error
     *
     * @return self
     */
    public function setError(string $error): self
    {
        $this->initialized['error'] = true;
        $this->error = $error;
        return $this;
    }
    /**
     * 
     *
     * @return list<ExplainData>
     */
    public function getExplainData(): array
    {
        return $this->explainData;
    }
    /**
     * 
     *
     * @param list<ExplainData> $explainData
     *
     * @return self
     */
    public function setExplainData(array $explainData): self
    {
        $this->initialized['explainData'] = true;
        $this->explainData = $explainData;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getQuery(): string
    {
        return $this->query;
    }
    /**
     * 
     *
     * @param string $query
     *
     * @return self
     */
    public function setQuery(string $query): self
    {
        $this->initialized['query'] = true;
        $this->query = $query;
        return $this;
    }
}