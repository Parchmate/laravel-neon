<?php

namespace Vendor\Library\Generated\Endpoint;

class GetProjectBranchDatabase extends \Vendor\Library\Generated\Runtime\Client\BaseEndpoint implements \Vendor\Library\Generated\Runtime\Client\Endpoint
{
    protected $project_id;
    protected $branch_id;
    protected $database_name;
    /**
    * Retrieves information about the specified database.
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain the `branch_id` and `database_name` by listing the branch's databases.
    For related information, see [Manage databases](https://neon.tech/docs/manage/databases/).
    
    *
    * @param string $projectId The Neon project ID
    * @param string $branchId The branch ID
    * @param string $databaseName The database name
    */
    public function __construct(string $projectId, string $branchId, string $databaseName)
    {
        $this->project_id = $projectId;
        $this->branch_id = $branchId;
        $this->database_name = $databaseName;
    }
    use \Vendor\Library\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'GET';
    }
    public function getUri(): string
    {
        return str_replace(['{project_id}', '{branch_id}', '{database_name}'], [$this->project_id, $this->branch_id, $this->database_name], '/projects/{project_id}/branches/{branch_id}/databases/{database_name}');
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
     * @return null|\Vendor\Library\Generated\Model\DatabaseResponse|\Vendor\Library\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Vendor\Library\Generated\Model\DatabaseResponse', 'json');
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