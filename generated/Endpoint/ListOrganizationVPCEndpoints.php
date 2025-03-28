<?php

namespace Vendor\Library\Generated\Endpoint;

class ListOrganizationVPCEndpoints extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $org_id;
    protected $region_id;
    /**
     * Retrieves the list of VPC endpoints for the specified Neon organization.
     *
     * @param string $orgId The Neon organization ID
     * @param string $regionId The Neon region ID
     */
    public function __construct(string $orgId, string $regionId)
    {
        $this->org_id = $orgId;
        $this->region_id = $regionId;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{org_id}', '{region_id}'], [$this->org_id, $this->region_id], '/organizations/{org_id}/vpc/region/{region_id}/vpc_endpoints');
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
     * @return null|\Vendor\Library\Generated\Model\VPCEndpointsResponse|\Vendor\Library\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\Library\Generated\Model\VPCEndpointsResponse', 'json');
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