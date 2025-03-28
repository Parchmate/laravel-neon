<?php

namespace Vendor\Library\Generated\Exception;

class TransferProjectsFromOrgToOrgUnprocessableEntityException extends UnprocessableEntityException
{
    /**
     * @var \Vendor\Library\Generated\Model\ProjectsWithIntegrationResponse
     */
    private $projectsWithIntegrationResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Vendor\Library\Generated\Model\ProjectsWithIntegrationResponse $projectsWithIntegrationResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('One or more of the provided project IDs have GitHub or Vercel integrations installed. Transferring integration projects is currently not supported');
        $this->projectsWithIntegrationResponse = $projectsWithIntegrationResponse;
        $this->response = $response;
    }
    public function getProjectsWithIntegrationResponse(): \Vendor\Library\Generated\Model\ProjectsWithIntegrationResponse
    {
        return $this->projectsWithIntegrationResponse;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}