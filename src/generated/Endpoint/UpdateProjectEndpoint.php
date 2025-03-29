<?php

namespace Parchmate\LaravelNeon\Generated\Endpoint;

class UpdateProjectEndpoint extends \Parchmate\LaravelNeon\Generated\Runtime\Client\BaseEndpoint implements \Parchmate\LaravelNeon\Generated\Runtime\Client\Endpoint
{
    protected $project_id;
    protected $endpoint_id;
    /**
    * Updates the specified compute endpoint.
    
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain an `endpoint_id` and `branch_id` by listing your project's compute endpoints.
    An `endpoint_id` has an `ep-` prefix. A `branch_id` has a `br-` prefix.
    For more information about compute endpoints, see [Manage computes](https://neon.tech/docs/manage/endpoints/).
    
    If the returned list of operations is not empty, the compute endpoint is not ready to use.
    The client must wait for the last operation to finish before using the compute endpoint.
    If the compute endpoint was idle before the update, it becomes active for a short period of time,
    and the control plane suspends it again after the update.
    
    *
    * @param string $projectId The Neon project ID
    * @param string $endpointId The endpoint ID
    * @param \Parchmate\LaravelNeon\Generated\Model\EndpointUpdateRequest $requestBody 
    */
    public function __construct(string $projectId, string $endpointId, \Parchmate\LaravelNeon\Generated\Model\EndpointUpdateRequest $requestBody)
    {
        $this->project_id = $projectId;
        $this->endpoint_id = $endpointId;
        $this->body = $requestBody;
    }
    use \Parchmate\LaravelNeon\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'PATCH';
    }
    public function getUri(): string
    {
        return str_replace(['{project_id}', '{endpoint_id}'], [$this->project_id, $this->endpoint_id], '/projects/{project_id}/endpoints/{endpoint_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Parchmate\LaravelNeon\Generated\Model\EndpointUpdateRequest) {
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
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
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