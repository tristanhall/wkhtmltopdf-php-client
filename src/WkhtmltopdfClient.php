<?php

namespace MinuteMan\WkhtmltopdfClient;

use Exception;
use GuzzleHttp\Client;

/**
 * Class WkhtmltopdfClient
 * Provides an interface for creating PDF files using the Wkhtmltopdf Microservice.
 *
 * @package MinuteMan\WkhtmltopdfClient
 */
class WkhtmltopdfClient
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
     * The Guzzle Client instance for making requests to the API.
     *
     * @var Client
     */
    protected Client $guzzle;

    /**
     * Initialize the basic properties.
     *
     * @param string $endpointUrl
     * @param string $apiKey
     */
    public function __construct(string $endpointUrl = '', string $apiKey = '')
    {
        $this->endpointUrl = $endpointUrl;
        $this->apiKey = $apiKey;
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
     * Sets up a new instance of the Guzzle Client using the configured endpoint URL as the base_uri.
     *
     * @return $this
     */
    protected function setupGuzzleClient(): self
    {
        $this->guzzle = new Client(['base_uri' => $this->endpointUrl]);

        return $this;
    }

    /**
     * Returns the Guzzle Client instance. If the instance does not exist, then this function calls setupGuzzleClient()
     * to create one.
     *
     * @throws Exception
     * @return Client
     */
    protected function getGuzzleClient(): Client
    {
        if ($this->guzzle instanceof Client) {
            return $this->guzzle;
        } else {
            $this->setupGuzzleClient();

            if ($this->guzzle instanceof Client) {
                return $this->guzzle;
            } else {
                throw new Exception('Failed to setup Guzzle Client');
            }
        }
    }

}