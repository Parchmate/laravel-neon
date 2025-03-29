<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class ProjectPermission extends \ArrayObject
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
     * @var string
     */
    protected $id;
    /**
     * 
     *
     * @var string
     */
    protected $grantedToEmail;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $grantedAt;
    /**
     * 
     *
     * @var \DateTime
     */
    protected $revokedAt;
    /**
     * 
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * 
     *
     * @param string $id
     *
     * @return self
     */
    public function setId(string $id): self
    {
        $this->initialized['id'] = true;
        $this->id = $id;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getGrantedToEmail(): string
    {
        return $this->grantedToEmail;
    }
    /**
     * 
     *
     * @param string $grantedToEmail
     *
     * @return self
     */
    public function setGrantedToEmail(string $grantedToEmail): self
    {
        $this->initialized['grantedToEmail'] = true;
        $this->grantedToEmail = $grantedToEmail;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getGrantedAt(): \DateTime
    {
        return $this->grantedAt;
    }
    /**
     * 
     *
     * @param \DateTime $grantedAt
     *
     * @return self
     */
    public function setGrantedAt(\DateTime $grantedAt): self
    {
        $this->initialized['grantedAt'] = true;
        $this->grantedAt = $grantedAt;
        return $this;
    }
    /**
     * 
     *
     * @return \DateTime
     */
    public function getRevokedAt(): \DateTime
    {
        return $this->revokedAt;
    }
    /**
     * 
     *
     * @param \DateTime $revokedAt
     *
     * @return self
     */
    public function setRevokedAt(\DateTime $revokedAt): self
    {
        $this->initialized['revokedAt'] = true;
        $this->revokedAt = $revokedAt;
        return $this;
    }
}