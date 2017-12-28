<?php
/**
 * oAuth 2 Provider for MTB-News.de
 *
 * This provider integrates in the oAuth 2.0 Client package vom "The PHP League"
 *
 * PHP version 5.5
 *
 * @category  MarcusJaschen
 * @package   OAuth2
 * @author    Marcus Jaschen <mjaschen@gmail.com>
 * @copyright 2015 Marcus Jaschen
 * @license   http://www.opensource.org/licenses/mit-license MIT License
 * @link      https://www.marcusjaschen.de/
 */

namespace MarcusJaschen\OAuth2\Client\Provider;

use League\OAuth2\Client\Provider\AbstractProvider;
use League\OAuth2\Client\Provider\Exception\IdentityProviderException;
use League\OAuth2\Client\Provider\ResourceOwnerInterface;
use League\OAuth2\Client\Token\AccessToken;
use Psr\Http\Message\ResponseInterface;

/**
 * oAuth 2 Provider for MTB-News.de
 *
 * @category MarcusJaschen
 * @package  OAuth2
 * @author   Marcus Jaschen <mail@marcusjaschen.de>
 * @license  http://www.opensource.org/licenses/mit-license MIT License
 * @link     https://www.marcusjaschen.de/
 */
class MTBNews extends AbstractProvider implements ProviderInterface
{
    /**
     * Get the URL that this provider uses to begin authorization.
     *
     * @return string
     */
    public function urlAuthorize()
    {
    }

    /**
     * Get the URL that this provider users to request an access token.
     *
     * @return string
     */
    public function urlAccessToken()
    {
    }

    /**
     * Get the URL that this provider uses to request user details.
     *
     * @param AccessToken $token
     *
     * @return string
     */
    public function urlUserDetails(AccessToken $token)
    {
    }

    /**
     * Given an object response from the server, process the user details into a format expected by the user
     * of the client.
     *
     * @param object $response
     * @param AccessToken $token
     *
     * @return mixed
     */
    public function userDetails($response, AccessToken $token)
    {
    }

    /**
     * Returns the base URL for authorizing a client.
     *
     * Eg. https://oauth.service.com/authorize
     *
     * @return string
     */
    public function getBaseAuthorizationUrl()
    {
        return 'https://www.mtb-news.de/forum/api/oauth/authorize';
    }

    /**
     * Returns the base URL for requesting an access token.
     *
     * Eg. https://oauth.service.com/token
     *
     * @param array $params
     *
     * @return string
     */
    public function getBaseAccessTokenUrl(array $params)
    {
        return 'https://www.mtb-news.de/forum/api/oauth/token';
    }

    /**
     * Returns the URL for requesting the resource owner's details.
     *
     * @param AccessToken $token
     *
     * @return string
     */
    public function getResourceOwnerDetailsUrl(AccessToken $token)
    {
        return 'https://www.mtb-news.de/forum/api/users/me?oauth_token=' . (string) $token;
    }

    /**
     * Returns the default scopes used by this provider.
     *
     * This should only be the scopes that are required to request the details
     * of the resource owner, rather than all the available scopes.
     *
     * @return array
     */
    protected function getDefaultScopes()
    {
        return [
            'read',
        ];
    }

    /**
     * Checks a provider response for errors.
     *
     * @throws IdentityProviderException
     *
     * @param  ResponseInterface $response
     * @param  array|string $data Parsed response data
     *
     * @return void
     */
    protected function checkResponse(ResponseInterface $response, $data)
    {
        if ($response->getStatusCode() != 200) {
            throw new IdentityProviderException(
                "Invalid response from oAuth Server",
                $response->getStatusCode(),
                $response
            );
        }
    }

    /**
     * Generates a resource owner object from a successful resource owner
     * details request.
     *
     * @param  array $response
     * @param  AccessToken $token
     *
     * @return ResourceOwnerInterface
     */
    protected function createResourceOwner(array $response, AccessToken $token)
    {
        // return all data unprocessed
        return $response;
}}
