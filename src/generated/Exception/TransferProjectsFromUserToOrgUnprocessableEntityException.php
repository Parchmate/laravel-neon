<?php

namespace Parchmate\LaravelNeon\Generated\Exception;

class TransferProjectsFromUserToOrgUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Parchmate\LaravelNeon\Generated\Model\ProjectsWithIntegrationResponse
     */
    private $projectsWithIntegrationResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Parchmate\LaravelNeon\Generated\Model\ProjectsWithIntegrationResponse $projectsWithIntegrationResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('One or more of the provided project IDs have GitHub or Vercel integrations installed. Transferring integration projects is currently not supported');
        $this->projectsWithIntegrationResponse = $projectsWithIntegrationResponse;
        $this->response = $response;
    }
    public function getProjectsWithIntegrationResponse(): \Parchmate\LaravelNeon\Generated\Model\ProjectsWithIntegrationResponse
    {
        return $this->projectsWithIntegrationResponse;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}