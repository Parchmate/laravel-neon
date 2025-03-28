<?php

namespace Vendor\Library\Generated\Endpoint;

class TransferProjectsFromOrgToOrg extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $source_org_id;
    /**
     * Transfers selected projects, identified by their IDs, from your organization to another specified organization.
     *
     * @param string $sourceOrgId The Neon organization ID (source org, which currently owns the project)
     * @param \Vendor\Library\Generated\Model\TransferProjectsToOrganizationRequest $requestBody 
     */
    public function __construct(string $sourceOrgId, \Vendor\Library\Generated\Model\TransferProjectsToOrganizationRequest $requestBody)
    {
        $this->source_org_id = $sourceOrgId;
        $this->body = $requestBody;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{source_org_id}'], [$this->source_org_id], '/organizations/{source_org_id}/projects/transfer');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Vendor\Library\Generated\Model\TransferProjectsToOrganizationRequest) {
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
     * @throws \Vendor\Library\Generated\Exception\TransferProjectsFromOrgToOrgNotAcceptableException
     * @throws \Vendor\Library\Generated\Exception\TransferProjectsFromOrgToOrgUnprocessableEntityException
     *
     * @return null|\Vendor\Library\Generated\Model\EmptyResponse|\Vendor\Library\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\Library\Generated\Model\EmptyResponse', 'json');
        }
        if (is_null($contentType) === false && (406 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Vendor\Library\Generated\Exception\TransferProjectsFromOrgToOrgNotAcceptableException($serializer->deserialize($body, 'Vendor\Library\Generated\Model\LimitsUnsatisfiedResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Vendor\Library\Generated\Exception\TransferProjectsFromOrgToOrgUnprocessableEntityException($serializer->deserialize($body, 'Vendor\Library\Generated\Model\ProjectsWithIntegrationResponse', 'json'), $response);
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