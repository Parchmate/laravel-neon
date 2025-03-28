<?php

namespace Vendor\Library\Generated\Endpoint;

class GetProjectBranchSchemaComparison extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $project_id;
    protected $branch_id;
    /**
     * Compares the schema from the specified database with another branch's schema.
     *
     * @param string $projectId The Neon project ID
     * @param string $branchId The branch ID
     * @param array $queryParameters {
     *     @var string $base_branch_id The branch ID to compare the schema with
     *     @var string $db_name Name of the database for which the schema is retrieved
     *     @var string $lsn The Log Sequence Number (LSN) for which the schema is retrieved
     *     @var string $timestamp The point in time for which the schema is retrieved
     *     @var string $base_lsn The Log Sequence Number (LSN) for the base branch schema
     *     @var string $base_timestamp The point in time for the base branch schema
     * }
     */
    public function __construct(string $projectId, string $branchId, array $queryParameters = [])
    {
        $this->project_id = $projectId;
        $this->branch_id = $branchId;
        $this->queryParameters = $queryParameters;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{project_id}', '{branch_id}'], [$this->project_id, $this->branch_id], '/projects/{project_id}/branches/{branch_id}/compare_schema');
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
        $optionsResolver->setDefined(['base_branch_id', 'db_name', 'lsn', 'timestamp', 'base_lsn', 'base_timestamp']);
        $optionsResolver->setRequired(['db_name']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('base_branch_id', ['string']);
        $optionsResolver->addAllowedTypes('db_name', ['string']);
        $optionsResolver->addAllowedTypes('lsn', ['string']);
        $optionsResolver->addAllowedTypes('timestamp', ['string']);
        $optionsResolver->addAllowedTypes('base_lsn', ['string']);
        $optionsResolver->addAllowedTypes('base_timestamp', ['string']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Vendor\Library\Generated\Model\BranchSchemaCompareResponse|\Vendor\Library\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\Library\Generated\Model\BranchSchemaCompareResponse', 'json');
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