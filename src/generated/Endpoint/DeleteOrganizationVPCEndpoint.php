<?php

namespace Parchmate\LaravelNeon\Generated\Endpoint;

class DeleteOrganizationVPCEndpoint extends \Parchmate\LaravelNeon\Generated\Runtime\Client\BaseEndpoint implements \Parchmate\LaravelNeon\Generated\Runtime\Client\Endpoint
{
    protected $org_id;
    protected $region_id;
    protected $vpc_endpoint_id;
    /**
    * Deletes the VPC endpoint from the specified Neon organization.
    If you delete a VPC endpoint from a Neon organization, that VPC endpoint cannot
    be added back to the Neon organization.
    
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
    use \Parchmate\LaravelNeon\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
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