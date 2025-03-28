<?php

namespace Vendor\Library\Generated\Endpoint;

class GetOrganizationVPCEndpointDetails extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $org_id;
    protected $region_id;
    protected $vpc_endpoint_id;
    /**
    * Retrieves the current state and configuration details of a specified VPC endpoint.
    
    *
    * @param string $orgId The Neon organization ID
    * @param string $regionId The Neon region ID.
    Azure regions are currently not supported.
    
    * @param string $vpcEndpointId The VPC endpoint ID
    */
    public function __construct(string $orgId, string $regionId, string $vpcEndpointId)
    {
        $this->org_id = $orgId;
        $this->region_id = $regionId;
        $this->vpc_endpoint_id = $vpcEndpointId;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{org_id}', '{region_id}', '{vpc_endpoint_id}'], [$this->org_id, $this->region_id, $this->vpc_endpoint_id], '/organizations/{org_id}/vpc/region/{region_id}/vpc_endpoints/{vpc_endpoint_id}');
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
     * @return null|\Vendor\Library\Generated\Model\VPCEndpointDetails|\Vendor\Library\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\Library\Generated\Model\VPCEndpointDetails', 'json');
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