<?php

namespace Vendor\Library\Generated\Endpoint;

class CreateOrgApiKey extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $org_id;
    /**
    * Creates an API key for the specified organization.
    The `key_name` is a user-specified name for the key.
    This method returns an `id` and `key`. The `key` is a randomly generated, 64-bit token required to access the Neon API.
    API keys can also be managed in the Neon Console.
    See [Manage API keys](https://neon.tech/docs/manage/api-keys/).
    
    *
    * @param string $orgId The Neon organization ID
    * @param \Vendor\Library\Generated\Model\OrgApiKeyCreateRequest $requestBody 
    */
    public function __construct(string $orgId, \Vendor\Library\Generated\Model\OrgApiKeyCreateRequest $requestBody)
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
        return str_replace(['{org_id}'], [$this->org_id], '/organizations/{org_id}/api_keys');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Vendor\Library\Generated\Model\OrgApiKeyCreateRequest) {
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
     * @return null|\Vendor\Library\Generated\Model\OrgApiKeyCreateResponse|\Vendor\Library\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\Library\Generated\Model\OrgApiKeyCreateResponse', 'json');
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