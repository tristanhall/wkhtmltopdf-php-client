<?php

namespace MinuteMan\WkhtmltopdfClient;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\GuzzleException;
use Exception;
use GuzzleHttp\HandlerStack;
use GuzzleHttp\Middleware;
use GuzzleHttp\Utils;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;
use Symfony\Component\HttpFoundation\Request;

/**
 * Class ApiClient
 * Provides an interface for creating PDF files using the Wkhtmltopdf Microservice.
 *
 * @package MinuteMan\WkhtmltopdfClient
 */
class ApiClient
{

    const USER_AGENT = 'mms-wkhtmltopdf-php-client';

    const VERSION = '1.0.2';

    /**
     * The API URL to use for HTTP requests.
     *
     * @var string
     */
    protected string $endpointUrl = '';

    /**
     * The API key to use for authenticating HTTP requests.
     *
     * @var string
     */
    protected string $apiKey = '';

    /**
     * Initialize the basic properties.
     *
     * @param string $endpointUrl
     * @param string $apiKey
     */
    public function __construct(string $endpointUrl = '', string $apiKey = '')
    {
        $this->setEndpointUrl($endpointUrl);
        $this->setApiKey($apiKey);
    }

    /**
     * Sets a new endpoint URL to use for HTTP requests.
     *
     * @param string $endpointUrl
     * @return $this
     */
    public function setEndpointUrl(string $endpointUrl): self
    {
        $this->endpointUrl = $endpointUrl;

        return $this;
    }

    /**
     * Sets a new API key to use for HTTP requests.
     *
     * @param string $apiKey
     * @return $this
     */
    public function setApiKey(string $apiKey): self
    {
        $this->apiKey = $apiKey;

        return $this;
    }

    public function getGuzzleStack(): HandlerStack
    {
        $stack = new HandlerStack();
        $stack->setHandler(Utils::chooseHandler());

        $stack->push(Middleware::mapRequest(function (RequestInterface $request) {
            $request->withHeader('User-Agent', sprintf('%s/%s', self::USER_AGENT, self::VERSION));
            $request->withHeader('X-Api-Key', $this->apiKey);
            $request->withHeader('Content-Type', 'application/json');
            $request->withHeader('Accept', 'application/pdf');

            return $request;
        }));

        return $stack;
    }

    /**
     * @param array $postData
     * @throws GuzzleException|Exception
     * @return ResponseInterface
     */
    public function sendRequest(array $postData): ResponseInterface
    {
        $guzzle = new HttpClient(['handler' => $this->getGuzzleStack()]);
        $response = $guzzle->request(
            Request::METHOD_POST,
            $this->endpointUrl,
            [
                'json' => $postData
            ]
        );

        if ($response->getStatusCode() === 200) {
            return $response;
        } else {
            throw new Exception(sprintf(
                'Unexpected Response: %d %s %s',
                $response->getStatusCode(),
                $response->getReasonPhrase(),
                $response->getBody()->getContents()
            ));
        }
    }

}