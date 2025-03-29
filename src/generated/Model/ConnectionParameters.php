<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class ConnectionParameters extends \ArrayObject
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
     * Database name
     *
     * @var string
     */
    protected $database;
    /**
     * Password for the role
     *
     * @var string
     */
    protected $password;
    /**
     * Role name
     *
     * @var string
     */
    protected $role;
    /**
     * Hostname
     *
     * @var string
     */
    protected $host;
    /**
     * Pooler hostname
     *
     * @var string
     */
    protected $poolerHost;
    /**
     * Database name
     *
     * @return string
     */
    public function getDatabase(): string
    {
        return $this->database;
    }
    /**
     * Database name
     *
     * @param string $database
     *
     * @return self
     */
    public function setDatabase(string $database): self
    {
        $this->initialized['database'] = true;
        $this->database = $database;
        return $this;
    }
    /**
     * Password for the role
     *
     * @return string
     */
    public function getPassword(): string
    {
        return $this->password;
    }
    /**
     * Password for the role
     *
     * @param string $password
     *
     * @return self
     */
    public function setPassword(string $password): self
    {
        $this->initialized['password'] = true;
        $this->password = $password;
        return $this;
    }
    /**
     * Role name
     *
     * @return string
     */
    public function getRole(): string
    {
        return $this->role;
    }
    /**
     * Role name
     *
     * @param string $role
     *
     * @return self
     */
    public function setRole(string $role): self
    {
        $this->initialized['role'] = true;
        $this->role = $role;
        return $this;
    }
    /**
     * Hostname
     *
     * @return string
     */
    public function getHost(): string
    {
        return $this->host;
    }
    /**
     * Hostname
     *
     * @param string $host
     *
     * @return self
     */
    public function setHost(string $host): self
    {
        $this->initialized['host'] = true;
        $this->host = $host;
        return $this;
    }
    /**
     * Pooler hostname
     *
     * @return string
     */
    public function getPoolerHost(): string
    {
        return $this->poolerHost;
    }
    /**
     * Pooler hostname
     *
     * @param string $poolerHost
     *
     * @return self
     */
    public function setPoolerHost(string $poolerHost): self
    {
        $this->initialized['poolerHost'] = true;
        $this->poolerHost = $poolerHost;
        return $this;
    }
}