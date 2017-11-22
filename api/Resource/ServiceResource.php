<?php

namespace Dockent\OpenAPI\Resource;

use Joli\Jane\OpenApi\Runtime\Client\QueryParam;
use Joli\Jane\OpenApi\Runtime\Client\Resource;
class ServiceResource extends Resource
{
    /**
    * 
    *
    * @param array  $parameters {
    *     @var string $filters A JSON encoded value of the filters (a `map[string][]string`) to process on the services list. Available filters:
    
    - `id=<service id>`
    - `label=<service label>`
    - `mode=["replicated"|"global"]`
    - `name=<service name>`
    
    * }
    * @param string $fetch      Fetch mode (object or response)
    *
    * @return \Psr\Http\Message\ResponseInterface|string
    */
    public function serviceList($parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('filters', NULL);
        $url = '/v1.32/services';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return (string) $response->getBody();
            }
            if ('500' == $response->getStatusCode()) {
                return (string) $response->getBody();
            }
            if ('503' == $response->getStatusCode()) {
                return (string) $response->getBody();
            }
        }
        return $response;
    }
    /**
     * 
     *
     * @param array $body 
     * @param array  $parameters {
     *     @var string $X-Registry-Auth A base64-encoded auth configuration for pulling from private registries. [See the authentication section for details.](#section/Authentication)
     * }
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|string
     */
    public function serviceCreate($body, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('X-Registry-Auth', NULL);
        $queryParam->setHeaderParameters(array('X-Registry-Auth'));
        $url = '/v1.32/services/create';
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost', 'Accept' => array('application/json'), 'Content-Type' => 'application/json'), $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($body, 'json');
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('201' == $response->getStatusCode()) {
                return (string) $response->getBody();
            }
            if ('400' == $response->getStatusCode()) {
                return (string) $response->getBody();
            }
            if ('403' == $response->getStatusCode()) {
                return (string) $response->getBody();
            }
            if ('409' == $response->getStatusCode()) {
                return (string) $response->getBody();
            }
            if ('500' == $response->getStatusCode()) {
                return (string) $response->getBody();
            }
            if ('503' == $response->getStatusCode()) {
                return (string) $response->getBody();
            }
        }
        return $response;
    }
    /**
     * 
     *
     * @param string $id ID or name of service.
     * @param array  $parameters List of parameters
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|string
     */
    public function serviceDelete($id, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $url = '/v1.32/services/{id}';
        $url = str_replace('{id}', urlencode($id), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('DELETE', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return null;
            }
            if ('404' == $response->getStatusCode()) {
                return (string) $response->getBody();
            }
            if ('500' == $response->getStatusCode()) {
                return (string) $response->getBody();
            }
            if ('503' == $response->getStatusCode()) {
                return (string) $response->getBody();
            }
        }
        return $response;
    }
    /**
     * 
     *
     * @param string $id ID or name of service.
     * @param array  $parameters {
     *     @var bool $insertDefaults Fill empty fields with default values.
     * }
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|string
     */
    public function serviceInspect($id, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('insertDefaults', false);
        $url = '/v1.32/services/{id}';
        $url = str_replace('{id}', urlencode($id), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost'), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return (string) $response->getBody();
            }
            if ('404' == $response->getStatusCode()) {
                return (string) $response->getBody();
            }
            if ('500' == $response->getStatusCode()) {
                return (string) $response->getBody();
            }
            if ('503' == $response->getStatusCode()) {
                return (string) $response->getBody();
            }
        }
        return $response;
    }
    /**
     * 
     *
     * @param string $id ID or name of service.
     * @param array $body 
     * @param array  $parameters {
     *     @var int $version The version number of the service object being updated. This is required to avoid conflicting writes.
     *     @var string $registryAuthFrom If the X-Registry-Auth header is not specified, this parameter indicates where to find registry authorization credentials. The valid values are `spec` and `previous-spec`.
     *     @var string $rollback Set to this parameter to `previous` to cause a server-side rollback to the previous service spec. The supplied spec will be ignored in this case.
     *     @var string $X-Registry-Auth A base64-encoded auth configuration for pulling from private registries. [See the authentication section for details.](#section/Authentication)
     * }
     * @param string $fetch      Fetch mode (object or response)
     *
     * @return \Psr\Http\Message\ResponseInterface|string
     */
    public function serviceUpdate($id, $body, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setRequired('version');
        $queryParam->setDefault('registryAuthFrom', 'spec');
        $queryParam->setDefault('rollback', NULL);
        $queryParam->setDefault('X-Registry-Auth', NULL);
        $queryParam->setHeaderParameters(array('X-Registry-Auth'));
        $url = '/v1.32/services/{id}/update';
        $url = str_replace('{id}', urlencode($id), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost', 'Accept' => array('application/json'), 'Content-Type' => 'application/json'), $queryParam->buildHeaders($parameters));
        $body = $this->serializer->serialize($body, 'json');
        $request = $this->messageFactory->createRequest('POST', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('200' == $response->getStatusCode()) {
                return (string) $response->getBody();
            }
            if ('400' == $response->getStatusCode()) {
                return (string) $response->getBody();
            }
            if ('404' == $response->getStatusCode()) {
                return (string) $response->getBody();
            }
            if ('500' == $response->getStatusCode()) {
                return (string) $response->getBody();
            }
            if ('503' == $response->getStatusCode()) {
                return (string) $response->getBody();
            }
        }
        return $response;
    }
    /**
    * Get `stdout` and `stderr` logs from a service.
    
    **Note**: This endpoint works only for services with the `json-file` or `journald` logging drivers.
    
    *
    * @param string $id ID or name of the service
    * @param array  $parameters {
    *     @var bool $details Show service context and extra details provided to logs.
    *     @var bool $follow Return the logs as a stream.
    
    This will return a `101` HTTP response with a `Connection: upgrade` header, then hijack the HTTP connection to send raw output. For more information about hijacking and the stream format, [see the documentation for the attach endpoint](#operation/ContainerAttach).
    
    *     @var bool $stdout Return logs from `stdout`
    *     @var bool $stderr Return logs from `stderr`
    *     @var int $since Only return logs since this time, as a UNIX timestamp
    *     @var bool $timestamps Add timestamps to every log line
    *     @var string $tail Only return this number of log lines from the end of the logs. Specify as an integer or `all` to output all log lines.
    * }
    * @param string $fetch      Fetch mode (object or response)
    *
    * @return \Psr\Http\Message\ResponseInterface|string
    */
    public function serviceLogs($id, $parameters = array(), $fetch = self::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('details', false);
        $queryParam->setDefault('follow', false);
        $queryParam->setDefault('stdout', false);
        $queryParam->setDefault('stderr', false);
        $queryParam->setDefault('since', 0);
        $queryParam->setDefault('timestamps', false);
        $queryParam->setDefault('tail', 'all');
        $url = '/v1.32/services/{id}/logs';
        $url = str_replace('{id}', urlencode($id), $url);
        $url = $url . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(array('Host' => 'localhost', 'Accept' => array('application/json')), $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $promise = $this->httpClient->sendAsyncRequest($request);
        if (self::FETCH_PROMISE === $fetch) {
            return $promise;
        }
        $response = $promise->wait();
        if (self::FETCH_OBJECT == $fetch) {
            if ('101' == $response->getStatusCode()) {
                return null;
            }
            if ('200' == $response->getStatusCode()) {
                return null;
            }
            if ('404' == $response->getStatusCode()) {
                return (string) $response->getBody();
            }
            if ('500' == $response->getStatusCode()) {
                return (string) $response->getBody();
            }
            if ('503' == $response->getStatusCode()) {
                return (string) $response->getBody();
            }
        }
        return $response;
    }
}