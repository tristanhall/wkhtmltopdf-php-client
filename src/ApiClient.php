<?php

namespace MinuteMan\WkhtmltopdfClient;

use Exception;
use GuzzleHttp\Client as HttpClient;

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
     * The Guzzle Http Client instance for making requests to the API.
     *
     * @var HttpClient
     */
    protected HttpClient $guzzle;

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
     * Sets up a new instance of the Guzzle Http Client using the configured endpoint URL as the base_uri.
     *
     * @return $this
     */
    protected function setupGuzzleClient(): self
    {
        $this->guzzle = new HttpClient(['base_uri' => $this->endpointUrl]);

        return $this;
    }

    /**
     * Returns the Guzzle Http Client instance. If the instance does not exist, then this function calls setupGuzzleClient()
     * to create one.
     *
     * @throws Exception
     * @return HttpClient
     */
    protected function getGuzzleClient(): HttpClient
    {
        if ($this->guzzle instanceof HttpClient) {
            return $this->guzzle;
        } else {
            $this->setupGuzzleClient();

            if ($this->guzzle instanceof HttpClient) {
                return $this->guzzle;
            } else {
                throw new Exception('Failed to setup Guzzle Http Client');
            }
        }
    }

}