<?php

namespace Parchmate\LaravelNeon\Generated\Endpoint;

class ListProjects extends \Parchmate\LaravelNeon\Generated\Runtime\Client\BaseEndpoint implements \Parchmate\LaravelNeon\Generated\Runtime\Client\Endpoint
{
    /**
    * Retrieves a list of projects for the Neon account.
    A project is the top-level object in the Neon object hierarchy.
    For more information, see [Manage projects](https://neon.tech/docs/manage/projects/).
    
    *
    * @param array $queryParameters {
    *     @var string $cursor Specify the cursor value from the previous response to retrieve the next batch of projects.
    *     @var int $limit Specify a value from 1 to 400 to limit number of projects in the response.
    *     @var string $search Search by project `name` or `id`. You can specify partial `name` or `id` values to filter results.
    *     @var string $org_id Search for projects by `org_id`.
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
    use \Parchmate\LaravelNeon\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return '/projects';
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
        $optionsResolver->setDefined(['cursor', 'limit', 'search', 'org_id', 'timeout']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['limit' => 10]);
        $optionsResolver->addAllowedTypes('cursor', ['string']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        $optionsResolver->addAllowedTypes('search', ['string']);
        $optionsResolver->addAllowedTypes('org_id', ['string']);
        $optionsResolver->addAllowedTypes('timeout', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Parchmate\LaravelNeon\Generated\Model\ProjectsGetResponse200|\Parchmate\LaravelNeon\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Parchmate\LaravelNeon\Generated\Model\ProjectsGetResponse200', 'json');
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