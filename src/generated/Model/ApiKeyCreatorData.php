<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class ApiKeyCreatorData extends \ArrayObject
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
     * ID of the user who created this API key
     *
     * @var string
     */
    protected $id;
    /**
     * The name of the user.
     *
     * @var string
     */
    protected $name;
    /**
     * The URL to the user's avatar image.
     *
     * @var string
     */
    protected $image;
    /**
     * ID of the user who created this API key
     *
     * @return string
     */
    public function getId(): string
    {
        return $this->id;
    }
    /**
     * ID of the user who created this API key
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
     * The name of the user.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The name of the user.
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
     * The URL to the user's avatar image.
     *
     * @return string
     */
    public function getImage(): string
    {
        return $this->image;
    }
    /**
     * The URL to the user's avatar image.
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
}