<?php

namespace MinuteMan\WkhtmltopdfClient;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Exception;
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

    const USER_AGENT = 'mms-wkhtmltopdf-php-client';

    const VERSION = '1.0.4';

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
     * Returns the options to apply to the HTTP request.
     *
     * @return array
     */
    public function getRequestHeaders(): array
    {
        return [
            'User-Agent' => sprintf('%s/%s', self::USER_AGENT, self::VERSION),
            'X-Api-Key'  => $this->apiKey,
            'Accept'     => 'application/pdf',
        ];
    }

    /**
     * @param array $postData
     * @throws GuzzleException|Exception
     * @return ResponseInterface
     */
    public function sendRequest(array $postData): ResponseInterface
    {
        $response = (new Client())->post($this->endpointUrl, [
            RequestOptions::HEADERS => $this->getRequestHeaders(),
            RequestOptions::JSON => json_encode($postData, JSON_THROW_ON_ERROR),
        ]);

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