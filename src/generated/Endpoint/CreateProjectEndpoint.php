<?php

namespace Parchmate\LaravelNeon\Generated\Endpoint;

class CreateProjectEndpoint extends \Parchmate\LaravelNeon\Generated\Runtime\Client\BaseEndpoint implements \Parchmate\LaravelNeon\Generated\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
    * Creates a compute endpoint for the specified branch.
    An endpoint is a Neon compute instance.
    There is a maximum of one read-write compute endpoint per branch.
    If the specified branch already has a read-write compute endpoint, the operation fails.
    A branch can have multiple read-only compute endpoints.
    
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain `branch_id` by listing the project's branches.
    A `branch_id` has a `br-` prefix.
    For supported regions and `region_id` values, see [Regions](https://neon.tech/docs/introduction/regions/).
    For more information about compute endpoints, see [Manage computes](https://neon.tech/docs/manage/endpoints/).
    
    *
    * @param string $projectId The Neon project ID
    * @param \Parchmate\LaravelNeon\Generated\Model\EndpointCreateRequest $requestBody 
    */
    public function __construct(string $projectId, \Parchmate\LaravelNeon\Generated\Model\EndpointCreateRequest $requestBody)
    {
        $this->project_id = $projectId;
        $this->body = $requestBody;
    }
    use \Parchmate\LaravelNeon\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{project_id}'], [$this->project_id], '/projects/{project_id}/endpoints');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Parchmate\LaravelNeon\Generated\Model\EndpointCreateRequest) {
            return [['Content-Type' => ['application/json']], $serializer->serialize($this->body, 'json')];
        }
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Parchmate\LaravelNeon\Generated\Model\EndpointOperations|\Parchmate\LaravelNeon\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Parchmate\LaravelNeon\Generated\Model\EndpointOperations', 'json');
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