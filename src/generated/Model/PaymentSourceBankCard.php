<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class PaymentSourceBankCard extends \ArrayObject
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
     * Last 4 digits of the card.
     *
     * @var string
     */
    protected $last4;
    /**
     * Brand of credit card.
     *
     * @var string
     */
    protected $brand;
    /**
     * Credit card expiration month
     *
     * @var int
     */
    protected $expMonth;
    /**
     * Credit card expiration year
     *
     * @var int
     */
    protected $expYear;
    /**
     * Last 4 digits of the card.
     *
     * @return string
     */
    public function getLast4(): string
    {
        return $this->last4;
    }
    /**
     * Last 4 digits of the card.
     *
     * @param string $last4
     *
     * @return self
     */
    public function setLast4(string $last4): self
    {
        $this->initialized['last4'] = true;
        $this->last4 = $last4;
        return $this;
    }
    /**
     * Brand of credit card.
     *
     * @return string
     */
    public function getBrand(): string
    {
        return $this->brand;
    }
    /**
     * Brand of credit card.
     *
     * @param string $brand
     *
     * @return self
     */
    public function setBrand(string $brand): self
    {
        $this->initialized['brand'] = true;
        $this->brand = $brand;
        return $this;
    }
    /**
     * Credit card expiration month
     *
     * @return int
     */
    public function getExpMonth(): int
    {
        return $this->expMonth;
    }
    /**
     * Credit card expiration month
     *
     * @param int $expMonth
     *
     * @return self
     */
    public function setExpMonth(int $expMonth): self
    {
        $this->initialized['expMonth'] = true;
        $this->expMonth = $expMonth;
        return $this;
    }
    /**
     * Credit card expiration year
     *
     * @return int
     */
    public function getExpYear(): int
    {
        return $this->expYear;
    }
    /**
     * Credit card expiration year
     *
     * @param int $expYear
     *
     * @return self
     */
    public function setExpYear(int $expYear): self
    {
        $this->initialized['expYear'] = true;
        $this->expYear = $expYear;
        return $this;
    }
}