<?php

namespace Dptsi\Sso\Requests;

class OidcLogoutRequest
{
    private $provider;
    private $clientId;
    private $clientSecret;
    private $postLogoutRedirectUri;
    private $prefetchedConfig;
    private $prefetchedJwks;

    public function __construct(
        $provider,
        $clientId,
        $clientSecret,
        $postLogoutRedirectUri,
        $prefetchedConfig = null,
        $prefetchedJwks = null
    ) {
        $this->provider = $provider;
        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->postLogoutRedirectUri = $postLogoutRedirectUri;
        $this->prefetchedConfig = $prefetchedConfig;
        $this->prefetchedJwks = $prefetchedJwks;
    }

    public function getProvider()
    {
        return $this->provider;
    }

    public function getClientId()
    {
        return $this->clientId;
    }

    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    public function getPostLogoutRedirectUri()
    {
        return $this->postLogoutRedirectUri;
    }

    public function getPrefetchedConfig()
    {
        return $this->prefetchedConfig;
    }
    
    public function getPrefetchedJwks()
    {
        return $this->prefetchedJwks;
    }
}

