<?php

namespace Vendor\Library\Generated\Endpoint;

class GetProjectOperation extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $project_id;
    protected $operation_id;
    /**
    * Retrieves details for the specified operation.
    An operation is an action performed on a Neon project resource.
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain a `operation_id` by listing operations for the project.
    
    *
    * @param string $projectId The Neon project ID
    * @param string $operationId The operation ID
    */
    public function __construct(string $projectId, string $operationId)
    {
        $this->project_id = $projectId;
        $this->operation_id = $operationId;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{project_id}', '{operation_id}'], [$this->project_id, $this->operation_id], '/projects/{project_id}/operations/{operation_id}');
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
     * @return null|\Vendor\Library\Generated\Model\OperationResponse|\Vendor\Library\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\Library\Generated\Model\OperationResponse', 'json');
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