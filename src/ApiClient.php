<?php

namespace MinuteMan\WkhtmltopdfClient;

use GuzzleHttp\Client as HttpClient;
use GuzzleHttp\Exception\GuzzleException;
use GuzzleHttp\RequestOptions;
use Psr\Http\Message\ResponseInterface;

/**
 * Class ApiClient
 * Provides an interface for creating PDF files using the Wkhtmltopdf Microservice.
 *
 * @package MinuteMan\WkhtmltopdfClient
 */
class ApiClient
{

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

    /**
     * @param array $postData
     * @throws GuzzleException
     * @return ResponseInterface
     */
    public function sendRequest(array $postData): ResponseInterface
    {
        return (new HttpClient())->post($this->endpointUrl, [
            RequestOptions::HEADERS => [
                'User-Agent' => 'minutemanservices/mms-wkhtmltopdf-php-client',
                'X-Api-Key'  => $this->apiKey,
            ],
            RequestOptions::JSON    => $postData,
        ]);
    }

}