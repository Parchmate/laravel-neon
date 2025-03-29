<?php

namespace Parchmate\LaravelNeon\Generated\Endpoint;

class GetConsumptionHistoryPerProject extends \Parchmate\LaravelNeon\Generated\Runtime\Client\BaseEndpoint implements \Parchmate\LaravelNeon\Generated\Runtime\Client\Endpoint
{
    /**
    * Retrieves consumption metrics for Scale, Business, and Enterprise plan projects. History begins at the time of upgrade.
    Issuing a call to this API does not wake a project's compute endpoint.
    
    *
    * @param array $queryParameters {
    *     @var string $cursor Specify the cursor value from the previous response to get the next batch of projects.
    *     @var int $limit Specify a value from 1 to 100 to limit number of projects in the response.
    *     @var array $project_ids Specify a list of project IDs to filter the response.
    If omitted, the response will contain all projects.
    A list of project IDs can be specified as an array of parameter values or as a comma-separated list in a single parameter value.
    - As an array of parameter values: `project_ids=cold-poetry-09157238%20&project_ids=quiet-snow-71788278`
    - As a comma-separated list in a single parameter value: `project_ids=cold-poetry-09157238,quiet-snow-71788278`
    
    *     @var string $from Specify the start `date-time` for the consumption period.
    The `date-time` value is rounded according to the specified `granularity`.
    For example, `2024-03-15T15:30:00Z` for `daily` granularity will be rounded to `2024-03-15T00:00:00Z`.
    The specified `date-time` value must respect the specified `granularity`:
    - For `hourly`, consumption metrics are limited to the last 168 hours.
    - For `daily`, consumption metrics are limited to the last 60 days.
    - For `monthly`, consumption metrics are limited to the last year.
    
    The consumption history is available starting from `March 1, 2024, at 00:00:00 UTC`.
    
    *     @var string $to Specify the end `date-time` for the consumption period.
    The `date-time` value is rounded according to the specified granularity.
    For example, `2024-03-15T15:30:00Z` for `daily` granularity will be rounded to `2024-03-15T00:00:00Z`.
    The specified `date-time` value must respect the specified `granularity`:
    - For `hourly`, consumption metrics are limited to the last 168 hours.
    - For `daily`, consumption metrics are limited to the last 60 days.
    - For `monthly`, consumption metrics are limited to the last year.
    
    *     @var string $granularity Specify the granularity of consumption metrics.
    Hourly, daily, and monthly metrics are available for the last 168 hours, 60 days,
    and 1 year, respectively.
    
    *     @var string $org_id Specify the organization for which the project consumption metrics should be returned.
    If this parameter is not provided, the endpoint will return the metrics for the
    authenticated user's projects.
    
    *     @var bool $include_v1_metrics Include metrics utilized in previous pricing models.
    - **data_storage_bytes_hour**: The sum of the maximum observed storage values for each hour,
     which never decreases.
    
    * }
    */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Parchmate\LaravelNeon\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/consumption_history/projects';
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
        $optionsResolver->setDefined(['cursor', 'limit', 'project_ids', 'from', 'to', 'granularity', 'org_id', 'include_v1_metrics']);
        $optionsResolver->setRequired(['from', 'to', 'granularity']);
        $optionsResolver->setDefaults(['limit' => 10]);
        $optionsResolver->addAllowedTypes('cursor', ['string']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('project_ids', ['array']);
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
     * @throws \Parchmate\LaravelNeon\Generated\Exception\GetConsumptionHistoryPerProjectForbiddenException
     * @throws \Parchmate\LaravelNeon\Generated\Exception\GetConsumptionHistoryPerProjectNotFoundException
     * @throws \Parchmate\LaravelNeon\Generated\Exception\GetConsumptionHistoryPerProjectNotAcceptableException
     * @throws \Parchmate\LaravelNeon\Generated\Exception\GetConsumptionHistoryPerProjectTooManyRequestsException
     *
     * @return null|\Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryProjectsGetResponse200|\Parchmate\LaravelNeon\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Parchmate\LaravelNeon\Generated\Model\ConsumptionHistoryProjectsGetResponse200', 'json');
        }
        if (is_null($contentType) === false && (403 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Parchmate\LaravelNeon\Generated\Exception\GetConsumptionHistoryPerProjectForbiddenException($serializer->deserialize($body, 'Parchmate\LaravelNeon\Generated\Model\GeneralError', 'json'), $response);
        }
        if (is_null($contentType) === false && (404 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Parchmate\LaravelNeon\Generated\Exception\GetConsumptionHistoryPerProjectNotFoundException($serializer->deserialize($body, 'Parchmate\LaravelNeon\Generated\Model\GeneralError', 'json'), $response);
        }
        if (is_null($contentType) === false && (406 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Parchmate\LaravelNeon\Generated\Exception\GetConsumptionHistoryPerProjectNotAcceptableException($serializer->deserialize($body, 'Parchmate\LaravelNeon\Generated\Model\GeneralError', 'json'), $response);
        }
        if (is_null($contentType) === false && (429 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Parchmate\LaravelNeon\Generated\Exception\GetConsumptionHistoryPerProjectTooManyRequestsException($serializer->deserialize($body, 'Parchmate\LaravelNeon\Generated\Model\GeneralError', 'json'), $response);
        }
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Parchmate\LaravelNeon\Generated\Model\GeneralError', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth', 'CookieAuth', 'TokenCookieAuth'];
    }
}