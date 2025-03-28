<?php

namespace Vendor\Library\Generated\Endpoint;

class GetConsumptionHistoryPerAccount extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    /**
    * Retrieves consumption metrics for Scale, Business, and Enterprise plan accounts. History begins at the time of upgrade.
    
    *
    * @param array $queryParameters {
    *     @var string $from Specify the start `date-time` for the consumption period.
    The `date-time` value is rounded according to the specified `granularity`.
    For example, `2024-03-15T15:30:00Z` for `daily` granularity will be rounded to `2024-03-15T00:00:00Z`.
    The specified `date-time` value must respect the specified granularity:
    - For `hourly`, consumption metrics are limited to the last 168 hours.
    - For `daily`, consumption metrics are limited to the last 60 days.
    - For `monthly`, consumption metrics are limited to the past year.
    
    The consumption history is available starting from `March 1, 2024, at 00:00:00 UTC`.
    
    *     @var string $to Specify the end `date-time` for the consumption period.
    The `date-time` value is rounded according to the specified granularity.
    For example, `2024-03-15T15:30:00Z` for `daily` granularity will be rounded to `2024-03-15T00:00:00Z`.
    The specified `date-time` value must respect the specified granularity:
    - For `hourly`, consumption metrics are limited to the last 168 hours.
    - For `daily`, consumption metrics are limited to the last 60 days.
    - For `monthly`, consumption metrics are limited to the past year.
    
    *     @var string $granularity Specify the granularity of consumption metrics.
    Hourly, daily, and monthly metrics are available for the last 168 hours, 60 days,
    and 1 year, respectively.
    
    *     @var string $org_id Specify the organization for which the consumption metrics should be returned.
    If this parameter is not provided, the endpoint will return the metrics for the
    authenticated user's account.
    
    *     @var bool $include_v1_metrics Include metrics utilized in previous pricing models.
    - **data_storage_bytes_hour**: The sum of the maximum observed storage values for each hour
     for each project, which never decreases.
    
    * }
    */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/consumption_history/account';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['from', 'to', 'granularity', 'org_id', 'include_v1_metrics']);
        $optionsResolver->setRequired(['from', 'to', 'granularity']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('from', ['string']);
        $optionsResolver->addAllowedTypes('to', ['string']);
        $optionsResolver->addAllowedTypes('granularity', ['string']);
        $optionsResolver->addAllowedTypes('org_id', ['string']);
        $optionsResolver->addAllowedTypes('include_v1_metrics', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     * @throws \Vendor\Library\Generated\Exception\GetConsumptionHistoryPerAccountForbiddenException
     * @throws \Vendor\Library\Generated\Exception\GetConsumptionHistoryPerAccountNotFoundException
     * @throws \Vendor\Library\Generated\Exception\GetConsumptionHistoryPerAccountNotAcceptableException
     * @throws \Vendor\Library\Generated\Exception\GetConsumptionHistoryPerAccountTooManyRequestsException
     *
     * @return null|\Vendor\Library\Generated\Model\ConsumptionHistoryPerAccountResponse|\Vendor\Library\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\Library\Generated\Model\ConsumptionHistoryPerAccountResponse', 'json');
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Vendor\Library\Generated\Exception\GetConsumptionHistoryPerAccountForbiddenException($serializer->deserialize($body, 'Vendor\Library\Generated\Model\GeneralError', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Vendor\Library\Generated\Exception\GetConsumptionHistoryPerAccountNotFoundException($serializer->deserialize($body, 'Vendor\Library\Generated\Model\GeneralError', 'json'), $response);
        }
        if (is_null($contentType) === false && (406 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Vendor\Library\Generated\Exception\GetConsumptionHistoryPerAccountNotAcceptableException($serializer->deserialize($body, 'Vendor\Library\Generated\Model\GeneralError', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Vendor\Library\Generated\Exception\GetConsumptionHistoryPerAccountTooManyRequestsException($serializer->deserialize($body, 'Vendor\Library\Generated\Model\GeneralError', 'json'), $response);
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Vendor\Library\Generated\Model\GeneralError', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth', 'CookieAuth', 'TokenCookieAuth'];
    }
}