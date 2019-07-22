<?php

namespace Dockent\Connector;

use GuzzleHttp\Handler\CurlFactory;
use GuzzleHttp\Handler\CurlFactoryInterface;
use GuzzleHttp\Promise\PromiseInterface;
use Psr\Http\Message\RequestInterface;

/**
 * Class CurlHandler
 * @package Dockent\Connector
 */
class CurlHandler
{
    /**
     * @var CurlFactoryInterface
     */
    private $factory;

    /**
     * CurlHandler constructor.
     * @param array $options
     */
    public function __construct(array $options = [])
    {
        $this->factory = isset($options['handle_factory'])
            ? $options['handle_factory']
            : new CurlFactory(3);
    }

    /**
     * @param RequestInterface $request
     * @param array $options
     * @return PromiseInterface
     */
    public function __invoke(RequestInterface $request, array $options) : PromiseInterface
    {
        if (isset($options['delay'])) {
            usleep($options['delay'] * 1000);
        }
        $easy = $this->factory->create($request, $options);
        curl_setopt($easy->handle, CURLOPT_UNIX_SOCKET_PATH, '/var/run/docker.sock');
        curl_exec($easy->handle);
        $easy->errno = curl_errno($easy->handle);

        return CurlFactory::finish($this, $easy, $this->factory);
    }
}