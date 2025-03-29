<?php

namespace Parchmate\LaravelNeon\Generated\Endpoint;

class AssignProjectVPCEndpoint extends \Parchmate\LaravelNeon\Generated\Runtime\Client\BaseEndpoint implements \Parchmate\LaravelNeon\Generated\Runtime\Client\Endpoint
{
    protected $project_id;
    protected $vpc_endpoint_id;
    /**
    * Sets or updates a VPC endpoint restriction for a Neon project.
    When a VPC endpoint restriction is set, the project only accepts connections
    from the specified VPC.
    A VPC endpoint can be set as a restriction only after it is assigned to the
    parent organization of the Neon project.
    
    *
    * @param string $projectId The Neon project ID
    * @param string $vpcEndpointId The VPC endpoint ID
    * @param \Parchmate\LaravelNeon\Generated\Model\VPCEndpointAssignment $requestBody 
    */
    public function __construct(string $projectId, string $vpcEndpointId, \Parchmate\LaravelNeon\Generated\Model\VPCEndpointAssignment $requestBody)
    {
        $this->project_id = $projectId;
        $this->vpc_endpoint_id = $vpcEndpointId;
        $this->body = $requestBody;
    }
    use \Parchmate\LaravelNeon\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{project_id}', '{vpc_endpoint_id}'], [$this->project_id, $this->vpc_endpoint_id], '/projects/{project_id}/vpc_endpoints/{vpc_endpoint_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Parchmate\LaravelNeon\Generated\Model\VPCEndpointAssignment) {
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
     * @return null|\Parchmate\LaravelNeon\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (200 === $status) {
            return null;
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