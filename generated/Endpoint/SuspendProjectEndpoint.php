<?php

namespace Vendor\Library\Generated\Endpoint;

class SuspendProjectEndpoint extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $project_id;
    protected $endpoint_id;
    /**
    * Suspend the specified compute endpoint
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain an `endpoint_id` by listing your project's compute endpoints.
    An `endpoint_id` has an `ep-` prefix.
    For information about compute endpoints, see [Manage computes](https://neon.tech/docs/manage/endpoints/).
    
    *
    * @param string $projectId The Neon project ID
    * @param string $endpointId The endpoint ID
    */
    public function __construct(string $projectId, string $endpointId)
    {
        $this->project_id = $projectId;
        $this->endpoint_id = $endpointId;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{project_id}', '{endpoint_id}'], [$this->project_id, $this->endpoint_id], '/projects/{project_id}/endpoints/{endpoint_id}/suspend');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
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
     * @return null|\Vendor\Library\Generated\Model\EndpointOperations|\Vendor\Library\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\Library\Generated\Model\EndpointOperations', 'json');
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