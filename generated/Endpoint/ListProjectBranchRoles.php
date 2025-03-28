<?php

namespace Vendor\Library\Generated\Endpoint;

class ListProjectBranchRoles extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $project_id;
    protected $branch_id;
    /**
    * Retrieves a list of Postgres roles from the specified branch.
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain the `branch_id` by listing the project's branches.
    For related information, see [Manage roles](https://neon.tech/docs/manage/roles/).
    
    *
    * @param string $projectId The Neon project ID
    * @param string $branchId The branch ID
    */
    public function __construct(string $projectId, string $branchId)
    {
        $this->project_id = $projectId;
        $this->branch_id = $branchId;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{project_id}', '{branch_id}'], [$this->project_id, $this->branch_id], '/projects/{project_id}/branches/{branch_id}/roles');
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
     * @return null|\Vendor\Library\Generated\Model\RolesResponse|\Vendor\Library\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\Library\Generated\Model\RolesResponse', 'json');
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