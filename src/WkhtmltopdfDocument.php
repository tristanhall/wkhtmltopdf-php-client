<?php

namespace MinuteMan\WkhtmltopdfClient;

use BadFunctionCallException;
use BadMethodCallException;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use Illuminate\Support\Str;
use InvalidArgumentException;
use JsonException;
use Psr\Http\Message\ResponseInterface;

/**
 * Class WkhtmltopdfDocument
 * An instance of a PDF that contains markup, flags, and options that can be sent to the Wkhtmltopdf Microservice.
 *
 * @package MinuteMan\WkhtmltopdfClient
 * @method self setGrayscale()
 * @method self setNoPdfCompression()
 * @method self setLowQuality()
 * @method self setBackground()
 * @method self setNoBackground()
 * @method self setDisableExternalLinks()
 * @method self setEnableExternalLinks()
 * @method self setDisableForms()
 * @method self setEnableForms()
 * @method self setImages()
 * @method self setNoImages()
 * @method self setDisableInternalLinks()
 * @method self setEnableInternalLinks()
 * @method self setDisableJavascript()
 * @method self setEnableJavascript()
 * @method self setKeepRelativeLinks()
 * @method self setResolveRelativeLinks()
 * @method self setPrintMediaType()
 * @method self setNoPrintMediaType()
 * @method self setDisableSmartShrinking()
 * @method self setEnableSmartShrinking()
 * @method self setFooterLine()
 * @method self setNoFooterLine()
 * @method self setHeaderLine()
 * @method self setNoHeaderLine()
 * @method self setDpi(mixed $value)
 * @method self setImageDpi(mixed $value)
 * @method self setImageQuality(mixed $value)
 * @method self setMarginBottom(mixed $value)
 * @method self setMarginLeft(mixed $value)
 * @method self setMarginTop(mixed $value)
 * @method self setMarginRight(mixed $value)
 * @method self setOrientation(mixed $value)
 * @method self setPageWidth(mixed $value)
 * @method self setPageHeight(mixed $value)
 * @method self setPageSize(mixed $value)
 * @method self setTitle(mixed $value)
 * @method self setEncoding(mixed $value)
 * @method self setJavascriptDelay(mixed $value)
 * @method self setUserStyleSheet(mixed $value)
 * @method self setViewportSize(mixed $value)
 * @method self setZoom(mixed $value)
 * @method self setFooterCenter(mixed $value)
 * @method self setFooterFontName(mixed $value)
 * @method self setFooterFontSize(mixed $value)
 * @method self setFooterHtml(mixed $value)
 * @method self setFooterLeft(mixed $value)
 * @method self setFooterRight(mixed $value)
 * @method self setFooterSpacing(mixed $value)
 * @method self setHeaderCenter(mixed $value)
 * @method self setHeaderFontName(mixed $value)
 * @method self setHeaderFontSize(mixed $value)
 * @method self setHeaderHtml(mixed $value)
 * @method self setHeaderLeft(mixed $value)
 * @method self setHeaderRight(mixed $value)
 * @method self setHeaderSpacing(mixed $value)
 * @method self setReplace(mixed $value)
 * @method self setPageOffset(mixed $value)
 * @method self setMinimumFontSize(mixed $value)
 * @method self unsetGrayscale()
 * @method self unsetNoPdfCompression()
 * @method self unsetLowQuality()
 * @method self unsetBackground()
 * @method self unsetNoBackground()
 * @method self unsetDisableExternalLinks()
 * @method self unsetEnableExternalLinks()
 * @method self unsetDisableForms()
 * @method self unsetEnableForms()
 * @method self unsetImages()
 * @method self unsetNoImages()
 * @method self unsetDisableInternalLinks()
 * @method self unsetEnableInternalLinks()
 * @method self unsetDisableJavascript()
 * @method self unsetEnableJavascript()
 * @method self unsetKeepRelativeLinks()
 * @method self unsetResolveRelativeLinks()
 * @method self unsetPrintMediaType()
 * @method self unsetNoPrintMediaType()
 * @method self unsetDisableSmartShrinking()
 * @method self unsetEnableSmartShrinking()
 * @method self unsetFooterLine()
 * @method self unsetNoFooterLine()
 * @method self unsetHeaderLine()
 * @method self unsetNoHeaderLine()
 * @method self unsetDpi()
 * @method self unsetImageDpi()
 * @method self unsetImageQuality()
 * @method self unsetMarginBottom()
 * @method self unsetMarginLeft()
 * @method self unsetMarginTop()
 * @method self unsetMarginRight()
 * @method self unsetOrientation()
 * @method self unsetPageWidth()
 * @method self unsetPageHeight()
 * @method self unsetPageSize()
 * @method self unsetTitle()
 * @method self unsetEncoding()
 * @method self unsetJavascriptDelay()
 * @method self unsetUserStyleSheet()
 * @method self unsetViewportSize()
 * @method self unsetZoom()
 * @method self unsetFooterCenter()
 * @method self unsetFooterFontName()
 * @method self unsetFooterFontSize()
 * @method self unsetFooterHtml()
 * @method self unsetFooterLeft()
 * @method self unsetFooterRight()
 * @method self unsetFooterSpacing()
 * @method self unsetHeaderCenter()
 * @method self unsetHeaderFontName()
 * @method self unsetHeaderFontSize()
 * @method self unsetHeaderHtml()
 * @method self unsetHeaderLeft()
 * @method self unsetHeaderRight()
 * @method self unsetHeaderSpacing()
 * @method self unsetReplace()
 * @method self unsetPageOffset()
 * @method self unsetMinimumFontSize()
 * @method mixed getDpi()
 * @method mixed getImageDpi()
 * @method mixed getImageQuality()
 * @method mixed getMarginBottom()
 * @method mixed getMarginLeft()
 * @method mixed getMarginTop()
 * @method mixed getMarginRight()
 * @method mixed getOrientation()
 * @method mixed getPageWidth()
 * @method mixed getPageHeight()
 * @method mixed getPageSize()
 * @method mixed getTitle()
 * @method mixed getEncoding()
 * @method mixed getJavascriptDelay()
 * @method mixed getUserStyleSheet()
 * @method mixed getViewportSize()
 * @method mixed getZoom()
 * @method mixed getFooterCenter()
 * @method mixed getFooterFontName()
 * @method mixed getFooterFontSize()
 * @method mixed getFooterHtml()
 * @method mixed getFooterLeft()
 * @method mixed getFooterRight()
 * @method mixed getFooterSpacing()
 * @method mixed getHeaderCenter()
 * @method mixed getHeaderFontName()
 * @method mixed getHeaderFontSize()
 * @method mixed getHeaderHtml()
 * @method mixed getHeaderLeft()
 * @method mixed getHeaderRight()
 * @method mixed getHeaderSpacing()
 * @method mixed getReplace()
 * @method mixed getPageOffset()
 * @method mixed getMinimumFontSize()
 */
class WkhtmltopdfDocument
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
     * View instance for generating HTML markup to use for the PDF.
     *
     * @var View|null
     */
    protected ?View $view = null;

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

    /**
     * Override method calls to unknown functions to handle dynamic setting/unsetting of flags and options.
     *
     * @param $name
     * @param $arguments
     * @return mixed
     */
    public function __call($name, $arguments)
    {
        // If a method call is received that starts with "set", try to determine if a flag or option is being adjusted
        if (substr($name, 0, 3) === 'set' && strlen($name) > 3) {
            $flagOptionName = strtoupper(Str::snake(substr($name, 3)));

            // Handle flags in the form of method calls to "setFlagNameHere()"
            if (WkhtmltopdfFlag::hasConst($flagOptionName) && count($arguments) === 0) {
                return $this->addFlag(WkhtmltopdfFlag::$flagOptionName());
            } else {
                if (WkhtmltopdfOption::hasConst($flagOptionName) && count($arguments) > 0) {
                    $optionValue = Arr::first($arguments);

                    return $this->addOption(WkhtmltopdfOption::$flagOptionName(), $optionValue);
                } else {
                    throw new BadMethodCallException(sprintf('Method %s::%s not found.', __CLASS__, $name));
                }
            }
        } else {
            // If a method call is received that starts with "unset", try to determine if a flag or option is being removed
            if (substr($name, 0, 5) === 'unset' && strlen($name) > 5) {
                $flagOptionName = strtoupper(Str::snake(substr($name, 5)));

                // Handle flags in the form of method calls to "unsetFlagNameHere()"
                if (WkhtmltopdfFlag::hasConst($flagOptionName) && count($arguments) === 0) {
                    return $this->removeFlag(WkhtmltopdfFlag::$flagOptionName());
                } else {
                    if (WkhtmltopdfOption::hasConst($flagOptionName) && count($arguments) === 0) {
                        return $this->removeOption(WkhtmltopdfOption::$flagOptionName());
                    } else {
                        throw new BadMethodCallException(sprintf('Method %s::%s not found.', __CLASS__, $name));
                    }
                }
            } else {
                // If a method call is received that starts with "set", try to determine if the value of an option can be returned
                if (substr($name, 0, 3) === 'get' && strlen($name) > 3) {
                    $optionName = strtoupper(Str::snake(substr($name, 3)));

                    // If the option exists, return the value. Null will be returned if the option is not yet configured.
                    if (WkhtmltopdfOption::hasConst($optionName) && count($arguments) === 0) {
                        return Arr::get($this->options, sprintf('%s.value', WkhtmltopdfOption::$optionName()->value()));
                    } else {
                        throw new BadMethodCallException(sprintf('Method %s::%s not found.', __CLASS__, $name));
                    }
                } else {
                    throw new BadMethodCallException(sprintf('Method %s::%s not found.', __CLASS__, $name));
                }
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
     * Set the path to the template where the markup resides and any data to include with the view.
     * Throws BadFunctionCallException if the view() helper function is missing.
     *
     * @param string|null $view
     * @param array  $data
     * @param array  $mergeData
     * @return $this
     */
    public function setView(?string $view, array $data = [], array $mergeData = []): self
    {
        if (function_exists('view')) {
            if (is_null($view)) {
                $this->view = null;
            } else {
                $this->view = view($view, $data, $mergeData);
            }
        } else {
            throw new BadFunctionCallException('The view() helper method is missing. Using views to generate HTML markup requires the view() helper method.');
        }

        return $this;
    }

    /**
     * Return the instance of the View used to generate markup for the PDF.
     *
     * @return View|null
     */
    public function getView(): ?View
    {
        return $this->view;
    }

    /**
     * Returns true if the $view property is not empty and is an instance of the View contract.
     *
     * @return bool
     */
    public function hasView(): bool
    {
        return !empty($this->view) && ($this->view instanceof View);
    }

    /**
     * Enable a flag.
     *
     * @param WkhtmltopdfFlag $flag
     * @return $this
     */
    public function addFlag(WkhtmltopdfFlag $flag): self
    {
        Arr::set($this->flags, $flag->value(), true);

        return $this;
    }

    /**
     * Add multiple flags at once.
     *
     * @param array $flagNames
     * @return $this
     */
    public function addFlags(array $flagNames): self
    {
        foreach ($flagNames as $flagName) {
            if (is_string($flagName) && WkhtmltopdfFlag::hasConst($flagName)) {
                $this->addFlag(WkhtmltopdfFlag::create($flagName));
            }
        }

        return $this;
    }

    /**
     * Disable a flag.
     *
     * @param WkhtmltopdfFlag $flag
     * @return $this
     */
    public function removeFlag(WkhtmltopdfFlag $flag): self
    {
        Arr::set($this->flags, $flag->value(), false);

        return $this;
    }

    /**
     * Remove multiple flags at once.
     *
     * @param array $flagNames
     * @return $this
     */
    public function removeFlags(array $flagNames): self
    {
        foreach ($flagNames as $flagName) {
            if (is_string($flagName) && WkhtmltopdfFlag::hasConst($flagName)) {
                $this->removeFlag(WkhtmltopdfFlag::create($flagName));
            }
        }

        return $this;
    }

    /**
     * Returns an array of all the enabled flags.
     *
     * @return array
     */
    public function getFlags(): array
    {
        $flags = [];

        foreach ($this->flags as $flagName => $isEnabled) {
            if ($isEnabled) {
                array_push($flags, $flagName);
            }
        }

        return $flags;
    }

    /**
     * Add an option.
     *
     * @param WkhtmltopdfOption $option
     * @param mixed             $value
     * @throws InvalidArgumentException
     * @return $this
     */
    public function addOption(WkhtmltopdfOption $option, $value): self
    {
        if ($option->isValidValue($value)) {
            Arr::set($this->options, $option->value(), [
                'enabled' => true,
                'value'   => $value,
            ]);

            return $this;
        } else {
            throw new InvalidArgumentException(sprintf(
                'Invalid value "%s" provided for "%s"',
                (string)$value,
                $option->label()
            ));
        }
    }

    /**
     * Set multiple options at once.
     *
     * @param array $options
     * @return $this
     */
    public function addOptions(array $options): self
    {
        foreach ($options as $optionName => $optionValue) {
            if (is_string($optionName) && WkhtmltopdfOption::hasConst($optionName)) {
                $this->addOption(WkhtmltopdfOption::create($optionName), $optionValue);
            }
        }

        return $this;
    }

    /**
     * Disable an option.
     *
     * @param WkhtmltopdfOption $option
     * @return $this
     */
    public function removeOption(WkhtmltopdfOption $option): self
    {
        Arr::set($this->options, $option->value(), [
            'enabled' => false,
            'value'   => null,
        ]);

        return $this;
    }

    /**
     * Remove multiple options at once.
     *
     * @param array $optionNames
     * @return $this
     */
    public function removeOptions(array $optionNames): self
    {
        foreach ($optionNames as $optionName) {
            if (is_string($optionName) && WkhtmltopdfOption::hasConst($optionName)) {
                $this->removeOption(WkhtmltopdfOption::create($optionName));
            }
        }

        return $this;
    }

    /**
     * Returns a key-value associative array of all the enabled options and their values.
     *
     * @return array
     */
    public function getOptions(): array
    {
        $options = [];

        foreach ($this->options as $key => $params) {
            if ((bool)Arr::get($params, 'enabled', false) === true) {
                $options[$key] = Arr::get($params, 'value');
            }
        }

        return $options;
    }

    /**
     * Returns an array of data to provide in the body of the request to the API.
     *
     * @return array[]
     */
    public function getParams(): array
    {
        $bodyData = [
            'flags'   => $this->getFlags(),
            'options' => $this->getOptions(),
        ];

        // Set the HTML markup or URL value depending on what we have.
        if ($this->hasHtmlMarkup()) {
            $bodyData['html_markup'] = $this->getHtmlMarkup();
        } else {
            if ($this->hasUrl()) {
                $bodyData['url'] = $this->getUrl();
            } else {
                if ($this->hasView()) {
                    $bodyData['html_markup'] = $this->getView()->render();
                } else {
                    throw new InvalidArgumentException('No View, HTML markup or URL must be provided to generate a PDF.');
                }
            }
        }

        return $bodyData;
    }

    /**
     * Creates the API request and sends it. Returns a ResponseInterface object if a 200 status code is received.
     *
     * @throws GuzzleException|JsonException
     * @return ResponseInterface
     */
    public function getApiResponse(): ResponseInterface
    {
        return $this->getApiClient()->sendRequest($this->getApiClient()->makeRequest($this->getParams()));
    }

    /**
     * Returns a stream resource of the API response content.
     *
     * @throws JsonException|GuzzleException
     * @return resource|null
     */
    public function getStream()
    {
        return $this->getApiResponse()->getBody()->detach();
    }

    /**
     * Request the PDF data and write the stream to a file.
     *
     * @param string $path
     * @throws JsonException|GuzzleException
     * @return bool
     */
    public function saveFile(string $path): bool
    {
        return (bool)file_put_contents($path, $this->getStream());
    }

}