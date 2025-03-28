<?php

namespace Vendor\Library\Generated\Model;

class RegionResponse extends \ArrayObject
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
     * The region ID as used in other API endpoints
     *
     * @var string
     */
    protected $regionId;
    /**
     * A short description of the region.
     *
     * @var string
     */
    protected $name;
    /**
     * Whether this region is used by default in new projects.
     *
     * @var bool
     */
    protected $default;
    /**
     * The geographical latitude (approximate) for the region. Empty if unknown.
     *
     * @var string
     */
    protected $geoLat;
    /**
     * The geographical longitude (approximate) for the region. Empty if unknown.
     *
     * @var string
     */
    protected $geoLong;
    /**
     * The region ID as used in other API endpoints
     *
     * @return string
     */
    public function getRegionId(): string
    {
        return $this->regionId;
    }
    /**
     * The region ID as used in other API endpoints
     *
     * @param string $regionId
     *
     * @return self
     */
    public function setRegionId(string $regionId): self
    {
        $this->initialized['regionId'] = true;
        $this->regionId = $regionId;
        return $this;
    }
    /**
     * A short description of the region.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * A short description of the region.
     *
     * @param string $name
     *
     * @return self
     */
    public function setName(string $name): self
    {
        $this->initialized['name'] = true;
        $this->name = $name;
        return $this;
    }
    /**
     * Whether this region is used by default in new projects.
     *
     * @return bool
     */
    public function getDefault(): bool
    {
        return $this->default;
    }
    /**
     * Whether this region is used by default in new projects.
     *
     * @param bool $default
     *
     * @return self
     */
    public function setDefault(bool $default): self
    {
        $this->initialized['default'] = true;
        $this->default = $default;
        return $this;
    }
    /**
     * The geographical latitude (approximate) for the region. Empty if unknown.
     *
     * @return string
     */
    public function getGeoLat(): string
    {
        return $this->geoLat;
    }
    /**
     * The geographical latitude (approximate) for the region. Empty if unknown.
     *
     * @param string $geoLat
     *
     * @return self
     */
    public function setGeoLat(string $geoLat): self
    {
        $this->initialized['geoLat'] = true;
        $this->geoLat = $geoLat;
        return $this;
    }
    /**
     * The geographical longitude (approximate) for the region. Empty if unknown.
     *
     * @return string
     */
    public function getGeoLong(): string
    {
        return $this->geoLong;
    }
    /**
     * The geographical longitude (approximate) for the region. Empty if unknown.
     *
     * @param string $geoLong
     *
     * @return self
     */
    public function setGeoLong(string $geoLong): self
    {
        $this->initialized['geoLong'] = true;
        $this->geoLong = $geoLong;
        return $this;
    }
}