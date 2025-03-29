<?php

namespace Parchmate\LaravelNeon\Generated\Model;

class BillingAccount extends \ArrayObject
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
     * State of the billing account.
     *
     * @var string
     */
    protected $state;
    /**
     * 
     *
     * @var PaymentSource
     */
    protected $paymentSource;
    /**
    * Type of subscription to Neon Cloud.
    Notice that for users without billing account this will be "UNKNOWN"
    
    *
    * @var string
    */
    protected $subscriptionType;
    /**
     * Indicates whether and how an account makes payments.
     *
     * @var string
     */
    protected $paymentMethod;
    /**
     * The last time the quota was reset. Defaults to the date-time the account is created.
     *
     * @var \DateTime
     */
    protected $quotaResetAtLast;
    /**
     * The full name of the individual or entity that owns the billing account. This name appears on invoices.
     *
     * @var string
     */
    protected $name;
    /**
     * Billing email, to receive emails related to invoices and subscriptions.
     *
     * @var string
     */
    protected $email;
    /**
     * Billing address city.
     *
     * @var string
     */
    protected $addressCity;
    /**
     * Billing address country code defined by ISO 3166-1 alpha-2.
     *
     * @var string
     */
    protected $addressCountry;
    /**
     * Billing address country name.
     *
     * @var string
     */
    protected $addressCountryName;
    /**
     * Billing address line 1.
     *
     * @var string
     */
    protected $addressLine1;
    /**
     * Billing address line 2.
     *
     * @var string
     */
    protected $addressLine2;
    /**
     * Billing address postal code.
     *
     * @var string
     */
    protected $addressPostalCode;
    /**
     * Billing address state or region.
     *
     * @var string
     */
    protected $addressState;
    /**
     * Orb user portal url
     *
     * @var string
     */
    protected $orbPortalUrl;
    /**
     * The tax identification number for the billing account, displayed on invoices.
     *
     * @var string
     */
    protected $taxId;
    /**
     * The type of the tax identification number based on the country.
     *
     * @var string
     */
    protected $taxIdType;
    /**
     * State of the billing account.
     *
     * @return string
     */
    public function getState(): string
    {
        return $this->state;
    }
    /**
     * State of the billing account.
     *
     * @param string $state
     *
     * @return self
     */
    public function setState(string $state): self
    {
        $this->initialized['state'] = true;
        $this->state = $state;
        return $this;
    }
    /**
     * 
     *
     * @return PaymentSource
     */
    public function getPaymentSource(): PaymentSource
    {
        return $this->paymentSource;
    }
    /**
     * 
     *
     * @param PaymentSource $paymentSource
     *
     * @return self
     */
    public function setPaymentSource(PaymentSource $paymentSource): self
    {
        $this->initialized['paymentSource'] = true;
        $this->paymentSource = $paymentSource;
        return $this;
    }
    /**
    * Type of subscription to Neon Cloud.
    Notice that for users without billing account this will be "UNKNOWN"
    
    *
    * @return string
    */
    public function getSubscriptionType(): string
    {
        return $this->subscriptionType;
    }
    /**
    * Type of subscription to Neon Cloud.
    Notice that for users without billing account this will be "UNKNOWN"
    
    *
    * @param string $subscriptionType
    *
    * @return self
    */
    public function setSubscriptionType(string $subscriptionType): self
    {
        $this->initialized['subscriptionType'] = true;
        $this->subscriptionType = $subscriptionType;
        return $this;
    }
    /**
     * Indicates whether and how an account makes payments.
     *
     * @return string
     */
    public function getPaymentMethod(): string
    {
        return $this->paymentMethod;
    }
    /**
     * Indicates whether and how an account makes payments.
     *
     * @param string $paymentMethod
     *
     * @return self
     */
    public function setPaymentMethod(string $paymentMethod): self
    {
        $this->initialized['paymentMethod'] = true;
        $this->paymentMethod = $paymentMethod;
        return $this;
    }
    /**
     * The last time the quota was reset. Defaults to the date-time the account is created.
     *
     * @return \DateTime
     */
    public function getQuotaResetAtLast(): \DateTime
    {
        return $this->quotaResetAtLast;
    }
    /**
     * The last time the quota was reset. Defaults to the date-time the account is created.
     *
     * @param \DateTime $quotaResetAtLast
     *
     * @return self
     */
    public function setQuotaResetAtLast(\DateTime $quotaResetAtLast): self
    {
        $this->initialized['quotaResetAtLast'] = true;
        $this->quotaResetAtLast = $quotaResetAtLast;
        return $this;
    }
    /**
     * The full name of the individual or entity that owns the billing account. This name appears on invoices.
     *
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }
    /**
     * The full name of the individual or entity that owns the billing account. This name appears on invoices.
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
     * Billing email, to receive emails related to invoices and subscriptions.
     *
     * @return string
     */
    public function getEmail(): string
    {
        return $this->email;
    }
    /**
     * Billing email, to receive emails related to invoices and subscriptions.
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
     * Billing address city.
     *
     * @return string
     */
    public function getAddressCity(): string
    {
        return $this->addressCity;
    }
    /**
     * Billing address city.
     *
     * @param string $addressCity
     *
     * @return self
     */
    public function setAddressCity(string $addressCity): self
    {
        $this->initialized['addressCity'] = true;
        $this->addressCity = $addressCity;
        return $this;
    }
    /**
     * Billing address country code defined by ISO 3166-1 alpha-2.
     *
     * @return string
     */
    public function getAddressCountry(): string
    {
        return $this->addressCountry;
    }
    /**
     * Billing address country code defined by ISO 3166-1 alpha-2.
     *
     * @param string $addressCountry
     *
     * @return self
     */
    public function setAddressCountry(string $addressCountry): self
    {
        $this->initialized['addressCountry'] = true;
        $this->addressCountry = $addressCountry;
        return $this;
    }
    /**
     * Billing address country name.
     *
     * @return string
     */
    public function getAddressCountryName(): string
    {
        return $this->addressCountryName;
    }
    /**
     * Billing address country name.
     *
     * @param string $addressCountryName
     *
     * @return self
     */
    public function setAddressCountryName(string $addressCountryName): self
    {
        $this->initialized['addressCountryName'] = true;
        $this->addressCountryName = $addressCountryName;
        return $this;
    }
    /**
     * Billing address line 1.
     *
     * @return string
     */
    public function getAddressLine1(): string
    {
        return $this->addressLine1;
    }
    /**
     * Billing address line 1.
     *
     * @param string $addressLine1
     *
     * @return self
     */
    public function setAddressLine1(string $addressLine1): self
    {
        $this->initialized['addressLine1'] = true;
        $this->addressLine1 = $addressLine1;
        return $this;
    }
    /**
     * Billing address line 2.
     *
     * @return string
     */
    public function getAddressLine2(): string
    {
        return $this->addressLine2;
    }
    /**
     * Billing address line 2.
     *
     * @param string $addressLine2
     *
     * @return self
     */
    public function setAddressLine2(string $addressLine2): self
    {
        $this->initialized['addressLine2'] = true;
        $this->addressLine2 = $addressLine2;
        return $this;
    }
    /**
     * Billing address postal code.
     *
     * @return string
     */
    public function getAddressPostalCode(): string
    {
        return $this->addressPostalCode;
    }
    /**
     * Billing address postal code.
     *
     * @param string $addressPostalCode
     *
     * @return self
     */
    public function setAddressPostalCode(string $addressPostalCode): self
    {
        $this->initialized['addressPostalCode'] = true;
        $this->addressPostalCode = $addressPostalCode;
        return $this;
    }
    /**
     * Billing address state or region.
     *
     * @return string
     */
    public function getAddressState(): string
    {
        return $this->addressState;
    }
    /**
     * Billing address state or region.
     *
     * @param string $addressState
     *
     * @return self
     */
    public function setAddressState(string $addressState): self
    {
        $this->initialized['addressState'] = true;
        $this->addressState = $addressState;
        return $this;
    }
    /**
     * Orb user portal url
     *
     * @return string
     */
    public function getOrbPortalUrl(): string
    {
        return $this->orbPortalUrl;
    }
    /**
     * Orb user portal url
     *
     * @param string $orbPortalUrl
     *
     * @return self
     */
    public function setOrbPortalUrl(string $orbPortalUrl): self
    {
        $this->initialized['orbPortalUrl'] = true;
        $this->orbPortalUrl = $orbPortalUrl;
        return $this;
    }
    /**
     * The tax identification number for the billing account, displayed on invoices.
     *
     * @return string
     */
    public function getTaxId(): string
    {
        return $this->taxId;
    }
    /**
     * The tax identification number for the billing account, displayed on invoices.
     *
     * @param string $taxId
     *
     * @return self
     */
    public function setTaxId(string $taxId): self
    {
        $this->initialized['taxId'] = true;
        $this->taxId = $taxId;
        return $this;
    }
    /**
     * The type of the tax identification number based on the country.
     *
     * @return string
     */
    public function getTaxIdType(): string
    {
        return $this->taxIdType;
    }
    /**
     * The type of the tax identification number based on the country.
     *
     * @param string $taxIdType
     *
     * @return self
     */
    public function setTaxIdType(string $taxIdType): self
    {
        $this->initialized['taxIdType'] = true;
        $this->taxIdType = $taxIdType;
        return $this;
    }
}