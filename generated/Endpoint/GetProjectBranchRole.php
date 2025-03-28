<?php

namespace Vendor\Library\Generated\Endpoint;

class GetProjectBranchRole extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $project_id;
    protected $branch_id;
    protected $role_name;
    /**
    * Retrieves details about the specified role.
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain the `branch_id` by listing the project's branches.
    You can obtain the `role_name` by listing the roles for a branch.
    In Neon, the terms "role" and "user" are synonymous.
    For related information, see [Manage roles](https://neon.tech/docs/manage/roles/).
    
    *
    * @param string $projectId The Neon project ID
    * @param string $branchId The branch ID
    * @param string $roleName The role name
    */
    public function __construct(string $projectId, string $branchId, string $roleName)
    {
        $this->project_id = $projectId;
        $this->branch_id = $branchId;
        $this->role_name = $roleName;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{project_id}', '{branch_id}', '{role_name}'], [$this->project_id, $this->branch_id, $this->role_name], '/projects/{project_id}/branches/{branch_id}/roles/{role_name}');
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
     * @return null|\Vendor\Library\Generated\Model\RoleResponse|\Vendor\Library\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\Library\Generated\Model\RoleResponse', 'json');
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