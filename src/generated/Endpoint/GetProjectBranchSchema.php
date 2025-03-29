<?php

namespace Parchmate\LaravelNeon\Generated\Endpoint;

class GetProjectBranchSchema extends \Parchmate\LaravelNeon\Generated\Runtime\Client\BaseEndpoint implements \Parchmate\LaravelNeon\Generated\Runtime\Client\Endpoint
{
    protected $project_id;
    protected $branch_id;
    /**
     * Retrieves the schema from the specified database. The `lsn` and `timestamp` values cannot be specified at the same time. If both are omitted, the database schema is retrieved from database's head.
     *
     * @param string $projectId The Neon project ID
     * @param string $branchId The branch ID
     * @param array $queryParameters {
     *     @var string $db_name Name of the database for which the schema is retrieved
     *     @var string $lsn The Log Sequence Number (LSN) for which the schema is retrieved
     *     @var string $timestamp The point in time for which the schema is retrieved
     * }
     */
    public function __construct(string $projectId, string $branchId, array $queryParameters = [])
    {
        $this->project_id = $projectId;
        $this->branch_id = $branchId;
        $this->queryParameters = $queryParameters;
    }
    use \Parchmate\LaravelNeon\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{project_id}', '{branch_id}'], [$this->project_id, $this->branch_id], '/projects/{project_id}/branches/{branch_id}/schema');
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
        $optionsResolver->setDefined(['db_name', 'lsn', 'timestamp']);
        $optionsResolver->setRequired(['db_name']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('db_name', ['string']);
        $optionsResolver->addAllowedTypes('lsn', ['string']);
        $optionsResolver->addAllowedTypes('timestamp', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Parchmate\LaravelNeon\Generated\Model\BranchSchemaResponse|\Parchmate\LaravelNeon\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Parchmate\LaravelNeon\Generated\Model\BranchSchemaResponse', 'json');
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