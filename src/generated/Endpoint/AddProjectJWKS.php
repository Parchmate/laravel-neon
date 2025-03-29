<?php

namespace Parchmate\LaravelNeon\Generated\Endpoint;

class AddProjectJWKS extends \Parchmate\LaravelNeon\Generated\Runtime\Client\BaseEndpoint implements \Parchmate\LaravelNeon\Generated\Runtime\Client\Endpoint
{
    protected $project_id;
    /**
    * Add a new JWKS URL to a project, such that it can be used for verifying JWTs used as the authentication mechanism for the specified project.
    
    The URL must be a valid HTTPS URL that returns a JSON Web Key Set.
    
    The `provider_name` field allows you to specify which authentication provider you're using (e.g., Clerk, Auth0, AWS Cognito, etc.).
    
    The `branch_id` can be used to specify on which branches the JWKS URL will be accepted. If not specified, then it will work on any branch.
    
    The `role_names` can be used to specify for which roles the JWKS URL will be accepted.
    
    The `jwt_audience` can be used to specify which "aud" values should be accepted by Neon in the JWTs that are used for authentication.
    
    *
    * @param string $projectId The Neon project ID
    * @param \Parchmate\LaravelNeon\Generated\Model\AddProjectJWKSRequest $requestBody 
    */
    public function __construct(string $projectId, \Parchmate\LaravelNeon\Generated\Model\AddProjectJWKSRequest $requestBody)
    {
        $this->project_id = $projectId;
        $this->body = $requestBody;
    }
    use \Parchmate\LaravelNeon\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return str_replace(['{project_id}'], [$this->project_id], '/projects/{project_id}/jwks');
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Parchmate\LaravelNeon\Generated\Model\AddProjectJWKSRequest) {
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
     * @return null|\Parchmate\LaravelNeon\Generated\Model\JWKSCreationOperation|\Parchmate\LaravelNeon\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (201 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Parchmate\LaravelNeon\Generated\Model\JWKSCreationOperation', 'json');
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