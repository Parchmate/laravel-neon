<?php

namespace Vendor\Library\Generated\Model;

class ApiKeyRevokeResponse extends \ArrayObject
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
     * The API key ID
     *
     * @var int
     */
    protected $id;
    /**
     * The user-specified API key name
     *
     * @var string
     */
    protected $name;
    /**
     * A timestamp indicating when the API key was created
     *
     * @var \DateTime
     */
    protected $createdAt;
    /**
     * ID of the user who created this API key
     *
     * @var string
     */
    protected $createdBy;
    /**
     * A timestamp indicating when the API was last used
     *
     * @var \DateTime|null
     */
    protected $lastUsedAt;
    /**
     * The IP address from which the API key was last used
     *
     * @var string
     */
    protected $lastUsedFromAddr;
    /**
     * A `true` or `false` value indicating whether the API key is revoked
     *
     * @var bool
     */
    protected $revoked;
    /**
     * The API key ID
     *
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }
    /**
     * The API key ID
     *
     * @param int $id
     *
     * @return self
     */
    public function setId(int $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * The user-specified API key name
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The user-specified API key name
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
     * A timestamp indicating when the API key was created
     *
     * @return \DateTime
     */
    public function getCreatedAt(): \DateTime
    {
        return $this->createdAt;
    }
    /**
     * A timestamp indicating when the API key was created
     *
     * @param \DateTime $createdAt
     *
     * @return self
     */
    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->initialized['createdAt'] = true;
        $this->createdAt = $createdAt;
        return $this;
    }
    /**
     * ID of the user who created this API key
     *
     * @return string
     */
    public function getCreatedBy(): string
    {
        return $this->createdBy;
    }
    /**
     * ID of the user who created this API key
     *
     * @param string $createdBy
     *
     * @return self
     */
    public function setCreatedBy(string $createdBy): self
    {
        $this->initialized['createdBy'] = true;
        $this->createdBy = $createdBy;
        return $this;
    }
    /**
     * A timestamp indicating when the API was last used
     *
     * @return \DateTime|null
     */
    public function getLastUsedAt(): ?\DateTime
    {
        return $this->lastUsedAt;
    }
    /**
     * A timestamp indicating when the API was last used
     *
     * @param \DateTime|null $lastUsedAt
     *
     * @return self
     */
    public function setLastUsedAt(?\DateTime $lastUsedAt): self
    {
        $this->initialized['lastUsedAt'] = true;
        $this->lastUsedAt = $lastUsedAt;
        return $this;
    }
    /**
     * The IP address from which the API key was last used
     *
     * @return string
     */
    public function getLastUsedFromAddr(): string
    {
        return $this->lastUsedFromAddr;
    }
    /**
     * The IP address from which the API key was last used
     *
     * @param string $lastUsedFromAddr
     *
     * @return self
     */
    public function setLastUsedFromAddr(string $lastUsedFromAddr): self
    {
        $this->initialized['lastUsedFromAddr'] = true;
        $this->lastUsedFromAddr = $lastUsedFromAddr;
        return $this;
    }
    /**
     * A `true` or `false` value indicating whether the API key is revoked
     *
     * @return bool
     */
    public function getRevoked(): bool
    {
        return $this->revoked;
    }
    /**
     * A `true` or `false` value indicating whether the API key is revoked
     *
     * @param bool $revoked
     *
     * @return self
     */
    public function setRevoked(bool $revoked): self
    {
        $this->initialized['revoked'] = true;
        $this->revoked = $revoked;
        return $this;
    }
}