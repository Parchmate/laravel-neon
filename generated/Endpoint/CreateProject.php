<?php

namespace Vendor\Library\Generated\Endpoint;

class CreateProject extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    /**
    * Creates a Neon project.
    A project is the top-level object in the Neon object hierarchy.
    Plan limits define how many projects you can create.
    For more information, see [Manage projects](https://neon.tech/docs/manage/projects/).
    
    You can specify a region and Postgres version in the request body.
    Neon currently supports PostgreSQL 14, 15, 16, and 17.
    For supported regions and `region_id` values, see [Regions](https://neon.tech/docs/introduction/regions/).
    
    *
    * @param \Vendor\Library\Generated\Model\ProjectCreateRequest $requestBody 
    */
    public function __construct(\Vendor\Library\Generated\Model\ProjectCreateRequest $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/projects';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Vendor\Library\Generated\Model\ProjectCreateRequest) {
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
     * @return null|\Vendor\Library\Generated\Model\ResponseCreatedProject|\Vendor\Library\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\Library\Generated\Model\ResponseCreatedProject', 'json');
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