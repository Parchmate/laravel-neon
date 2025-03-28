<?php

namespace Vendor\Library\Generated\Endpoint;

class ResetProjectBranchRolePassword extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $project_id;
    protected $branch_id;
    protected $role_name;
    /**
    * Resets the password for the specified Postgres role.
    Returns a new password and operations. The new password is ready to use when the last operation finishes.
    The old password remains valid until last operation finishes.
    Connections to the compute endpoint are dropped. If idle,
    the compute endpoint becomes active for a short period of time.
    
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain the `branch_id` by listing the project's branches.
    You can obtain the `role_name` by listing the roles for a branch.
    For related information, see [Manage roles](https://neon.tech/docs/manage/roles/).
    
    *
    * @param string $projectId The Neon project ID
    * @param string $branchId The branch ID
    * @param string $roleName The role nam
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
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{project_id}', '{branch_id}', '{role_name}'], [$this->project_id, $this->branch_id, $this->role_name], '/projects/{project_id}/branches/{branch_id}/roles/{role_name}/reset_password');
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
     * @return null|\Vendor\Library\Generated\Model\RoleOperations|\Vendor\Library\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\Library\Generated\Model\RoleOperations', 'json');
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