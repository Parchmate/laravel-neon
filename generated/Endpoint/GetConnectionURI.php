<?php

namespace Vendor\Library\Generated\Endpoint;

class GetConnectionURI extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
    * Retrieves a connection URI for the specified database.
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain the `database_name` by listing the databases for a branch.
    You can obtain a `role_name` by listing the roles for a branch.
    
    *
    * @param string $projectId The Neon project ID
    * @param array $queryParameters {
    *     @var string $branch_id The branch ID. Defaults to your project's default `branch_id` if not specified.
    *     @var string $endpoint_id The endpoint ID. Defaults to the read-write `endpoint_id` associated with the `branch_id` if not specified.
    *     @var string $database_name The database name
    *     @var string $role_name The role name
    *     @var bool $pooled Adds the `-pooler` option to the connection URI when set to `true`, creating a pooled connection URI.
    * }
    */
    public function __construct(string $projectId, array $queryParameters = [])
    {
        $this->project_id = $projectId;
        $this->queryParameters = $queryParameters;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{project_id}'], [$this->project_id], '/projects/{project_id}/connection_uri');
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
        $optionsResolver->setDefined(['branch_id', 'endpoint_id', 'database_name', 'role_name', 'pooled']);
        $optionsResolver->setRequired(['database_name', 'role_name']);
        $optionsResolver->setDefaults([]);
        $optionsResolver->addAllowedTypes('branch_id', ['string']);
        $optionsResolver->addAllowedTypes('endpoint_id', ['string']);
        $optionsResolver->addAllowedTypes('database_name', ['string']);
        $optionsResolver->addAllowedTypes('role_name', ['string']);
        $optionsResolver->addAllowedTypes('pooled', ['bool']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Vendor\Library\Generated\Model\ConnectionURIResponse|\Vendor\Library\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\Library\Generated\Model\ConnectionURIResponse', 'json');
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