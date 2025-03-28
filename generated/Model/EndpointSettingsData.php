<?php

namespace Vendor\Library\Generated\Model;

class EndpointSettingsData extends \ArrayObject
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
     * A raw representation of Postgres settings
     *
     * @var array<string, string>
     */
    protected $pgSettings;
    /**
     * A raw representation of PgBouncer settings
     *
     * @var array<string, string>
     */
    protected $pgbouncerSettings;
    /**
     * A raw representation of Postgres settings
     *
     * @return array<string, string>
     */
    public function getPgSettings(): iterable
    {
        return $this->pgSettings;
    }
    /**
     * A raw representation of Postgres settings
     *
     * @param array<string, string> $pgSettings
     *
     * @return self
     */
    public function setPgSettings(iterable $pgSettings): self
    {
        $this->initialized['pgSettings'] = true;
        $this->pgSettings = $pgSettings;
        return $this;
    }
    /**
     * A raw representation of PgBouncer settings
     *
     * @return array<string, string>
     */
    public function getPgbouncerSettings(): iterable
    {
        return $this->pgbouncerSettings;
    }
    /**
     * A raw representation of PgBouncer settings
     *
     * @param array<string, string> $pgbouncerSettings
     *
     * @return self
     */
    public function setPgbouncerSettings(iterable $pgbouncerSettings): self
    {
        $this->initialized['pgbouncerSettings'] = true;
        $this->pgbouncerSettings = $pgbouncerSettings;
        return $this;
    }
}