<?php

namespace Dockent\OpenAPI\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Joli\Jane\OpenApi\Runtime\Client\Resource;
class SessionExperimentalResource extends Resource
{
    /**
    * Start a new interactive session with a server. Session allows server to call back to the client for advanced capabilities.
    
    > **Note**: This endpoint is *experimental* and only available if the daemon is started with experimental
    > features enabled. The specifications for this endpoint may still change in a future version of the API.
    
    ### Hijacking
    
    This endpoint hijacks the HTTP connection to HTTP2 transport that allows the client to expose gPRC services on that connection.
    
    For example, the client sends this request to upgrade the connection:
    
    ```
    POST /session HTTP/1.1
    Upgrade: h2c
    Connection: Upgrade
    ```
    
    The Docker daemon will respond with a `101 UPGRADED` response follow with the raw stream:
    
    ```
    HTTP/1.1 101 UPGRADED
    Connection: Upgrade
    Upgrade: h2c
    ```
    
    *
    * @param array  $parameters List of parameters
    * @param string $fetch      Fetch mode (object or response)
    *
    * @return \Psr\Http\Message\ResponseInterface|string
    */
    public function session($parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1.32/session';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('101' == $response->getStatusCode()) {
                return null;
            }
            if ('400' == $response->getStatusCode()) {
                return (string) $response->getBody();
            }
            if ('500' == $response->getStatusCode()) {
                return (string) $response->getBody();
            }
        }
        return $response;
    }
}