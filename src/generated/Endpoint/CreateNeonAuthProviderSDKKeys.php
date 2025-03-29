<?php

namespace Parchmate\LaravelNeon\Generated\Endpoint;

class CreateNeonAuthProviderSDKKeys extends \Parchmate\LaravelNeon\Generated\Runtime\Client\BaseEndpoint implements \Parchmate\LaravelNeon\Generated\Runtime\Client\Endpoint
{
    /**
    * Generates SDK or API Keys for the auth provider. These might be called different things depending
    on the auth provider you're using, but are generally used for setting up the frontend and backend SDKs.
    
    *
    * @param \Parchmate\LaravelNeon\Generated\Model\NeonAuthCreateAuthProviderSDKKeysRequest $requestBody 
    */
    public function __construct(\Parchmate\LaravelNeon\Generated\Model\NeonAuthCreateAuthProviderSDKKeysRequest $requestBody)
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
        return '/projects/auth/keys';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Parchmate\LaravelNeon\Generated\Model\NeonAuthCreateAuthProviderSDKKeysRequest) {
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
     * @return null|\Parchmate\LaravelNeon\Generated\Model\NeonAuthCreateIntegrationResponse|\Parchmate\LaravelNeon\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Parchmate\LaravelNeon\Generated\Model\NeonAuthCreateIntegrationResponse', 'json');
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