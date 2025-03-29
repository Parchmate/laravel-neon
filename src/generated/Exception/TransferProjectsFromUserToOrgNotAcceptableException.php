<?php

namespace Parchmate\LaravelNeon\Generated\Exception;

class TransferProjectsFromUserToOrgNotAcceptableException extends NotAcceptableException
{
    /**
     * @var \Parchmate\LaravelNeon\Generated\Model\LimitsUnsatisfiedResponse
     */
    private $limitsUnsatisfiedResponse;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Parchmate\LaravelNeon\Generated\Model\LimitsUnsatisfiedResponse $limitsUnsatisfiedResponse, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Transfer failed - the target organization has too many projects or its plan is incompatible with the source account. Reduce the number of projects or upgrade the target organization to increase its capacity.');
        $this->limitsUnsatisfiedResponse = $limitsUnsatisfiedResponse;
        $this->response = $response;
    }
    public function getLimitsUnsatisfiedResponse(): \Parchmate\LaravelNeon\Generated\Model\LimitsUnsatisfiedResponse
    {
        return $this->limitsUnsatisfiedResponse;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}