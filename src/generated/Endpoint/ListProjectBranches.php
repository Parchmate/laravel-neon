<?php

namespace Parchmate\LaravelNeon\Generated\Endpoint;

class ListProjectBranches extends \Parchmate\LaravelNeon\Generated\Runtime\Client\BaseEndpoint implements \Parchmate\LaravelNeon\Generated\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
    * Retrieves a list of branches for the specified project.
    You can obtain a `project_id` by listing the projects for your Neon account.
    
    Each Neon project has a root branch named `main`.
    A `branch_id` value has a `br-` prefix.
    A project may contain child branches that were branched from `main` or from another branch.
    A parent branch is identified by the `parent_id` value, which is the `id` of the parent branch.
    For related information, see [Manage branches](https://neon.tech/docs/manage/branches/).
    
    *
    * @param string $projectId The Neon project ID
    * @param array $queryParameters {
    *     @var string $search Search by branch `name` or `id`. You can specify partial `name` or `id` values to filter results.
    *     @var string $sort_by Sort the branches by sort_field. If not provided, branches will be sorted by updated_at descending order
    *     @var string $cursor A cursor to use in pagination. A cursor defines your place in the data list. Include `response.pagination.next` in subsequent API calls to fetch next page of the list.
    *     @var string $sort_order Defines the sorting order of entities.
    *     @var int $limit The maximum number of records to be returned in the response
    * }
    */
    public function __construct(string $projectId, array $queryParameters = [])
    {
        $this->project_id = $projectId;
        $this->queryParameters = $queryParameters;
    }
    use \Parchmate\LaravelNeon\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{project_id}'], [$this->project_id], '/projects/{project_id}/branches');
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
        $optionsResolver->setDefined(['search', 'sort_by', 'cursor', 'sort_order', 'limit']);
        $optionsResolver->setRequired([]);
        $optionsResolver->setDefaults(['sort_by' => 'updated_at', 'sort_order' => 'desc']);
        $optionsResolver->addAllowedTypes('search', ['string']);
        $optionsResolver->addAllowedTypes('sort_by', ['string']);
        $optionsResolver->addAllowedTypes('cursor', ['string']);
        $optionsResolver->addAllowedTypes('sort_order', ['string']);
        $optionsResolver->addAllowedTypes('limit', ['int']);
        return $optionsResolver;
    }
    /**
     * {@inheritdoc}
     *
     *
     * @return null|\Parchmate\LaravelNeon\Generated\Model\ProjectsProjectIdBranchesGetResponse200|\Parchmate\LaravelNeon\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Parchmate\LaravelNeon\Generated\Model\ProjectsProjectIdBranchesGetResponse200', 'json');
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