<?php

namespace Parchmate\LaravelNeon\Generated\Endpoint;

class CreateApiKey extends \Parchmate\LaravelNeon\Generated\Runtime\Client\BaseEndpoint implements \Parchmate\LaravelNeon\Generated\Runtime\Client\Endpoint
{
    /**
    * Creates an API key.
    The `key_name` is a user-specified name for the key.
    This method returns an `id` and `key`. The `key` is a randomly generated, 64-bit token required to access the Neon API.
    API keys can also be managed in the Neon Console.
    See [Manage API keys](https://neon.tech/docs/manage/api-keys/).
    
    *
    * @param \Parchmate\LaravelNeon\Generated\Model\ApiKeyCreateRequest $requestBody 
    */
    public function __construct(\Parchmate\LaravelNeon\Generated\Model\ApiKeyCreateRequest $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Parchmate\LaravelNeon\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/api_keys';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Parchmate\LaravelNeon\Generated\Model\ApiKeyCreateRequest) {
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
     * @return null|\Parchmate\LaravelNeon\Generated\Model\ApiKeyCreateResponse|\Parchmate\LaravelNeon\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Parchmate\LaravelNeon\Generated\Model\ApiKeyCreateResponse', 'json');
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