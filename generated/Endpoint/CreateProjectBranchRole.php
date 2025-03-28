<?php

namespace Vendor\Library\Generated\Endpoint;

class CreateProjectBranchRole extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $project_id;
    protected $branch_id;
    /**
    * Creates a Postgres role in the specified branch.
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain the `branch_id` by listing the project's branches.
    For related information, see [Manage roles](https://neon.tech/docs/manage/roles/).
    
    Connections established to the active compute endpoint will be dropped.
    If the compute endpoint is idle, the endpoint becomes active for a short period of time and is suspended afterward.
    
    *
    * @param string $projectId The Neon project ID
    * @param string $branchId The branch ID
    * @param \Vendor\Library\Generated\Model\RoleCreateRequest $requestBody 
    */
    public function __construct(string $projectId, string $branchId, \Vendor\Library\Generated\Model\RoleCreateRequest $requestBody)
    {
        $this->project_id = $projectId;
        $this->branch_id = $branchId;
        $this->body = $requestBody;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{project_id}', '{branch_id}'], [$this->project_id, $this->branch_id], '/projects/{project_id}/branches/{branch_id}/roles');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Vendor\Library\Generated\Model\RoleCreateRequest) {
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
     * @return null|\Vendor\Library\Generated\Model\RoleOperations|\Vendor\Library\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
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