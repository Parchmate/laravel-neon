<?php

namespace Parchmate\LaravelNeon\Generated\Authentication;

class TokenCookieAuthAuthentication implements \Jane\Component\OpenApiRuntime\Client\AuthenticationPlugin
{
    private $apiKey;
    public function __construct(string $apiKey)
    {
        $this->{'apiKey'} = $apiKey;
    }
    public function authentication(\Psr\Http\Message\RequestInterface $request): \Psr\Http\Message\RequestInterface
    {
        return $request;
    }
    public function getScope(): string
    {
        return 'TokenCookieAuth';
    }
}