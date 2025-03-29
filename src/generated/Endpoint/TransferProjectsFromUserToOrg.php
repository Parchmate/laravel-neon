<?php

namespace Parchmate\LaravelNeon\Generated\Endpoint;

class TransferProjectsFromUserToOrg extends \Parchmate\LaravelNeon\Generated\Runtime\Client\BaseEndpoint implements \Parchmate\LaravelNeon\Generated\Runtime\Client\Endpoint
{
    /**
     * Transfers selected projects, identified by their IDs, from your personal account to a specified organization.
     *
     * @param \Parchmate\LaravelNeon\Generated\Model\TransferProjectsToOrganizationRequest $requestBody 
     */
    public function __construct(\Parchmate\LaravelNeon\Generated\Model\TransferProjectsToOrganizationRequest $requestBody)
    {
        $this->body = $requestBody;
    }
    use \Parchmate\LaravelNeon\Generated\Runtime\Client\EndpointTrait;
    public function getMethod(): string
    {
        return 'POST';
    }
    public function getUri(): string
    {
        return '/users/me/projects/transfer';
    }
    public function getBody(\Symfony\Component\Serializer\SerializerInterface $serializer, $streamFactory = null): array
    {
        if ($this->body instanceof \Parchmate\LaravelNeon\Generated\Model\TransferProjectsToOrganizationRequest) {
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
     * @throws \Parchmate\LaravelNeon\Generated\Exception\TransferProjectsFromUserToOrgNotAcceptableException
     * @throws \Parchmate\LaravelNeon\Generated\Exception\TransferProjectsFromUserToOrgUnprocessableEntityException
     *
     * @return null|\Parchmate\LaravelNeon\Generated\Model\EmptyResponse|\Parchmate\LaravelNeon\Generated\Model\GeneralError
     */
    protected function transformResponseBody(\Psr\Http\Message\ResponseInterface $response, \Symfony\Component\Serializer\SerializerInterface $serializer, ?string $contentType = null)
    {
        $status = $response->getStatusCode();
        $body = (string) $response->getBody();
        if (is_null($contentType) === false && (200 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            return $serializer->deserialize($body, 'Parchmate\LaravelNeon\Generated\Model\EmptyResponse', 'json');
        }
        if (is_null($contentType) === false && (406 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Parchmate\LaravelNeon\Generated\Exception\TransferProjectsFromUserToOrgNotAcceptableException($serializer->deserialize($body, 'Parchmate\LaravelNeon\Generated\Model\LimitsUnsatisfiedResponse', 'json'), $response);
        }
        if (is_null($contentType) === false && (422 === $status && mb_strpos($contentType, 'application/json') !== false)) {
            throw new \Parchmate\LaravelNeon\Generated\Exception\TransferProjectsFromUserToOrgUnprocessableEntityException($serializer->deserialize($body, 'Parchmate\LaravelNeon\Generated\Model\ProjectsWithIntegrationResponse', 'json'), $response);
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