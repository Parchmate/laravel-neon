<?php

namespace Vendor\Library\Generated\Model;

class MemberWithUser extends \ArrayObject
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
     * @var Member
     */
    protected $member;
    /**
     * 
     *
     * @var MemberUserInfo
     */
    protected $user;
    /**
     * 
     *
     * @return Member
     */
    public function getMember(): Member
    {
        return $this->member;
    }
    /**
     * 
     *
     * @param Member $member
     *
     * @return self
     */
    public function setMember(Member $member): self
    {
        $this->initialized['member'] = true;
        $this->member = $member;
        return $this;
    }
    /**
     * 
     *
     * @return MemberUserInfo
     */
    public function getUser(): MemberUserInfo
    {
        return $this->user;
    }
    /**
     * 
     *
     * @param MemberUserInfo $user
     *
     * @return self
     */
    public function setUser(MemberUserInfo $user): self
    {
        $this->initialized['user'] = true;
        $this->user = $user;
        return $this;
    }
}