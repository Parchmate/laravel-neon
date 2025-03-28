<?php

namespace Vendor\Library\Generated\Endpoint;

class DeleteProjectVPCEndpoint extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $project_id;
    protected $vpc_endpoint_id;
    /**
     * Removes the specified VPC endpoint restriction from a Neon project.
     *
     * @param string $projectId The Neon project ID
     * @param string $vpcEndpointId The VPC endpoint ID
     */
    public function __construct(string $projectId, string $vpcEndpointId)
    {
        $this->project_id = $projectId;
        $this->vpc_endpoint_id = $vpcEndpointId;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{project_id}', '{vpc_endpoint_id}'], [$this->project_id, $this->vpc_endpoint_id], '/projects/{project_id}/vpc_endpoints/{vpc_endpoint_id}');
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
     * @return null|\Vendor\Library\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
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