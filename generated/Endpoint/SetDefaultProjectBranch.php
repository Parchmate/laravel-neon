<?php

namespace Vendor\Library\Generated\Endpoint;

class SetDefaultProjectBranch extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $project_id;
    protected $branch_id;
    /**
    * Sets the specified branch as the project's default branch.
    The default designation is automatically removed from the previous default branch.
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain the `branch_id` by listing the project's branches.
    For more information, see [Manage branches](https://neon.tech/docs/manage/branches/).
    
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
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{project_id}', '{branch_id}'], [$this->project_id, $this->branch_id], '/projects/{project_id}/branches/{branch_id}/set_as_default');
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
        if (mb_strpos($contentType, 'application/json') !== false) {
            return $serializer->deserialize($body, 'Vendor\Library\Generated\Model\GeneralError', 'json');
        }
    }
    public function getAuthenticationScopes(): array
    {
        return ['BearerAuth', 'CookieAuth', 'TokenCookieAuth'];
    }
}