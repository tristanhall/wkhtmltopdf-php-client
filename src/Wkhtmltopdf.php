<?php

namespace MinuteMan\WkhtmltopdfClient;

use Illuminate\Support\Arr;
use Illuminate\Support\Str;

/**
 * Class Wkhtmltopdf
 * An instance of a PDF that contains markup, flags, and options that can be sent to the Wkhtmltopdf Microservice.
 *
 * @package MinuteMan\WkhtmltopdfClient
 */
class Wkhtmltopdf
{

    /**
     * Instance of the ApiClient class to submit the PDF request.
     *
     * @var ApiClient
     */
    protected ApiClient $apiClient;

    /**
     * URL to download HTML markup for the PDF.
     *
     * @var string|null
     */
    protected ?string $url = null;

    /**
     * HTML markup to use for the PDF.
     *
     * @var string|null
     */
    protected ?string $htmlMarkup = null;

    /**
     * @var array
     */
    protected array $flags = [];

    /**
     * @var array
     */
    protected array $options = [];

    /**
     * Wkhtmltopdf constructor.
     *
     * @param ApiClient $apiClient
     */
    public function __construct(ApiClient $apiClient)
    {
        $this->apiClient = $apiClient;
    }

    public function __call($name, $arguments)
    {
        if (substr($name, 0, 3) === 'set' && strlen($name) > 3) {
            $flagName = strtoupper(Str::snake(substr($name, 3)));

            // Handle flags in the form of method calls to "setFlagNameHere(true/false)"
            if (PdfFlag::hasConst($flagName) && count($arguments) > 0) {
                $isFlagEnabled = (bool)Arr::first($arguments);

                $this->setFlag(PdfFlag::$flagName(), $isFlagEnabled);
            }
        }
    }

    /**
     * Returns the instance of the ApiClient class assigned to this PDF.
     *
     * @return ApiClient
     */
    public function getApiClient(): ApiClient
    {
        return $this->apiClient;
    }

    /**
     * Set the URL to use for the PDF's HTML markup.
     *
     * @param string|null $url
     * @return $this
     */
    public function setUrl(?string $url): self
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Return the URL for the PDF's HTML markup.
     *
     * @return string|null
     */
    public function getUrl(): ?string
    {
        return $this->url;
    }

    /**
     * Returns true if the $url property is not empty and is a valid URL.
     *
     * @return bool
     */
    public function hasUrl(): bool
    {
        return !empty($this->url) && filter_var($this->url, FILTER_VALIDATE_URL);
    }

    /**
     * Set the HTML markup to use for the PDF.
     *
     * @param string|null $htmlMarkup
     * @return $this
     */
    public function setHtmlMarkup(?string $htmlMarkup): self
    {
        $this->htmlMarkup = $htmlMarkup;

        return $this;
    }

    /**
     * Return the HTML string for the PDF.
     *
     * @return string|null
     */
    public function getHtmlMarkup(): ?string
    {
        return $this->htmlMarkup;
    }

    /**
     * Returns true if the $htmlMarkup property is not empty and is a string.
     *
     * @return bool
     */
    public function hasHtmlMarkup(): bool
    {
        return !empty($this->htmlMarkup) && is_string($this->htmlMarkup);
    }

    /**
     * Enable or disable a flag.
     *
     * @param PdfFlag $flag
     * @param bool    $isEnabled
     * @return $this
     */
    public function setFlag(PdfFlag $flag, bool $isEnabled): self
    {
        Arr::set($this->flags, $flag->value(), $isEnabled);

        return $this;
    }

    /**
     * Returns the Base64 encoded bytes of the PDF file.
     *
     * @return string
     */
    public function getBase64Bytes(): string
    {
        return '';
    }

    /**
     * @todo submit the API request, decode the base64 encoded response and save the output to a file.
     * @param string $path
     * @return bool
     */
    public function saveFile(string $path): bool
    {
        return true;
    }

}