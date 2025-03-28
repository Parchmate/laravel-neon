<?php

namespace Vendor\Library\Generated\Endpoint;

class DeleteProjectBranch extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $project_id;
    protected $branch_id;
    /**
    * Deletes the specified branch from a project, and places
    all compute endpoints into an idle state, breaking existing client connections.
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain a `branch_id` by listing the project's branches.
    For related information, see [Manage branches](https://neon.tech/docs/manage/branches/).
    
    When a successful response status is received, the compute endpoints are still active,
    and the branch is not yet deleted from storage.
    The deletion occurs after all operations finish.
    You cannot delete a project's root or default branch, and you cannot delete a branch that has a child branch.
    A project must have at least one branch.
    
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
        return 'DELETE';
    }
    public function getUri(): string
    {
        return str_replace(['{project_id}', '{branch_id}'], [$this->project_id, $this->branch_id], '/projects/{project_id}/branches/{branch_id}');
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
     * @return null|\Vendor\Library\Generated\Model\BranchOperations|\Vendor\Library\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\Library\Generated\Model\BranchOperations', 'json');
        }
        if (204 === $status) {
            return null;
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