<?php

namespace Parchmate\LaravelNeon\Generated\Exception;

class GetConsumptionHistoryPerProjectNotFoundException extends NotFoundException
{
    /**
     * @var \Parchmate\LaravelNeon\Generated\Model\GeneralError
     */
    private $generalError;
    /**
     * @var \Psr\Http\Message\ResponseInterface
     */
    private $response;
    public function __construct(\Parchmate\LaravelNeon\Generated\Model\GeneralError $generalError, \Psr\Http\Message\ResponseInterface $response)
    {
        parent::__construct('Account is not a member of the organization specified by `org_id`.');
        $this->generalError = $generalError;
        $this->response = $response;
    }
    public function getGeneralError(): \Parchmate\LaravelNeon\Generated\Model\GeneralError
    {
        return $this->generalError;
    }
    public function getResponse(): \Psr\Http\Message\ResponseInterface
    {
        return $this->response;
    }
}