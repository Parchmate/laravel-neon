<?php

namespace Vendor\Library\Generated\Endpoint;

class CreateProjectBranch extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
    * Creates a branch in the specified project.
    You can obtain a `project_id` by listing the projects for your Neon account.
    
    This method does not require a request body, but you can specify one to create a compute endpoint for the branch or to select a non-default parent branch.
    The default behavior is to create a branch from the project's default branch with no compute endpoint, and the branch name is auto-generated.
    There is a maximum of one read-write endpoint per branch.
    A branch can have multiple read-only endpoints.
    For related information, see [Manage branches](https://neon.tech/docs/manage/branches/).
    
    *
    * @param string $projectId The Neon project ID
    * @param null|\Vendor\Library\Generated\Model\ProjectsProjectIdBranchesPostBody $requestBody 
    */
    public function __construct(string $projectId, ?\Vendor\Library\Generated\Model\ProjectsProjectIdBranchesPostBody $requestBody = null)
    {
        $this->project_id = $projectId;
        $this->body = $requestBody;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{project_id}'], [$this->project_id], '/projects/{project_id}/branches');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Vendor\Library\Generated\Model\ProjectsProjectIdBranchesPostBody) {
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
     * @return null|\Vendor\Library\Generated\Model\ResponseCreatedBranch|\Vendor\Library\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\Library\Generated\Model\ResponseCreatedBranch', 'json');
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