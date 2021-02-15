<?php

namespace Tests;

use JsonException;
use MinuteMan\WkhtmltopdfClient\ApiClient;
use MinuteMan\WkhtmltopdfClient\WkhtmltopdfDocument;
use PHPUnit\Framework\TestCase;

/**
 * Class _AddingFlagsOptionsTest
 *
 * @package Tests
 */
class AddingFlagsOptionsTest extends TestCase
{

    protected $apiClient;

    /**
     * setUp()
     */
    public function setUp(): void
    {
        parent::setUp();
        $this->apiClient = new ApiClient('https://wkhtmltopdf.local/pdf');
    }

    /**
     * Test for setGrayscale()
     *
     * @throws JsonException
     */
    public function testSetGrayscale()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setGrayscale();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertContains('--grayscale', $body->flags);
    }

    /**
     * Test for setNoPdfCompression()
     *
     * @throws JsonException
     */
    public function testSetNoPdfCompression()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setNoPdfCompression();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertContains('--no-pdf-compression', $body->flags);
    }

    /**
     * Test for setLowQuality()
     *
     * @throws JsonException
     */
    public function testSetLowQuality()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setLowQuality();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        print_r($body);
        $this->assertContains('--lowquality', $body->flags);
    }

    /**
     * Test for setBackground()
     *
     * @throws JsonException
     */
    public function testSetBackground()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setBackground();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertContains('--background', $body->flags);
    }

    /**
     * Test for setNoBackground()
     *
     * @throws JsonException
     */
    public function testSetNoBackground()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setNoBackground();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertContains('--no-background', $body->flags);
    }

    /**
     * Test for setDisableExternalLinks()
     *
     * @throws JsonException
     */
    public function testSetDisableExternalLinks()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setDisableExternalLinks();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertContains('--disable-external-links', $body->flags);
    }

    /**
     * Test for setEnableExternalLinks()
     *
     * @throws JsonException
     */
    public function testSetEnableExternalLinks()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setEnableExternalLinks();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertContains('--enable-external-links', $body->flags);
    }

    /**
     * Test for setDisableForms()
     *
     * @throws JsonException
     */
    public function testSetDisableForms()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setDisableForms();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertContains('--disable-forms', $body->flags);
    }

    /**
     * Test for setEnableForms()
     *
     * @throws JsonException
     */
    public function testSetEnableForms()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setEnableForms();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertContains('--enable-forms', $body->flags);
    }

    /**
     * Test for setImages()
     *
     * @throws JsonException
     */
    public function testSetImages()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setImages();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertContains('--images', $body->flags);
    }

    /**
     * Test for setNoImages()
     *
     * @throws JsonException
     */
    public function testSetNoImages()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setNoImages();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertContains('--no-images', $body->flags);
    }

    /**
     * Test for setDisableInternalLinks()
     *
     * @throws JsonException
     */
    public function testSetDisableInternalLinks()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setDisableInternalLinks();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertContains('--disable-internal-links', $body->flags);
    }

    /**
     * Test for setEnableInternalLinks()
     *
     * @throws JsonException
     */
    public function testSetEnableInternalLinks()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setEnableInternalLinks();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertContains('--enable-internal-links', $body->flags);
    }

    /**
     * Test for setDisableJavascript()
     *
     * @throws JsonException
     */
    public function testSetDisableJavascript()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setDisableJavascript();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertContains('--disable-javascript', $body->flags);
    }

    /**
     * Test for setEnableJavascript()
     *
     * @throws JsonException
     */
    public function testSetEnableJavascript()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setEnableJavascript();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertContains('--enable-javascript', $body->flags);
    }

    /**
     * Test for setKeepRelativeLinks()
     *
     * @throws JsonException
     */
    public function testSetKeepRelativeLinks()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setKeepRelativeLinks();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertContains('--keep-relative-links', $body->flags);
    }

    /**
     * Test for setResolveRelativeLinks()
     *
     * @throws JsonException
     */
    public function testSetResolveRelativeLinks()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setResolveRelativeLinks();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertContains('--resolve-relative-links', $body->flags);
    }

    /**
     * Test for setPrintMediaType()
     *
     * @throws JsonException
     */
    public function testSetPrintMediaType()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setPrintMediaType();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertContains('--print-media-type', $body->flags);
    }

    /**
     * Test for setNoPrintMediaType()
     *
     * @throws JsonException
     */
    public function testSetNoPrintMediaType()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setNoPrintMediaType();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertContains('--no-print-media-type', $body->flags);
    }

    /**
     * Test for setDisableSmartShrinking()
     *
     * @throws JsonException
     */
    public function testSetDisableSmartShrinking()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setDisableSmartShrinking();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertContains('--disable-smart-shrinking', $body->flags);
    }

    /**
     * Test for setEnableSmartShrinking()
     *
     * @throws JsonException
     */
    public function testSetEnableSmartShrinking()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setEnableSmartShrinking();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertContains('--enable-smart-shrinking', $body->flags);
    }

    /**
     * Test for setFooterLine()
     *
     * @throws JsonException
     */
    public function testSetFooterLine()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setFooterLine();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertContains('--footer-line', $body->flags);
    }

    /**
     * Test for setNoFooterLine()
     *
     * @throws JsonException
     */
    public function testSetNoFooterLine()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setNoFooterLine();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertContains('--no-footer-line', $body->flags);
    }

    /**
     * Test for setHeaderLine()
     *
     * @throws JsonException
     */
    public function testSetHeaderLine()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setHeaderLine();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertContains('--header-line', $body->flags);
    }

    /**
     * Test for setNoHeaderLine()
     *
     * @throws JsonException
     */
    public function testSetNoHeaderLine()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setNoHeaderLine();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertContains('--no-header-line', $body->flags);
    }

    /**
     * Test for unsetGrayscale()
     *
     * @throws JsonException
     */
    public function testUnsetGrayscale()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setGrayscale();
        $doc->unsetGrayscale();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--grayscale', $body->flags);
    }

    /**
     * Test for unsetNoPdfCompression()
     *
     * @throws JsonException
     */
    public function testUnsetNoPdfCompression()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setNoPdfCompression();
        $doc->unsetNoPdfCompression();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--no-pdf-compression', $body->flags);
    }

    /**
     * Test for unsetLowQuality()
     *
     * @throws JsonException
     */
    public function testUnsetLowQuality()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setLowQuality();
        $doc->unsetLowQuality();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--low-quality', $body->options);
    }

    /**
     * Test for unsetBackground()
     *
     * @throws JsonException
     */
    public function testUnsetBackground()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setBackground();
        $doc->unsetBackground();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--background', $body->flags);
    }

    /**
     * Test for unsetNoBackground()
     *
     * @throws JsonException
     */
    public function testUnsetNoBackground()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setNoBackground();
        $doc->unsetNoBackground();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--no-background', $body->flags);
    }

    /**
     * Test for unsetDisableExternalLinks()
     *
     * @throws JsonException
     */
    public function testUnsetDisableExternalLinks()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setDisableExternalLinks();
        $doc->unsetDisableExternalLinks();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--disable-external-links', $body->flags);
    }

    /**
     * Test for unsetEnableExternalLinks()
     *
     * @throws JsonException
     */
    public function testUnsetEnableExternalLinks()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setEnableExternalLinks();
        $doc->unsetEnableExternalLinks();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--enable-external-links', $body->flags);
    }

    /**
     * Test for unsetDisableForms()
     *
     * @throws JsonException
     */
    public function testUnsetDisableForms()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setDisableForms();
        $doc->unsetDisableForms();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--disable-forms', $body->flags);
    }

    /**
     * Test for unsetEnableForms()
     *
     * @throws JsonException
     */
    public function testUnsetEnableForms()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setEnableForms();
        $doc->unsetEnableForms();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--enable-forms', $body->flags);
    }

    /**
     * Test for unsetImages()
     *
     * @throws JsonException
     */
    public function testUnsetImages()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setImages();
        $doc->unsetImages();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--images', $body->flags);
    }

    /**
     * Test for unsetNoImages()
     *
     * @throws JsonException
     */
    public function testUnsetNoImages()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setNoImages();
        $doc->unsetNoImages();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--no-images', $body->flags);
    }

    /**
     * Test for unsetDisableInternalLinks()
     *
     * @throws JsonException
     */
    public function testUnsetDisableInternalLinks()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setDisableInternalLinks();
        $doc->unsetDisableInternalLinks();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--disable-internal-links', $body->flags);
    }

    /**
     * Test for unsetEnableInternalLinks()
     *
     * @throws JsonException
     */
    public function testUnsetEnableInternalLinks()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setEnableInternalLinks();
        $doc->unsetEnableInternalLinks();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--enable-internal-links', $body->flags);
    }

    /**
     * Test for unsetDisableJavascript()
     *
     * @throws JsonException
     */
    public function testUnsetDisableJavascript()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setDisableJavascript();
        $doc->unsetDisableJavascript();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--disable-javascript', $body->flags);
    }

    /**
     * Test for unsetEnableJavascript()
     *
     * @throws JsonException
     */
    public function testUnsetEnableJavascript()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setEnableJavascript();
        $doc->unsetEnableJavascript();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--enable-javascript', $body->flags);
    }

    /**
     * Test for unsetKeepRelativeLinks()
     *
     * @throws JsonException
     */
    public function testUnsetKeepRelativeLinks()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setKeepRelativeLinks();
        $doc->unsetKeepRelativeLinks();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--keep-relative-links', $body->flags);
    }

    /**
     * Test for unsetResolveRelativeLinks()
     *
     * @throws JsonException
     */
    public function testUnsetResolveRelativeLinks()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setResolveRelativeLinks();
        $doc->unsetResolveRelativeLinks();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--resolve-relative-links', $body->flags);
    }

    /**
     * Test for unsetPrintMediaType()
     *
     * @throws JsonException
     */
    public function testUnsetPrintMediaType()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setPrintMediaType();
        $doc->unsetPrintMediaType();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--print-media-type', $body->flags);
    }

    /**
     * Test for unsetNoPrintMediaType()
     *
     * @throws JsonException
     */
    public function testUnsetNoPrintMediaType()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setNoPrintMediaType();
        $doc->unsetNoPrintMediaType();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--no-print-media-type', $body->flags);
    }

    /**
     * Test for unsetDisableSmartShrinking()
     *
     * @throws JsonException
     */
    public function testUnsetDisableSmartShrinking()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setDisableSmartShrinking();
        $doc->unsetDisableSmartShrinking();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--disable-smart-shrinking', $body->flags);
    }

    /**
     * Test for unsetEnableSmartShrinking()
     *
     * @throws JsonException
     */
    public function testUnsetEnableSmartShrinking()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setEnableSmartShrinking();
        $doc->unsetEnableSmartShrinking();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--enable-smart-shrinking', $body->flags);
    }

    /**
     * Test for unsetFooterLine()
     *
     * @throws JsonException
     */
    public function testUnsetFooterLine()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setFooterLine();
        $doc->unsetFooterLine();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--footer-line', $body->flags);
    }

    /**
     * Test for unsetNoFooterLine()
     *
     * @throws JsonException
     */
    public function testUnsetNoFooterLine()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setNoFooterLine();
        $doc->unsetNoFooterLine();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--no-footer-line', $body->flags);
    }

    /**
     * Test for unsetHeaderLine()
     *
     * @throws JsonException
     */
    public function testUnsetHeaderLine()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setHeaderLine();
        $doc->unsetHeaderLine();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--header-line', $body->flags);
    }

    /**
     * Test for unsetNoHeaderLine()
     *
     * @throws JsonException
     */
    public function testUnsetNoHeaderLine()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $doc->setNoHeaderLine();
        $doc->unsetNoHeaderLine();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--no-header-line', $body->flags);
    }

    /**
     * Test for unsetDpi()
     *
     * @throws JsonException
     */
    public function testUnsetDpi()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = 20;
        $doc->setDpi($optionValue);
        $doc->unsetDpi();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--dpi', $body->options);
    }

    /**
     * Test for unsetImageDpi()
     *
     * @throws JsonException
     */
    public function testUnsetImageDpi()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = 20;
        $doc->setImageDpi($optionValue);
        $doc->unsetImageDpi();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--image-dpi', $body->options);
    }

    /**
     * Test for unsetImageQuality()
     *
     * @throws JsonException
     */
    public function testUnsetImageQuality()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = 20;
        $doc->setImageQuality($optionValue);
        $doc->unsetImageQuality();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--image-quality', $body->options);
    }

    /**
     * Test for unsetMarginBottom()
     *
     * @throws JsonException
     */
    public function testUnsetMarginBottom()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = '10';
        $doc->setMarginBottom($optionValue);
        $doc->unsetMarginBottom();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--margin-bottom', $body->options);
    }

    /**
     * Test for unsetMarginLeft()
     *
     * @throws JsonException
     */
    public function testUnsetMarginLeft()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = '10';
        $doc->setMarginLeft($optionValue);
        $doc->unsetMarginLeft();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--margin-left', $body->options);
    }

    /**
     * Test for unsetMarginTop()
     *
     * @throws JsonException
     */
    public function testUnsetMarginTop()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = '10';
        $doc->setMarginTop($optionValue);
        $doc->unsetMarginTop();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--margin-top', $body->options);
    }

    /**
     * Test for unsetMarginRight()
     *
     * @throws JsonException
     */
    public function testUnsetMarginRight()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = '10';
        $doc->setMarginRight($optionValue);
        $doc->unsetMarginRight();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--margin-right', $body->options);
    }

    /**
     * Test for unsetOrientation()
     *
     * @throws JsonException
     */
    public function testUnsetOrientation()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = 'null';
        $doc->setOrientation($optionValue);
        $doc->unsetOrientation();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--orientation', $body->options);
    }

    /**
     * Test for unsetPageWidth()
     *
     * @throws JsonException
     */
    public function testUnsetPageWidth()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = 'A1';
        $doc->setPageWidth($optionValue);
        $doc->unsetPageWidth();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--page-width', $body->options);
    }

    /**
     * Test for unsetPageHeight()
     *
     * @throws JsonException
     */
    public function testUnsetPageHeight()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = '10';
        $doc->setPageHeight($optionValue);
        $doc->unsetPageHeight();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--page-height', $body->options);
    }

    /**
     * Test for unsetPageSize()
     *
     * @throws JsonException
     */
    public function testUnsetPageSize()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = 'A1';
        $doc->setPageSize($optionValue);
        $doc->unsetPageSize();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--page-size', $body->options);
    }

    /**
     * Test for unsetTitle()
     *
     * @throws JsonException
     */
    public function testUnsetTitle()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = 'Test';
        $doc->setTitle($optionValue);
        $doc->unsetTitle();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--title', $body->options);
    }

    /**
     * Test for unsetEncoding()
     *
     * @throws JsonException
     */
    public function testUnsetEncoding()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = 'utf-8';
        $doc->setEncoding($optionValue);
        $doc->unsetEncoding();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--encoding', $body->options);
    }

    /**
     * Test for unsetJavascriptDelay()
     *
     * @throws JsonException
     */
    public function testUnsetJavascriptDelay()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = 10;
        $doc->setJavascriptDelay($optionValue);
        $doc->unsetJavascriptDelay();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--javascript-delay', $body->options);
    }

    /**
     * Test for unsetUserStyleSheet()
     *
     * @throws JsonException
     */
    public function testUnsetUserStyleSheet()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = 'null';
        $doc->setUserStyleSheet($optionValue);
        $doc->unsetUserStyleSheet();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--user-style-sheet', $body->options);
    }

    /**
     * Test for unsetViewportSize()
     *
     * @throws JsonException
     */
    public function testUnsetViewportSize()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = '10';
        $doc->setViewportSize($optionValue);
        $doc->unsetViewportSize();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--viewport-size', $body->options);
    }

    /**
     * Test for unsetZoom()
     *
     * @throws JsonException
     */
    public function testUnsetZoom()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = 50;
        $doc->setZoom($optionValue);
        $doc->unsetZoom();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--zoom', $body->options);
    }

    /**
     * Test for unsetFooterCenter()
     *
     * @throws JsonException
     */
    public function testUnsetFooterCenter()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = 'null';
        $doc->setFooterCenter($optionValue);
        $doc->unsetFooterCenter();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--footer-center', $body->options);
    }

    /**
     * Test for unsetFooterFontName()
     *
     * @throws JsonException
     */
    public function testUnsetFooterFontName()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = 'null';
        $doc->setFooterFontName($optionValue);
        $doc->unsetFooterFontName();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--footer-font-name', $body->options);
    }

    /**
     * Test for unsetFooterFontSize()
     *
     * @throws JsonException
     */
    public function testUnsetFooterFontSize()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = 10;
        $doc->setFooterFontSize($optionValue);
        $doc->unsetFooterFontSize();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--footer-font-size', $body->options);
    }

    /**
     * Test for unsetFooterHtml()
     *
     * @throws JsonException
     */
    public function testUnsetFooterHtml()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = '<body></body>';
        $doc->setFooterHtml($optionValue);
        $doc->unsetFooterHtml();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--footer-html', $body->options);
    }

    /**
     * Test for unsetFooterLeft()
     *
     * @throws JsonException
     */
    public function testUnsetFooterLeft()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = 'Test';
        $doc->setFooterLeft($optionValue);
        $doc->unsetFooterLeft();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--footer-left', $body->options);
    }

    /**
     * Test for unsetFooterRight()
     *
     * @throws JsonException
     */
    public function testUnsetFooterRight()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = 'null';
        $doc->setFooterRight($optionValue);
        $doc->unsetFooterRight();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--footer-right', $body->options);
    }

    /**
     * Test for unsetFooterSpacing()
     *
     * @throws JsonException
     */
    public function testUnsetFooterSpacing()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = 10;
        $doc->setFooterSpacing($optionValue);
        $doc->unsetFooterSpacing();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--footer-spacing', $body->options);
    }

    /**
     * Test for unsetHeaderCenter()
     *
     * @throws JsonException
     */
    public function testUnsetHeaderCenter()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = 'null';
        $doc->setHeaderCenter($optionValue);
        $doc->unsetHeaderCenter();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--header-center', $body->options);
    }

    /**
     * Test for unsetHeaderFontName()
     *
     * @throws JsonException
     */
    public function testUnsetHeaderFontName()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = 'null';
        $doc->setHeaderFontName($optionValue);
        $doc->unsetHeaderFontName();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--header-font-name', $body->options);
    }

    /**
     * Test for unsetHeaderFontSize()
     *
     * @throws JsonException
     */
    public function testUnsetHeaderFontSize()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = 10;
        $doc->setHeaderFontSize($optionValue);
        $doc->unsetHeaderFontSize();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--header-font-size', $body->options);
    }

    /**
     * Test for unsetHeaderHtml()
     *
     * @throws JsonException
     */
    public function testUnsetHeaderHtml()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = '<body></body>';
        $doc->setHeaderHtml($optionValue);
        $doc->unsetHeaderHtml();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--header-html', $body->options);
    }

    /**
     * Test for unsetHeaderLeft()
     *
     * @throws JsonException
     */
    public function testUnsetHeaderLeft()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = 'null';
        $doc->setHeaderLeft($optionValue);
        $doc->unsetHeaderLeft();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--header-left', $body->options);
    }

    /**
     * Test for unsetHeaderRight()
     *
     * @throws JsonException
     */
    public function testUnsetHeaderRight()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = 'null';
        $doc->setHeaderRight($optionValue);
        $doc->unsetHeaderRight();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--header-right', $body->options);
    }

    /**
     * Test for unsetHeaderSpacing()
     *
     * @throws JsonException
     */
    public function testUnsetHeaderSpacing()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = 10;
        $doc->setHeaderSpacing($optionValue);
        $doc->unsetHeaderSpacing();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--header-spacing', $body->options);
    }

    /**
     * Test for unsetReplace()
     *
     * @throws JsonException
     */
    public function testUnsetReplace()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = true;
        $doc->setReplace($optionValue);
        $doc->unsetReplace();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--replace', $body->options);
    }

    /**
     * Test for unsetPageOffset()
     *
     * @throws JsonException
     */
    public function testUnsetPageOffset()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = 30;
        $doc->setPageOffset($optionValue);
        $doc->unsetPageOffset();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--page-offset', $body->options);
    }

    /**
     * Test for unsetMinimumFontSize()
     *
     * @throws JsonException
     */
    public function testUnsetMinimumFontSize()
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');
        $optionValue = 10;
        $doc->setMinimumFontSize($optionValue);
        $doc->unsetMinimumFontSize();
        $request = $doc->getApiClient()->makeRequest($doc->getParams());
        $body = json_decode($request->getBody()->getContents());

        $this->assertNotContains('--minimum-font-size', $body->options);
    }

}