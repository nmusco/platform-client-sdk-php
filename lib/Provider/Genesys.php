<?php

declare(strict_types=1);

namespace PureCloudPlatform\Client\V2\Provider;

use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use League\OAuth2\Client\Token\AccessToken;
use League\OAuth2\Client\Tool\BearerAuthorizationTrait;
use Psr\Http\Message\ResponseInterface;

class Genesys extends AbstractProvider
{
    use BearerAuthorizationTrait;

    const PATH_TOKEN = '/oauth/token';
    const PATH_AUTHORIZATION = '/oauth/authorize';
    const PATH_ME = '/api/v2/tokens/me';
    const DEFAULT_LOGIN_BASE_URL = 'login.mypurecloud.com';
    const DEFAULT_API_BASE_URL = 'api.mypurecloud.com';

    /**
     *
     * {@inheritdoc}
     *
     * @see \League\OAuth2\Client\Provider\AbstractProvider::getBaseAccessTokenUrl()
     */
    public function getBaseAccessTokenUrl(array $params)
    {
        if(isset($params['baseUrl']))
            $baseUrl = $params['baseUrl'];
        else
            $baseUrl = self::DEFAULT_LOGIN_BASE_URL;
        
        return 'https://' . $baseUrl . self::PATH_TOKEN;
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \League\OAuth2\Client\Provider\AbstractProvider::getBaseAuthorizationUrl()
     */
    public function getBaseAuthorizationUrl()
    {      
        return 'https://' . self::DEFAULT_LOGIN_BASE_URL . self::PATH_AUTHORIZATION;
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \League\OAuth2\Client\Provider\AbstractProvider::getDefaultScopes()
     */
    protected function getDefaultScopes()
    {
        return [];
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \League\OAuth2\Client\Provider\AbstractProvider::checkResponse()
     */
    protected function checkResponse(ResponseInterface $response, $data)
    {
        if (isset($data['error'])) {
            $message = $data['error_description'] ?? $data['error'];
            throw new IdentityProviderException($message, $response->getStatusCode(), $response);           
        }
    }

    /**
     * 
     * {@inheritDoc}
     * @see \League\OAuth2\Client\Provider\AbstractProvider::getResourceOwnerDetailsUrl()
     */
    public function getResourceOwnerDetailsUrl(AccessToken $token)
    {
        return 'https://' . self::DEFAULT_API_BASE_URL . self::PATH_ME;
    }

    /**
     *
     * {@inheritdoc}
     *
     * @see \League\OAuth2\Client\Provider\AbstractProvider::createResourceOwner()
     */
    protected function createResourceOwner(array $response, AccessToken $token)
    {
        return null;
    }
}