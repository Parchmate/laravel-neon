<?php

namespace Vendor\Library\Generated\Exception;

class TransferProjectsFromOrgToOrgNotAcceptableException extends NotAcceptableException
{
    /**
     * @var \Vendor\Library\Generated\Model\LimitsUnsatisfiedResponse
     */
    private $limitsUnsatisfiedResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Vendor\Library\Generated\Model\LimitsUnsatisfiedResponse $limitsUnsatisfiedResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Transfer failed - the target organization has too many projects or its plan is incompatible with the source organization. Reduce projects or upgrade the organization.');
        $this->limitsUnsatisfiedResponse = $limitsUnsatisfiedResponse;
        $this->response = $response;
    }
    public function getLimitsUnsatisfiedResponse(): \Vendor\Library\Generated\Model\LimitsUnsatisfiedResponse
    {
        return $this->limitsUnsatisfiedResponse;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}