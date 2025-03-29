<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class ConnectionDetails extends \ArrayObject
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
    * The connection URI is defined as specified here: [Connection URIs](https://www.postgresql.org/docs/current/libpq-connect.html#LIBPQ-CONNSTRING-URIS)
    The connection URI can be used to connect to a Postgres database with psql or defined in a DATABASE_URL environment variable.
    When creating a branch from a parent with more than one role or database, the response body does not include a connection URI.
    
    *
    * @var string
    */
    protected $connectionUri;
    /**
     * 
     *
     * @var ConnectionParameters
     */
    protected $connectionParameters;
    /**
    * The connection URI is defined as specified here: [Connection URIs](https://www.postgresql.org/docs/current/libpq-connect.html#LIBPQ-CONNSTRING-URIS)
    The connection URI can be used to connect to a Postgres database with psql or defined in a DATABASE_URL environment variable.
    When creating a branch from a parent with more than one role or database, the response body does not include a connection URI.
    
    *
    * @return string
    */
    public function getConnectionUri(): string
    {
        return $this->connectionUri;
    }
    /**
    * The connection URI is defined as specified here: [Connection URIs](https://www.postgresql.org/docs/current/libpq-connect.html#LIBPQ-CONNSTRING-URIS)
    The connection URI can be used to connect to a Postgres database with psql or defined in a DATABASE_URL environment variable.
    When creating a branch from a parent with more than one role or database, the response body does not include a connection URI.
    
    *
    * @param string $connectionUri
    *
    * @return self
    */
    public function setConnectionUri(string $connectionUri): self
    {
        $this->initialized['connectionUri'] = true;
        $this->connectionUri = $connectionUri;
        return $this;
    }
    /**
     * 
     *
     * @return ConnectionParameters
     */
    public function getConnectionParameters(): ConnectionParameters
    {
        return $this->connectionParameters;
    }
    /**
     * 
     *
     * @param ConnectionParameters $connectionParameters
     *
     * @return self
     */
    public function setConnectionParameters(ConnectionParameters $connectionParameters): self
    {
        $this->initialized['connectionParameters'] = true;
        $this->connectionParameters = $connectionParameters;
        return $this;
    }
}