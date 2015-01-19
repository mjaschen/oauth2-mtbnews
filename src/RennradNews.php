<?php
/**
 * oAuth 2 Provider for Rennrad-News.de
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
use League\OAuth2\Client\Token\AccessToken;

/**
 * oAuth 2 Provider for Rennrad-News.de
 *
 * @category MarcusJaschen
 * @package  OAuth2
 * @author   Marcus Jaschen <mail@marcusjaschen.de>
 * @license  http://www.opensource.org/licenses/mit-license MIT License
 * @link     https://www.marcusjaschen.de/
 */
class RennradNews extends AbstractProvider
{
    /**
     * Get the URL that this provider uses to begin authorization.
     *
     * @return string
     */
    public function urlAuthorize()
    {
        return 'https://www.rennrad-news.de/forum/api/oauth/authorize';
    }

    /**
     * Get the URL that this provider users to request an access token.
     *
     * @return string
     */
    public function urlAccessToken()
    {
        return 'https://www.rennrad-news.de/forum/api/oauth/token';
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
        return 'https://www.rennrad-news.de/forum/api/users/me?oauth_token=' . (string) $token;
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
        // return all data unprocessed (as instance of \stdClass)
        return $response;
    }
}
