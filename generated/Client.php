<?php

namespace Vendor\Library\Generated;

class Client extends \Vendor\Library\Generated\Runtime\Client\Client
{
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Vendor\Library\Generated\Model\ApiKeysListResponseItem[]|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
     */
    public function listApiKeys(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\ListApiKeys(), $fetch);
    }
    /**
    * Creates an API key.
    The `key_name` is a user-specified name for the key.
    This method returns an `id` and `key`. The `key` is a randomly generated, 64-bit token required to access the Neon API.
    API keys can also be managed in the Neon Console.
    See [Manage API keys](https://neon.tech/docs/manage/api-keys/).
    
    *
    * @param \Vendor\Library\Generated\Model\ApiKeyCreateRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\ApiKeyCreateResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function createApiKey(\Vendor\Library\Generated\Model\ApiKeyCreateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\CreateApiKey($requestBody), $fetch);
    }
    /**
    * Revokes the specified API key.
    An API key that is no longer needed can be revoked.
    This action cannot be reversed.
    You can obtain `key_id` values by listing the API keys for your Neon account.
    API keys can also be managed in the Neon Console.
    See [Manage API keys](https://neon.tech/docs/manage/api-keys/).
    
    *
    * @param int $keyId The API key ID
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\ApiKeyRevokeResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function revokeApiKey(int $keyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\RevokeApiKey($keyId), $fetch);
    }
    /**
    * Retrieves details for the specified operation.
    An operation is an action performed on a Neon project resource.
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain a `operation_id` by listing operations for the project.
    
    *
    * @param string $projectId The Neon project ID
    * @param string $operationId The operation ID
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\OperationResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function getProjectOperation(string $projectId, string $operationId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetProjectOperation($projectId, $operationId), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\ProjectsGetResponse200|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function listProjects(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\ListProjects($queryParameters), $fetch);
    }
    /**
    * Creates a Neon project.
    A project is the top-level object in the Neon object hierarchy.
    Plan limits define how many projects you can create.
    For more information, see [Manage projects](https://neon.tech/docs/manage/projects/).
    
    You can specify a region and Postgres version in the request body.
    Neon currently supports PostgreSQL 14, 15, 16, and 17.
    For supported regions and `region_id` values, see [Regions](https://neon.tech/docs/introduction/regions/).
    
    *
    * @param \Vendor\Library\Generated\Model\ProjectCreateRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\ResponseCreatedProject|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function createProject(\Vendor\Library\Generated\Model\ProjectCreateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\CreateProject($requestBody), $fetch);
    }
    /**
    * Retrieves a list of shared projects for the Neon account.
    A project is the top-level object in the Neon object hierarchy.
    For more information, see [Manage projects](https://neon.tech/docs/manage/projects/).
    
    *
    * @param array $queryParameters {
    *     @var string $cursor Specify the cursor value from the previous response to get the next batch of projects.
    *     @var int $limit Specify a value from 1 to 400 to limit number of projects in the response.
    *     @var string $search Search query by name or id.
    *     @var int $timeout Specify an explicit timeout in milliseconds to limit response delay.
    After timing out, the incomplete list of project data fetched so far will be returned.
    Projects still being fetched when the timeout occurred are listed in the "unavailable" attribute of the response.
    If not specified, an implicit implementation defined timeout is chosen with the same behaviour as above
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\ProjectsSharedGetResponse200|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function listSharedProjects(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\ListSharedProjects($queryParameters), $fetch);
    }
    /**
    * Deletes the specified project.
    You can obtain a `project_id` by listing the projects for your Neon account.
    Deleting a project is a permanent action.
    Deleting a project also deletes endpoints, branches, databases, and users that belong to the project.
    
    *
    * @param string $projectId The Neon project ID
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\ProjectResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function deleteProject(string $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\DeleteProject($projectId), $fetch);
    }
    /**
    * Retrieves information about the specified project.
    A project is the top-level object in the Neon object hierarchy.
    You can obtain a `project_id` by listing the projects for your Neon account.
    
    *
    * @param string $projectId The Neon project ID
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\ProjectResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function getProject(string $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetProject($projectId), $fetch);
    }
    /**
    * Updates the specified project.
    You can obtain a `project_id` by listing the projects for your Neon account.
    
    *
    * @param string $projectId The Neon project ID
    * @param \Vendor\Library\Generated\Model\ProjectUpdateRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\ProjectsProjectIdPatchResponse200|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function updateProject(string $projectId, \Vendor\Library\Generated\Model\ProjectUpdateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\UpdateProject($projectId, $requestBody), $fetch);
    }
    /**
    * Retrieves a list of operations for the specified Neon project.
    You can obtain a `project_id` by listing the projects for your Neon account.
    The number of operations returned can be large.
    To paginate the response, issue an initial request with a `limit` value.
    Then, add the `cursor` value that was returned in the response to the next request.
    
    *
    * @param string $projectId The Neon project ID
    * @param array $queryParameters {
    *     @var string $cursor Specify the cursor value from the previous response to get the next batch of operations
    *     @var int $limit Specify a value from 1 to 1000 to limit number of operations in the response
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\ResponseListOperations|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function listProjectOperations(string $projectId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\ListProjectOperations($projectId, $queryParameters), $fetch);
    }
    /**
     * Retrieves details about users who have access to the project, including the permission `id`, the granted-to email address, and the date project access was granted.
     *
     * @param string $projectId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Vendor\Library\Generated\Model\ProjectPermissions|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
     */
    public function listProjectPermissions(string $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\ListProjectPermissions($projectId), $fetch);
    }
    /**
     * Grants project access to the account associated with the specified email address
     *
     * @param string $projectId 
     * @param \Vendor\Library\Generated\Model\GrantPermissionToProjectRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Vendor\Library\Generated\Model\ProjectPermission|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
     */
    public function grantPermissionToProject(string $projectId, \Vendor\Library\Generated\Model\GrantPermissionToProjectRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GrantPermissionToProject($projectId, $requestBody), $fetch);
    }
    /**
     * Revokes project access from the user associated with the specified permission `id`. You can retrieve a user's permission `id` by listing project access.
     *
     * @param string $projectId 
     * @param string $permissionId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Vendor\Library\Generated\Model\ProjectPermission|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
     */
    public function revokePermissionFromProject(string $projectId, string $permissionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\RevokePermissionFromProject($projectId, $permissionId), $fetch);
    }
    /**
     * Return available shared preload libraries
     *
     * @param string $projectId 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Vendor\Library\Generated\Model\AvailablePreloadLibraries|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
     */
    public function getAvailablePreloadLibraries(string $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetAvailablePreloadLibraries($projectId), $fetch);
    }
    /**
     * Returns the JWKS URLs available for verifying JWTs used as the authentication mechanism for the specified project.
     *
     * @param string $projectId The Neon project ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Vendor\Library\Generated\Model\ProjectJWKSResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectJWKS(string $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetProjectJWKS($projectId), $fetch);
    }
    /**
    * Add a new JWKS URL to a project, such that it can be used for verifying JWTs used as the authentication mechanism for the specified project.
    
    The URL must be a valid HTTPS URL that returns a JSON Web Key Set.
    
    The `provider_name` field allows you to specify which authentication provider you're using (e.g., Clerk, Auth0, AWS Cognito, etc.).
    
    The `branch_id` can be used to specify on which branches the JWKS URL will be accepted. If not specified, then it will work on any branch.
    
    The `role_names` can be used to specify for which roles the JWKS URL will be accepted.
    
    The `jwt_audience` can be used to specify which "aud" values should be accepted by Neon in the JWTs that are used for authentication.
    
    *
    * @param string $projectId The Neon project ID
    * @param \Vendor\Library\Generated\Model\AddProjectJWKSRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\JWKSCreationOperation|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function addProjectJWKS(string $projectId, \Vendor\Library\Generated\Model\AddProjectJWKSRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\AddProjectJWKS($projectId, $requestBody), $fetch);
    }
    /**
     * Deletes a JWKS URL from the specified project
     *
     * @param string $projectId The Neon project ID
     * @param string $jwksId The JWKS ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Vendor\Library\Generated\Model\JWKS|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProjectJWKS(string $projectId, string $jwksId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\DeleteProjectJWKS($projectId, $jwksId), $fetch);
    }
    /**
    * Creates a project on a third-party authentication provider's platform for use with Neon Auth.
    Use this endpoint if the frontend integration flow can't be used.
    
    *
    * @param \Vendor\Library\Generated\Model\NeonAuthCreateIntegrationRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\NeonAuthCreateIntegrationResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function createNeonAuthIntegration(\Vendor\Library\Generated\Model\NeonAuthCreateIntegrationRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\CreateNeonAuthIntegration($requestBody), $fetch);
    }
    /**
    * Generates SDK or API Keys for the auth provider. These might be called different things depending
    on the auth provider you're using, but are generally used for setting up the frontend and backend SDKs.
    
    *
    * @param \Vendor\Library\Generated\Model\NeonAuthCreateAuthProviderSDKKeysRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\NeonAuthCreateIntegrationResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function createNeonAuthProviderSDKKeys(\Vendor\Library\Generated\Model\NeonAuthCreateAuthProviderSDKKeysRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\CreateNeonAuthProviderSDKKeys($requestBody), $fetch);
    }
    /**
     * Transfer ownership of your Neon-managed auth project to your own auth provider account.
     *
     * @param \Vendor\Library\Generated\Model\NeonAuthTransferAuthProviderProjectRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Vendor\Library\Generated\Model\NeonAuthTransferAuthProviderProjectResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
     */
    public function transferNeonAuthProviderProject(\Vendor\Library\Generated\Model\NeonAuthTransferAuthProviderProjectRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\TransferNeonAuthProviderProject($requestBody), $fetch);
    }
    /**
     * 
     *
     * @param string $projectId The Neon project ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Vendor\Library\Generated\Model\ListNeonAuthIntegrationsResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
     */
    public function listNeonAuthIntegrations(string $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\ListNeonAuthIntegrations($projectId), $fetch);
    }
    /**
     * 
     *
     * @param string $projectId The Neon project ID
     * @param string $authProvider The authentication provider name
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteNeonAuthIntegration(string $projectId, string $authProvider, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\DeleteNeonAuthIntegration($projectId, $authProvider), $fetch);
    }
    /**
    * Retrieves a connection URI for the specified database.
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain the `database_name` by listing the databases for a branch.
    You can obtain a `role_name` by listing the roles for a branch.
    
    *
    * @param string $projectId The Neon project ID
    * @param array $queryParameters {
    *     @var string $branch_id The branch ID. Defaults to your project's default `branch_id` if not specified.
    *     @var string $endpoint_id The endpoint ID. Defaults to the read-write `endpoint_id` associated with the `branch_id` if not specified.
    *     @var string $database_name The database name
    *     @var string $role_name The role name
    *     @var bool $pooled Adds the `-pooler` option to the connection URI when set to `true`, creating a pooled connection URI.
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\ConnectionURIResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function getConnectionURI(string $projectId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetConnectionURI($projectId, $queryParameters), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\ProjectsProjectIdBranchesGetResponse200|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function listProjectBranches(string $projectId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\ListProjectBranches($projectId, $queryParameters), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\ResponseCreatedBranch|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function createProjectBranch(string $projectId, ?\Vendor\Library\Generated\Model\ProjectsProjectIdBranchesPostBody $requestBody = null, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\CreateProjectBranch($projectId, $requestBody), $fetch);
    }
    /**
    * Retrieves the total number of branches in the specified project.
    You can obtain a `project_id` by listing the projects for your Neon account.
    
    *
    * @param string $projectId The Neon project ID
    * @param array $queryParameters {
    *     @var string $search Count branches matching the `name` in search query
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\ProjectsProjectIdBranchesCountGetResponse200|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function countProjectBranches(string $projectId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\CountProjectBranches($projectId, $queryParameters), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\BranchOperations|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function deleteProjectBranch(string $projectId, string $branchId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\DeleteProjectBranch($projectId, $branchId), $fetch);
    }
    /**
    * Retrieves information about the specified branch.
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain a `branch_id` by listing the project's branches.
    A `branch_id` value has a `br-` prefix.
    
    Each Neon project is initially created with a root and default branch named `main`.
    A project can contain one or more branches.
    A parent branch is identified by a `parent_id` value, which is the `id` of the parent branch.
    For related information, see [Manage branches](https://neon.tech/docs/manage/branches/).
    
    *
    * @param string $projectId The Neon project ID
    * @param string $branchId The branch ID
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\ProjectsProjectIdBranchesBranchIdGetResponse200|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function getProjectBranch(string $projectId, string $branchId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetProjectBranch($projectId, $branchId), $fetch);
    }
    /**
    * Updates the specified branch.
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain the `branch_id` by listing the project's branches.
    For more information, see [Manage branches](https://neon.tech/docs/manage/branches/).
    
    *
    * @param string $projectId The Neon project ID
    * @param string $branchId The branch ID
    * @param \Vendor\Library\Generated\Model\BranchUpdateRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\BranchOperations|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function updateProjectBranch(string $projectId, string $branchId, \Vendor\Library\Generated\Model\BranchUpdateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\UpdateProjectBranch($projectId, $branchId, $requestBody), $fetch);
    }
    /**
     * Restores a branch to an earlier state in its own or another branch's history
     *
     * @param string $projectId The Neon project ID
     * @param string $branchId The branch ID
     * @param \Vendor\Library\Generated\Model\BranchRestoreRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Vendor\Library\Generated\Model\BranchOperations|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
     */
    public function restoreProjectBranch(string $projectId, string $branchId, \Vendor\Library\Generated\Model\BranchRestoreRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\RestoreProjectBranch($projectId, $branchId, $requestBody), $fetch);
    }
    /**
     * Retrieves the schema from the specified database. The `lsn` and `timestamp` values cannot be specified at the same time. If both are omitted, the database schema is retrieved from database's head.
     *
     * @param string $projectId The Neon project ID
     * @param string $branchId The branch ID
     * @param array $queryParameters {
     *     @var string $db_name Name of the database for which the schema is retrieved
     *     @var string $lsn The Log Sequence Number (LSN) for which the schema is retrieved
     *     @var string $timestamp The point in time for which the schema is retrieved
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Vendor\Library\Generated\Model\BranchSchemaResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectBranchSchema(string $projectId, string $branchId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetProjectBranchSchema($projectId, $branchId, $queryParameters), $fetch);
    }
    /**
     * Compares the schema from the specified database with another branch's schema.
     *
     * @param string $projectId The Neon project ID
     * @param string $branchId The branch ID
     * @param array $queryParameters {
     *     @var string $base_branch_id The branch ID to compare the schema with
     *     @var string $db_name Name of the database for which the schema is retrieved
     *     @var string $lsn The Log Sequence Number (LSN) for which the schema is retrieved
     *     @var string $timestamp The point in time for which the schema is retrieved
     *     @var string $base_lsn The Log Sequence Number (LSN) for the base branch schema
     *     @var string $base_timestamp The point in time for the base branch schema
     * }
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Vendor\Library\Generated\Model\BranchSchemaCompareResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
     */
    public function getProjectBranchSchemaComparison(string $projectId, string $branchId, array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetProjectBranchSchemaComparison($projectId, $branchId, $queryParameters), $fetch);
    }
    /**
    * Sets the specified branch as the project's default branch.
    The default designation is automatically removed from the previous default branch.
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain the `branch_id` by listing the project's branches.
    For more information, see [Manage branches](https://neon.tech/docs/manage/branches/).
    
    *
    * @param string $projectId The Neon project ID
    * @param string $branchId The branch ID
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\BranchOperations|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function setDefaultProjectBranch(string $projectId, string $branchId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\SetDefaultProjectBranch($projectId, $branchId), $fetch);
    }
    /**
    * Retrieves a list of compute endpoints for the specified branch.
    Neon permits only one read-write compute endpoint per branch.
    A branch can have multiple read-only compute endpoints.
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain the `branch_id` by listing the project's branches.
    
    *
    * @param string $projectId The Neon project ID
    * @param string $branchId The branch ID
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\EndpointsResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function listProjectBranchEndpoints(string $projectId, string $branchId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\ListProjectBranchEndpoints($projectId, $branchId), $fetch);
    }
    /**
    * Retrieves a list of databases for the specified branch.
    A branch can have multiple databases.
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain the `branch_id` by listing the project's branches.
    For related information, see [Manage databases](https://neon.tech/docs/manage/databases/).
    
    *
    * @param string $projectId The Neon project ID
    * @param string $branchId The branch ID
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\DatabasesResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function listProjectBranchDatabases(string $projectId, string $branchId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\ListProjectBranchDatabases($projectId, $branchId), $fetch);
    }
    /**
    * Creates a database in the specified branch.
    A branch can have multiple databases.
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain the `branch_id` by listing the project's branches.
    For related information, see [Manage databases](https://neon.tech/docs/manage/databases/).
    
    *
    * @param string $projectId The Neon project ID
    * @param string $branchId The branch ID
    * @param \Vendor\Library\Generated\Model\DatabaseCreateRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\DatabaseOperations|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function createProjectBranchDatabase(string $projectId, string $branchId, \Vendor\Library\Generated\Model\DatabaseCreateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\CreateProjectBranchDatabase($projectId, $branchId, $requestBody), $fetch);
    }
    /**
    * Deletes the specified database from the branch.
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain the `branch_id` and `database_name` by listing the branch's databases.
    For related information, see [Manage databases](https://neon.tech/docs/manage/databases/).
    
    *
    * @param string $projectId The Neon project ID
    * @param string $branchId The branch ID
    * @param string $databaseName The database name
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\DatabaseOperations|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function deleteProjectBranchDatabase(string $projectId, string $branchId, string $databaseName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\DeleteProjectBranchDatabase($projectId, $branchId, $databaseName), $fetch);
    }
    /**
    * Retrieves information about the specified database.
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain the `branch_id` and `database_name` by listing the branch's databases.
    For related information, see [Manage databases](https://neon.tech/docs/manage/databases/).
    
    *
    * @param string $projectId The Neon project ID
    * @param string $branchId The branch ID
    * @param string $databaseName The database name
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\DatabaseResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function getProjectBranchDatabase(string $projectId, string $branchId, string $databaseName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetProjectBranchDatabase($projectId, $branchId, $databaseName), $fetch);
    }
    /**
    * Updates the specified database in the branch.
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain the `branch_id` and `database_name` by listing the branch's databases.
    For related information, see [Manage databases](https://neon.tech/docs/manage/databases/).
    
    *
    * @param string $projectId The Neon project ID
    * @param string $branchId The branch ID
    * @param string $databaseName The database name
    * @param \Vendor\Library\Generated\Model\DatabaseUpdateRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\DatabaseOperations|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function updateProjectBranchDatabase(string $projectId, string $branchId, string $databaseName, \Vendor\Library\Generated\Model\DatabaseUpdateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\UpdateProjectBranchDatabase($projectId, $branchId, $databaseName, $requestBody), $fetch);
    }
    /**
    * Retrieves a list of Postgres roles from the specified branch.
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain the `branch_id` by listing the project's branches.
    For related information, see [Manage roles](https://neon.tech/docs/manage/roles/).
    
    *
    * @param string $projectId The Neon project ID
    * @param string $branchId The branch ID
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\RolesResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function listProjectBranchRoles(string $projectId, string $branchId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\ListProjectBranchRoles($projectId, $branchId), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\RoleOperations|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function createProjectBranchRole(string $projectId, string $branchId, \Vendor\Library\Generated\Model\RoleCreateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\CreateProjectBranchRole($projectId, $branchId, $requestBody), $fetch);
    }
    /**
    * Deletes the specified Postgres role from the branch.
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain the `branch_id` by listing the project's branches.
    You can obtain the `role_name` by listing the roles for a branch.
    For related information, see [Manage roles](https://neon.tech/docs/manage/roles/).
    
    *
    * @param string $projectId The Neon project ID
    * @param string $branchId The branch ID
    * @param string $roleName The role name
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\RoleOperations|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function deleteProjectBranchRole(string $projectId, string $branchId, string $roleName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\DeleteProjectBranchRole($projectId, $branchId, $roleName), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\RoleResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function getProjectBranchRole(string $projectId, string $branchId, string $roleName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetProjectBranchRole($projectId, $branchId, $roleName), $fetch);
    }
    /**
    * Retrieves the password for the specified Postgres role, if possible.
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain the `branch_id` by listing the project's branches.
    You can obtain the `role_name` by listing the roles for a branch.
    For related information, see [Manage roles](https://neon.tech/docs/manage/roles/).
    
    *
    * @param string $projectId The Neon project ID
    * @param string $branchId The branch ID
    * @param string $roleName The role name
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Vendor\Library\Generated\Exception\GetProjectBranchRolePasswordNotFoundException
    * @throws \Vendor\Library\Generated\Exception\GetProjectBranchRolePasswordPreconditionFailedException
    *
    * @return null|\Vendor\Library\Generated\Model\RolePasswordResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function getProjectBranchRolePassword(string $projectId, string $branchId, string $roleName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetProjectBranchRolePassword($projectId, $branchId, $roleName), $fetch);
    }
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
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\RoleOperations|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function resetProjectBranchRolePassword(string $projectId, string $branchId, string $roleName, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\ResetProjectBranchRolePassword($projectId, $branchId, $roleName), $fetch);
    }
    /**
     * Lists VPC endpoint restrictions for the specified Neon project.
     *
     * @param string $projectId The Neon project ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Vendor\Library\Generated\Model\VPCEndpointsResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
     */
    public function listProjectVPCEndpoints(string $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\ListProjectVPCEndpoints($projectId), $fetch);
    }
    /**
     * Removes the specified VPC endpoint restriction from a Neon project.
     *
     * @param string $projectId The Neon project ID
     * @param string $vpcEndpointId The VPC endpoint ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
     */
    public function deleteProjectVPCEndpoint(string $projectId, string $vpcEndpointId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\DeleteProjectVPCEndpoint($projectId, $vpcEndpointId), $fetch);
    }
    /**
    * Sets or updates a VPC endpoint restriction for a Neon project.
    When a VPC endpoint restriction is set, the project only accepts connections
    from the specified VPC.
    A VPC endpoint can be set as a restriction only after it is assigned to the
    parent organization of the Neon project.
    
    *
    * @param string $projectId The Neon project ID
    * @param string $vpcEndpointId The VPC endpoint ID
    * @param \Vendor\Library\Generated\Model\VPCEndpointAssignment $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function assignProjectVPCEndpoint(string $projectId, string $vpcEndpointId, \Vendor\Library\Generated\Model\VPCEndpointAssignment $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\AssignProjectVPCEndpoint($projectId, $vpcEndpointId, $requestBody), $fetch);
    }
    /**
    * Retrieves a list of compute endpoints for the specified project.
    A compute endpoint is a Neon compute instance.
    You can obtain a `project_id` by listing the projects for your Neon account.
    For information about compute endpoints, see [Manage computes](https://neon.tech/docs/manage/endpoints/).
    
    *
    * @param string $projectId The Neon project ID
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\EndpointsResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function listProjectEndpoints(string $projectId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\ListProjectEndpoints($projectId), $fetch);
    }
    /**
    * Creates a compute endpoint for the specified branch.
    An endpoint is a Neon compute instance.
    There is a maximum of one read-write compute endpoint per branch.
    If the specified branch already has a read-write compute endpoint, the operation fails.
    A branch can have multiple read-only compute endpoints.
    
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain `branch_id` by listing the project's branches.
    A `branch_id` has a `br-` prefix.
    For supported regions and `region_id` values, see [Regions](https://neon.tech/docs/introduction/regions/).
    For more information about compute endpoints, see [Manage computes](https://neon.tech/docs/manage/endpoints/).
    
    *
    * @param string $projectId The Neon project ID
    * @param \Vendor\Library\Generated\Model\EndpointCreateRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\EndpointOperations|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function createProjectEndpoint(string $projectId, \Vendor\Library\Generated\Model\EndpointCreateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\CreateProjectEndpoint($projectId, $requestBody), $fetch);
    }
    /**
    * Delete the specified compute endpoint.
    A compute endpoint is a Neon compute instance.
    Deleting a compute endpoint drops existing network connections to the compute endpoint.
    The deletion is completed when last operation in the chain finishes successfully.
    
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain an `endpoint_id` by listing your project's compute endpoints.
    An `endpoint_id` has an `ep-` prefix.
    For information about compute endpoints, see [Manage computes](https://neon.tech/docs/manage/endpoints/).
    
    *
    * @param string $projectId The Neon project ID
    * @param string $endpointId The endpoint ID
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\EndpointOperations|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function deleteProjectEndpoint(string $projectId, string $endpointId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\DeleteProjectEndpoint($projectId, $endpointId), $fetch);
    }
    /**
    * Retrieves information about the specified compute endpoint.
    A compute endpoint is a Neon compute instance.
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain an `endpoint_id` by listing your project's compute endpoints.
    An `endpoint_id` has an `ep-` prefix.
    For information about compute endpoints, see [Manage computes](https://neon.tech/docs/manage/endpoints/).
    
    *
    * @param string $projectId The Neon project ID
    * @param string $endpointId The endpoint ID
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\EndpointResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function getProjectEndpoint(string $projectId, string $endpointId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetProjectEndpoint($projectId, $endpointId), $fetch);
    }
    /**
    * Updates the specified compute endpoint.
    
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain an `endpoint_id` and `branch_id` by listing your project's compute endpoints.
    An `endpoint_id` has an `ep-` prefix. A `branch_id` has a `br-` prefix.
    For more information about compute endpoints, see [Manage computes](https://neon.tech/docs/manage/endpoints/).
    
    If the returned list of operations is not empty, the compute endpoint is not ready to use.
    The client must wait for the last operation to finish before using the compute endpoint.
    If the compute endpoint was idle before the update, it becomes active for a short period of time,
    and the control plane suspends it again after the update.
    
    *
    * @param string $projectId The Neon project ID
    * @param string $endpointId The endpoint ID
    * @param \Vendor\Library\Generated\Model\EndpointUpdateRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\EndpointOperations|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function updateProjectEndpoint(string $projectId, string $endpointId, \Vendor\Library\Generated\Model\EndpointUpdateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\UpdateProjectEndpoint($projectId, $endpointId, $requestBody), $fetch);
    }
    /**
    * Starts a compute endpoint. The compute endpoint is ready to use
    after the last operation in chain finishes successfully.
    
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain an `endpoint_id` by listing your project's compute endpoints.
    An `endpoint_id` has an `ep-` prefix.
    For information about compute endpoints, see [Manage computes](https://neon.tech/docs/manage/endpoints/).
    
    *
    * @param string $projectId The Neon project ID
    * @param string $endpointId The endpoint ID
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\EndpointOperations|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function startProjectEndpoint(string $projectId, string $endpointId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\StartProjectEndpoint($projectId, $endpointId), $fetch);
    }
    /**
    * Suspend the specified compute endpoint
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain an `endpoint_id` by listing your project's compute endpoints.
    An `endpoint_id` has an `ep-` prefix.
    For information about compute endpoints, see [Manage computes](https://neon.tech/docs/manage/endpoints/).
    
    *
    * @param string $projectId The Neon project ID
    * @param string $endpointId The endpoint ID
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\EndpointOperations|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function suspendProjectEndpoint(string $projectId, string $endpointId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\SuspendProjectEndpoint($projectId, $endpointId), $fetch);
    }
    /**
    * Restart the specified compute endpoint: suspend immediately followed by start operations.
    You can obtain a `project_id` by listing the projects for your Neon account.
    You can obtain an `endpoint_id` by listing your project's compute endpoints.
    An `endpoint_id` has an `ep-` prefix.
    For information about compute endpoints, see [Manage computes](https://neon.tech/docs/manage/endpoints/).
    
    *
    * @param string $projectId The Neon project ID
    * @param string $endpointId The endpoint ID
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\EndpointOperations|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function restartProjectEndpoint(string $projectId, string $endpointId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\RestartProjectEndpoint($projectId, $endpointId), $fetch);
    }
    /**
    * Retrieves consumption metrics for Scale, Business, and Enterprise plan accounts. History begins at the time of upgrade.
    
    *
    * @param array $queryParameters {
    *     @var string $from Specify the start `date-time` for the consumption period.
    The `date-time` value is rounded according to the specified `granularity`.
    For example, `2024-03-15T15:30:00Z` for `daily` granularity will be rounded to `2024-03-15T00:00:00Z`.
    The specified `date-time` value must respect the specified granularity:
    - For `hourly`, consumption metrics are limited to the last 168 hours.
    - For `daily`, consumption metrics are limited to the last 60 days.
    - For `monthly`, consumption metrics are limited to the past year.
    
    The consumption history is available starting from `March 1, 2024, at 00:00:00 UTC`.
    
    *     @var string $to Specify the end `date-time` for the consumption period.
    The `date-time` value is rounded according to the specified granularity.
    For example, `2024-03-15T15:30:00Z` for `daily` granularity will be rounded to `2024-03-15T00:00:00Z`.
    The specified `date-time` value must respect the specified granularity:
    - For `hourly`, consumption metrics are limited to the last 168 hours.
    - For `daily`, consumption metrics are limited to the last 60 days.
    - For `monthly`, consumption metrics are limited to the past year.
    
    *     @var string $granularity Specify the granularity of consumption metrics.
    Hourly, daily, and monthly metrics are available for the last 168 hours, 60 days,
    and 1 year, respectively.
    
    *     @var string $org_id Specify the organization for which the consumption metrics should be returned.
    If this parameter is not provided, the endpoint will return the metrics for the
    authenticated user's account.
    
    *     @var bool $include_v1_metrics Include metrics utilized in previous pricing models.
    - **data_storage_bytes_hour**: The sum of the maximum observed storage values for each hour
     for each project, which never decreases.
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Vendor\Library\Generated\Exception\GetConsumptionHistoryPerAccountForbiddenException
    * @throws \Vendor\Library\Generated\Exception\GetConsumptionHistoryPerAccountNotFoundException
    * @throws \Vendor\Library\Generated\Exception\GetConsumptionHistoryPerAccountNotAcceptableException
    * @throws \Vendor\Library\Generated\Exception\GetConsumptionHistoryPerAccountTooManyRequestsException
    *
    * @return null|\Vendor\Library\Generated\Model\ConsumptionHistoryPerAccountResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function getConsumptionHistoryPerAccount(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetConsumptionHistoryPerAccount($queryParameters), $fetch);
    }
    /**
    * Retrieves consumption metrics for Scale, Business, and Enterprise plan projects. History begins at the time of upgrade.
    Issuing a call to this API does not wake a project's compute endpoint.
    
    *
    * @param array $queryParameters {
    *     @var string $cursor Specify the cursor value from the previous response to get the next batch of projects.
    *     @var int $limit Specify a value from 1 to 100 to limit number of projects in the response.
    *     @var array $project_ids Specify a list of project IDs to filter the response.
    If omitted, the response will contain all projects.
    A list of project IDs can be specified as an array of parameter values or as a comma-separated list in a single parameter value.
    - As an array of parameter values: `project_ids=cold-poetry-09157238%20&project_ids=quiet-snow-71788278`
    - As a comma-separated list in a single parameter value: `project_ids=cold-poetry-09157238,quiet-snow-71788278`
    
    *     @var string $from Specify the start `date-time` for the consumption period.
    The `date-time` value is rounded according to the specified `granularity`.
    For example, `2024-03-15T15:30:00Z` for `daily` granularity will be rounded to `2024-03-15T00:00:00Z`.
    The specified `date-time` value must respect the specified `granularity`:
    - For `hourly`, consumption metrics are limited to the last 168 hours.
    - For `daily`, consumption metrics are limited to the last 60 days.
    - For `monthly`, consumption metrics are limited to the last year.
    
    The consumption history is available starting from `March 1, 2024, at 00:00:00 UTC`.
    
    *     @var string $to Specify the end `date-time` for the consumption period.
    The `date-time` value is rounded according to the specified granularity.
    For example, `2024-03-15T15:30:00Z` for `daily` granularity will be rounded to `2024-03-15T00:00:00Z`.
    The specified `date-time` value must respect the specified `granularity`:
    - For `hourly`, consumption metrics are limited to the last 168 hours.
    - For `daily`, consumption metrics are limited to the last 60 days.
    - For `monthly`, consumption metrics are limited to the last year.
    
    *     @var string $granularity Specify the granularity of consumption metrics.
    Hourly, daily, and monthly metrics are available for the last 168 hours, 60 days,
    and 1 year, respectively.
    
    *     @var string $org_id Specify the organization for which the project consumption metrics should be returned.
    If this parameter is not provided, the endpoint will return the metrics for the
    authenticated user's projects.
    
    *     @var bool $include_v1_metrics Include metrics utilized in previous pricing models.
    - **data_storage_bytes_hour**: The sum of the maximum observed storage values for each hour,
     which never decreases.
    
    * }
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    * @throws \Vendor\Library\Generated\Exception\GetConsumptionHistoryPerProjectForbiddenException
    * @throws \Vendor\Library\Generated\Exception\GetConsumptionHistoryPerProjectNotFoundException
    * @throws \Vendor\Library\Generated\Exception\GetConsumptionHistoryPerProjectNotAcceptableException
    * @throws \Vendor\Library\Generated\Exception\GetConsumptionHistoryPerProjectTooManyRequestsException
    *
    * @return null|\Vendor\Library\Generated\Model\ConsumptionHistoryProjectsGetResponse200|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function getConsumptionHistoryPerProject(array $queryParameters = [], string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetConsumptionHistoryPerProject($queryParameters), $fetch);
    }
    /**
     * Retrieves information about the specified organization.
     *
     * @param string $orgId The Neon organization ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Vendor\Library\Generated\Model\Organization|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
     */
    public function getOrganization(string $orgId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetOrganization($orgId), $fetch);
    }
    /**
    * Retrieves the API keys for the specified organization.
    The response does not include API key tokens. A token is only provided when creating an API key.
    API keys can also be managed in the Neon Console.
    For more information, see [Manage API keys](https://neon.tech/docs/manage/api-keys/).
    
    *
    * @param string $orgId The Neon organization ID
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\OrgApiKeysListResponseItem[]|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function listOrgApiKeys(string $orgId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\ListOrgApiKeys($orgId), $fetch);
    }
    /**
    * Creates an API key for the specified organization.
    The `key_name` is a user-specified name for the key.
    This method returns an `id` and `key`. The `key` is a randomly generated, 64-bit token required to access the Neon API.
    API keys can also be managed in the Neon Console.
    See [Manage API keys](https://neon.tech/docs/manage/api-keys/).
    
    *
    * @param string $orgId The Neon organization ID
    * @param \Vendor\Library\Generated\Model\OrgApiKeyCreateRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\OrgApiKeyCreateResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function createOrgApiKey(string $orgId, \Vendor\Library\Generated\Model\OrgApiKeyCreateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\CreateOrgApiKey($orgId, $requestBody), $fetch);
    }
    /**
    * Revokes the specified organization API key.
    An API key that is no longer needed can be revoked.
    This action cannot be reversed.
    You can obtain `key_id` values by listing the API keys for an organization.
    API keys can also be managed in the Neon Console.
    See [Manage API keys](https://neon.tech/docs/manage/api-keys/).
    
    *
    * @param string $orgId The Neon organization ID
    * @param int $keyId The API key ID
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\OrgApiKeyRevokeResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function revokeOrgApiKey(string $orgId, int $keyId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\RevokeOrgApiKey($orgId, $keyId), $fetch);
    }
    /**
     * Retrieves information about the specified organization members.
     *
     * @param string $orgId The Neon organization ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Vendor\Library\Generated\Model\OrganizationMembersResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
     */
    public function getOrganizationMembers(string $orgId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetOrganizationMembers($orgId), $fetch);
    }
    /**
    * Remove member from the organization.
    Only an admin of the organization can perform this action.
    If another admin is being removed, it will not be allows in case it is the only admin left in the organization.
    
    *
    * @param string $orgId The Neon organization ID
    * @param string $memberId The Neon organization member ID
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\EmptyResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function removeOrganizationMember(string $orgId, string $memberId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\RemoveOrganizationMember($orgId, $memberId), $fetch);
    }
    /**
     * Retrieves information about the specified organization member.
     *
     * @param string $orgId The Neon organization ID
     * @param string $memberId The Neon organization member ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Vendor\Library\Generated\Model\Member|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
     */
    public function getOrganizationMember(string $orgId, string $memberId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetOrganizationMember($orgId, $memberId), $fetch);
    }
    /**
     * Only an admin can perform this action.
     *
     * @param string $orgId The Neon organization ID
     * @param string $memberId The Neon organization member ID
     * @param \Vendor\Library\Generated\Model\OrganizationMemberUpdateRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Vendor\Library\Generated\Model\Member|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
     */
    public function updateOrganizationMember(string $orgId, string $memberId, \Vendor\Library\Generated\Model\OrganizationMemberUpdateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\UpdateOrganizationMember($orgId, $memberId, $requestBody), $fetch);
    }
    /**
     * Retrieves information about extended invitations for the specified organization
     *
     * @param string $orgId The Neon organization ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Vendor\Library\Generated\Model\OrganizationInvitationsResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
     */
    public function getOrganizationInvitations(string $orgId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetOrganizationInvitations($orgId), $fetch);
    }
    /**
    * Creates invitations for a specific organization.
    If the invited user has an existing account, they automatically join as a member.
    If they don't yet have an account, they are invited to create one, after which they become a member.
    Each invited user receives an email notification.
    
    *
    * @param string $orgId The Neon organization ID
    * @param \Vendor\Library\Generated\Model\OrganizationInvitesCreateRequest $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\OrganizationInvitationsResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function createOrganizationInvitations(string $orgId, \Vendor\Library\Generated\Model\OrganizationInvitesCreateRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\CreateOrganizationInvitations($orgId, $requestBody), $fetch);
    }
    /**
     * Transfers selected projects, identified by their IDs, from your organization to another specified organization.
     *
     * @param string $sourceOrgId The Neon organization ID (source org, which currently owns the project)
     * @param \Vendor\Library\Generated\Model\TransferProjectsToOrganizationRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\TransferProjectsFromOrgToOrgNotAcceptableException
     * @throws \Vendor\Library\Generated\Exception\TransferProjectsFromOrgToOrgUnprocessableEntityException
     *
     * @return null|\Vendor\Library\Generated\Model\EmptyResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
     */
    public function transferProjectsFromOrgToOrg(string $sourceOrgId, \Vendor\Library\Generated\Model\TransferProjectsToOrganizationRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\TransferProjectsFromOrgToOrg($sourceOrgId, $requestBody), $fetch);
    }
    /**
     * Retrieves the list of VPC endpoints for the specified Neon organization.
     *
     * @param string $orgId The Neon organization ID
     * @param string $regionId The Neon region ID
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Vendor\Library\Generated\Model\VPCEndpointsResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
     */
    public function listOrganizationVPCEndpoints(string $orgId, string $regionId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\ListOrganizationVPCEndpoints($orgId, $regionId), $fetch);
    }
    /**
    * Deletes the VPC endpoint from the specified Neon organization.
    If you delete a VPC endpoint from a Neon organization, that VPC endpoint cannot
    be added back to the Neon organization.
    
    *
    * @param string $orgId The Neon organization ID
    * @param string $regionId The Neon region ID.
    Azure regions are currently not supported.
    
    * @param string $vpcEndpointId The VPC endpoint ID
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function deleteOrganizationVPCEndpoint(string $orgId, string $regionId, string $vpcEndpointId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\DeleteOrganizationVPCEndpoint($orgId, $regionId, $vpcEndpointId), $fetch);
    }
    /**
    * Retrieves the current state and configuration details of a specified VPC endpoint.
    
    *
    * @param string $orgId The Neon organization ID
    * @param string $regionId The Neon region ID.
    Azure regions are currently not supported.
    
    * @param string $vpcEndpointId The VPC endpoint ID
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\VPCEndpointDetails|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function getOrganizationVPCEndpointDetails(string $orgId, string $regionId, string $vpcEndpointId, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetOrganizationVPCEndpointDetails($orgId, $regionId, $vpcEndpointId), $fetch);
    }
    /**
    * Assigns a VPC endpoint to a Neon organization or updates its existing assignment.
    
    *
    * @param string $orgId The Neon organization ID
    * @param string $regionId The Neon region ID.
    Azure regions are currently not supported.
    
    * @param string $vpcEndpointId The VPC endpoint ID
    * @param \Vendor\Library\Generated\Model\VPCEndpointAssignment $requestBody 
    * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
    *
    * @return null|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
    */
    public function assignOrganizationVPCEndpoint(string $orgId, string $regionId, string $vpcEndpointId, \Vendor\Library\Generated\Model\VPCEndpointAssignment $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\AssignOrganizationVPCEndpoint($orgId, $regionId, $vpcEndpointId, $requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Vendor\Library\Generated\Model\ActiveRegionsResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
     */
    public function getActiveRegions(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetActiveRegions(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Vendor\Library\Generated\Model\CurrentUserInfoResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
     */
    public function getCurrentUserInfo(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetCurrentUserInfo(), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Vendor\Library\Generated\Model\OrganizationsResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
     */
    public function getCurrentUserOrganizations(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetCurrentUserOrganizations(), $fetch);
    }
    /**
     * Transfers selected projects, identified by their IDs, from your personal account to a specified organization.
     *
     * @param \Vendor\Library\Generated\Model\TransferProjectsToOrganizationRequest $requestBody 
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     * @throws \Vendor\Library\Generated\Exception\TransferProjectsFromUserToOrgNotAcceptableException
     * @throws \Vendor\Library\Generated\Exception\TransferProjectsFromUserToOrgUnprocessableEntityException
     *
     * @return null|\Vendor\Library\Generated\Model\EmptyResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
     */
    public function transferProjectsFromUserToOrg(\Vendor\Library\Generated\Model\TransferProjectsToOrganizationRequest $requestBody, string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\TransferProjectsFromUserToOrg($requestBody), $fetch);
    }
    /**
     * @param string $fetch Fetch mode to use (can be OBJECT or RESPONSE)
     *
     * @return null|\Vendor\Library\Generated\Model\AuthDetailsResponse|\Vendor\Library\Generated\Model\GeneralError|\Psr\Http\Message\ResponseInterface
     */
    public function getAuthDetails(string $fetch = self::FETCH_OBJECT)
    {
        return $this->executeEndpoint(new \Vendor\Library\Generated\Endpoint\GetAuthDetails(), $fetch);
    }
    public static function create($httpClient = null, array $additionalPlugins = [], array $additionalNormalizers = [])
    {
        if (null === $httpClient) {
            $httpClient = \Http\Discovery\Psr18ClientDiscovery::find();
            $plugins = [];
            $uri = \Http\Discovery\Psr17FactoryDiscovery::findUriFactory()->createUri('https://console.neon.tech/api/v2');
            $plugins[] = new \Http\Client\Common\Plugin\AddHostPlugin($uri);
            $plugins[] = new \Http\Client\Common\Plugin\AddPathPlugin($uri);
            if (count($additionalPlugins) > 0) {
                $plugins = array_merge($plugins, $additionalPlugins);
            }
            $httpClient = new \Http\Client\Common\PluginClient($httpClient, $plugins);
        }
        $requestFactory = \Http\Discovery\Psr17FactoryDiscovery::findRequestFactory();
        $streamFactory = \Http\Discovery\Psr17FactoryDiscovery::findStreamFactory();
        $normalizers = [new \Symfony\Component\Serializer\Normalizer\ArrayDenormalizer(), new \Vendor\Library\Generated\Normalizer\JaneObjectNormalizer()];
        if (count($additionalNormalizers) > 0) {
            $normalizers = array_merge($normalizers, $additionalNormalizers);
        }
        $serializer = new \Symfony\Component\Serializer\Serializer($normalizers, [new \Symfony\Component\Serializer\Encoder\JsonEncoder(new \Symfony\Component\Serializer\Encoder\JsonEncode(), new \Symfony\Component\Serializer\Encoder\JsonDecode(['json_decode_associative' => true]))]);
        return new static($httpClient, $requestFactory, $serializer, $streamFactory);
    }
}