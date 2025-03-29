<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class PaymentSource extends \ArrayObject
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
     * Type of payment source. E.g. "card".
     *
     * @var string
     */
    protected $type;
    /**
     * 
     *
     * @var PaymentSourceBankCard
     */
    protected $card;
    /**
     * Type of payment source. E.g. "card".
     *
     * @return string
     */
    public function getType(): string
    {
        return $this->type;
    }
    /**
     * Type of payment source. E.g. "card".
     *
     * @param string $type
     *
     * @return self
     */
    public function setType(string $type): self
    {
        $this->initialized['type'] = true;
        $this->type = $type;
        return $this;
    }
    /**
     * 
     *
     * @return PaymentSourceBankCard
     */
    public function getCard(): PaymentSourceBankCard
    {
        return $this->card;
    }
    /**
     * 
     *
     * @param PaymentSourceBankCard $card
     *
     * @return self
     */
    public function setCard(PaymentSourceBankCard $card): self
    {
        $this->initialized['card'] = true;
        $this->card = $card;
        return $this;
    }
}