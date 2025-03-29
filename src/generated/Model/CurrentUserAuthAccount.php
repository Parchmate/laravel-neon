<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class CurrentUserAuthAccount extends \ArrayObject
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
    protected $email;
    /**
     * 
     *
     * @var string
     */
    protected $image;
    /**
     * DEPRECATED. Use `email` field.
     *
     * @deprecated
     *
     * @var string
     */
    protected $login;
    /**
     * 
     *
     * @var string
     */
    protected $name;
    /**
     * Identity provider id from keycloak
     *
     * @var string
     */
    protected $provider;
    /**
     * 
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * 
     *
     * @param string $email
     *
     * @return self
     */
    public function setEmail(string $email): self
    {
        $this->initialized['email'] = true;
        $this->email = $email;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }
    /**
     * 
     *
     * @param string $image
     *
     * @return self
     */
    public function setImage(string $image): self
    {
        $this->initialized['image'] = true;
        $this->image = $image;
        return $this;
    }
    /**
     * DEPRECATED. Use `email` field.
     *
     * @deprecated
     *
     * @return string
     */
    public function getLogin(): string
    {
        return $this->login;
    }
    /**
     * DEPRECATED. Use `email` field.
     *
     * @param string $login
     *
     * @deprecated
     *
     * @return self
     */
    public function setLogin(string $login): self
    {
        $this->initialized['login'] = true;
        $this->login = $login;
        return $this;
    }
    /**
     * 
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * 
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
     * Identity provider id from keycloak
     *
     * @return string
     */
    public function getProvider(): string
    {
        return $this->provider;
    }
    /**
     * Identity provider id from keycloak
     *
     * @param string $provider
     *
     * @return self
     */
    public function setProvider(string $provider): self
    {
        $this->initialized['provider'] = true;
        $this->provider = $provider;
        return $this;
    }
}