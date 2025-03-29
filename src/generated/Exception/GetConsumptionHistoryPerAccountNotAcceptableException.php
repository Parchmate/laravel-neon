<?php

namespace Parchmate\LaravelNeon\Generated\Exception;

class GetConsumptionHistoryPerAccountNotAcceptableException extends NotAcceptableException
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
        parent::__construct('The specified `date-time` range is outside the boundaries of the specified `granularity`.
Adjust your `from` and `to` values or select a different `granularity`.
');
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