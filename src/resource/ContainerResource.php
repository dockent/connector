<?php
/**
 * Created by PhpStorm.
 * User: vpozdnyakov
 * Date: 20.11.17
 * Time: 10:57
 */

namespace Dockent\Connector\resource;

use Dockent\OpenAPI\Resource\ContainerResource as ContainerResourceAPI;
use Joli\Jane\OpenApi\Runtime\Client\QueryParam;

/**
 * Class ContainerResource
 * @package Dockent\Connector\resource
 */
class ContainerResource extends ContainerResourceAPI
{
    /**
     * Return raw json decoded data because DeSerialize throw some errors
     * @param array $parameters
     * @param string $fetch
     * @return array|object|\Dockent\OpenAPI\Model\ErrorResponse
     */
    public function containerList($parameters = [], $fetch = ContainerResourceAPI::FETCH_OBJECT)
    {
        $queryParam = new QueryParam();
        $queryParam->setDefault('all', false);
        $queryParam->setDefault('limit', null);
        $queryParam->setDefault('size', false);
        $queryParam->setDefault('filters', null);
        $url = '/v1.32/containers/json' . ('?' . $queryParam->buildQueryString($parameters));
        $headers = array_merge(['Host' => 'localhost', 'Accept' => ['application/json']],
            $queryParam->buildHeaders($parameters));
        $body = $queryParam->buildFormDataString($parameters);
        $request = $this->messageFactory->createRequest('GET', $url, $headers, $body);
        $response = $this->httpClient->sendRequest($request);
        switch ($response->getStatusCode()) {
            case '200':
                return json_decode((string)$response->getBody(), true);
            case '400':
            case '500':
                return $this->serializer->deserialize((string)$response->getBody(),
                    'Dockent\OpenAPI\Model\ErrorResponse', 'json');
        }
        return $response;
    }
}