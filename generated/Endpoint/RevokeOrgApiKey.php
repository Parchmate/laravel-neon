<?php

namespace Vendor\Library\Generated\Endpoint;

class RevokeOrgApiKey extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $org_id;
    protected $key_id;
    /**
    * Revokes the specified organization API key.
    An API key that is no longer needed can be revoked.
    This action cannot be reversed.
    You can obtain `key_id` values by listing the API keys for an organization.
    API keys can also be managed in the Neon Console.
    See [Manage API keys](https://neon.tech/docs/manage/api-keys/).
    
    *
    * @param string $orgId The Neon organization ID
    * @param int $keyId The API key ID
    */
    public function __construct(string $orgId, int $keyId)
    {
        $this->org_id = $orgId;
        $this->key_id = $keyId;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{org_id}', '{key_id}'], [$this->org_id, $this->key_id], '/organizations/{org_id}/api_keys/{key_id}');
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
     * @return null|\Vendor\Library\Generated\Model\OrgApiKeyRevokeResponse|\Vendor\Library\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\Library\Generated\Model\OrgApiKeyRevokeResponse', 'json');
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