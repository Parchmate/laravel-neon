<?php

namespace Vendor\Library\Generated\Endpoint;

class AssignOrganizationVPCEndpoint extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $org_id;
    protected $region_id;
    protected $vpc_endpoint_id;
    /**
    * Assigns a VPC endpoint to a Neon organization or updates its existing assignment.
    
    *
    * @param string $orgId The Neon organization ID
    * @param string $regionId The Neon region ID.
    Azure regions are currently not supported.
    
    * @param string $vpcEndpointId The VPC endpoint ID
    * @param \Vendor\Library\Generated\Model\VPCEndpointAssignment $requestBody 
    */
    public function __construct(string $orgId, string $regionId, string $vpcEndpointId, \Vendor\Library\Generated\Model\VPCEndpointAssignment $requestBody)
    {
        $this->org_id = $orgId;
        $this->region_id = $regionId;
        $this->vpc_endpoint_id = $vpcEndpointId;
        $this->body = $requestBody;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{org_id}', '{region_id}', '{vpc_endpoint_id}'], [$this->org_id, $this->region_id, $this->vpc_endpoint_id], '/organizations/{org_id}/vpc/region/{region_id}/vpc_endpoints/{vpc_endpoint_id}');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Vendor\Library\Generated\Model\VPCEndpointAssignment) {
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