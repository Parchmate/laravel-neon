<?php

namespace Vendor\Library\Generated\Endpoint;

class CreateOrganizationInvitations extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $org_id;
    /**
    * Creates invitations for a specific organization.
    If the invited user has an existing account, they automatically join as a member.
    If they don't yet have an account, they are invited to create one, after which they become a member.
    Each invited user receives an email notification.
    
    *
    * @param string $orgId The Neon organization ID
    * @param \Vendor\Library\Generated\Model\OrganizationInvitesCreateRequest $requestBody 
    */
    public function __construct(string $orgId, \Vendor\Library\Generated\Model\OrganizationInvitesCreateRequest $requestBody)
    {
        $this->org_id = $orgId;
        $this->body = $requestBody;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{org_id}'], [$this->org_id], '/organizations/{org_id}/invitations');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Vendor\Library\Generated\Model\OrganizationInvitesCreateRequest) {
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
     * @return null|\Vendor\Library\Generated\Model\OrganizationInvitationsResponse|\Vendor\Library\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\Library\Generated\Model\OrganizationInvitationsResponse', 'json');
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