<?php

namespace Vendor\Library\Generated\Endpoint;

class ListSharedProjects extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    /**
    * Retrieves a list of shared projects for the Neon account.
    A project is the top-level object in the Neon object hierarchy.
    For more information, see [Manage projects](https://neon.tech/docs/manage/projects/).
    
    *
    * @param array $queryParameters {
    *     @var string $cursor Specify the cursor value from the previous response to get the next batch of projects.
    *     @var int $limit Specify a value from 1 to 400 to limit number of projects in the response.
    *     @var string $search Search query by name or id.
    *     @var int $timeout Specify an explicit timeout in milliseconds to limit response delay.
    After timing out, the incomplete list of project data fetched so far will be returned.
    Projects still being fetched when the timeout occurred are listed in the "unavailable" attribute of the response.
    If not specified, an implicit implementation defined timeout is chosen with the same behaviour as above
    
    * }
    */
    public function __construct(array $queryParameters = [])
    {
        $this->queryParameters = $queryParameters;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/projects/shared';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        return [[], null];
    }
    public function getExtraHeaders(): array
    {
        return ['Accept' => ['application/json']];
    }
    protected function getQueryOptionsResolver(): \Symfony\Component\OptionsResolver\OptionsResolver
    {
        $optionsResolver = parent::getQueryOptionsResolver();
        $optionsResolver->setDefined(['cursor', 'limit', 'search', 'timeout']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 10]);
        $optionsResolver->addAllowedTypes('cursor', ['string']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('search', ['string']);
        $optionsResolver->addAllowedTypes('timeout', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Vendor\Library\Generated\Model\ProjectsSharedGetResponse200|\Vendor\Library\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\Library\Generated\Model\ProjectsSharedGetResponse200', 'json');
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