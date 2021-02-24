<?php

namespace Tests\Feature;

use JsonException;
use MinuteMan\WkhtmltopdfClient\ApiClient;
use MinuteMan\WkhtmltopdfClient\WkhtmltopdfDocument;
use PHPUnit\Framework\TestCase;

/**
 * Class RemovingOptionsTest
 *
 * @package Tests\Feature
 */
class RemovingOptionsTest extends TestCase
{

    /**
     * @var ApiClient
     */
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
     * Create a new instance of WkhtmltopdfDocument and set HTML markup.
     *
     * @return WkhtmltopdfDocument
     */
    protected function getDocumentInstance(): WkhtmltopdfDocument
    {
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup('<body></body>');

        return $doc;
    }

    /**
     * Gets the decoded JSON body from the request that a document generates.
     *
     * @param WkhtmltopdfDocument $doc
     * @return mixed
     * @throws JsonException
     */
    protected function getRequestBodyFromDoc(WkhtmltopdfDocument $doc)
    {
        $request = $doc->getApiClient()->makeRequest($doc->getParams());

        return json_decode($request->getBody()->getContents());
    }

    /**
     * Test for unsetDpi()
     *
     * @throws JsonException
     */
    public function testUnsetDpi()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 20;
        $doc->setDpi($optionValue);
        $doc->unsetDpi();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--dpi', $body->options);
    }

    /**
     * Test for unsetImageDpi()
     *
     * @throws JsonException
     */
    public function testUnsetImageDpi()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 20;
        $doc->setImageDpi($optionValue);
        $doc->unsetImageDpi();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--image-dpi', $body->options);
    }

    /**
     * Test for unsetImageQuality()
     *
     * @throws JsonException
     */
    public function testUnsetImageQuality()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 20;
        $doc->setImageQuality($optionValue);
        $doc->unsetImageQuality();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--image-quality', $body->options);
    }

    /**
     * Test for unsetMarginBottom()
     *
     * @throws JsonException
     */
    public function testUnsetMarginBottom()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '10';
        $doc->setMarginBottom($optionValue);
        $doc->unsetMarginBottom();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--margin-bottom', $body->options);
    }

    /**
     * Test for unsetMarginLeft()
     *
     * @throws JsonException
     */
    public function testUnsetMarginLeft()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '10';
        $doc->setMarginLeft($optionValue);
        $doc->unsetMarginLeft();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--margin-left', $body->options);
    }

    /**
     * Test for unsetMarginTop()
     *
     * @throws JsonException
     */
    public function testUnsetMarginTop()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '10';
        $doc->setMarginTop($optionValue);
        $doc->unsetMarginTop();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--margin-top', $body->options);
    }

    /**
     * Test for unsetMarginRight()
     *
     * @throws JsonException
     */
    public function testUnsetMarginRight()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '10';
        $doc->setMarginRight($optionValue);
        $doc->unsetMarginRight();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--margin-right', $body->options);
    }

    /**
     * Test for unsetOrientation()
     *
     * @throws JsonException
     */
    public function testUnsetOrientation()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setOrientation($optionValue);
        $doc->unsetOrientation();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--orientation', $body->options);
    }

    /**
     * Test for unsetPageWidth()
     *
     * @throws JsonException
     */
    public function testUnsetPageWidth()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'A1';
        $doc->setPageWidth($optionValue);
        $doc->unsetPageWidth();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--page-width', $body->options);
    }

    /**
     * Test for unsetPageHeight()
     *
     * @throws JsonException
     */
    public function testUnsetPageHeight()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '10';
        $doc->setPageHeight($optionValue);
        $doc->unsetPageHeight();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--page-height', $body->options);
    }

    /**
     * Test for unsetPageSize()
     *
     * @throws JsonException
     */
    public function testUnsetPageSize()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'A1';
        $doc->setPageSize($optionValue);
        $doc->unsetPageSize();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--page-size', $body->options);
    }

    /**
     * Test for unsetTitle()
     *
     * @throws JsonException
     */
    public function testUnsetTitle()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'Test';
        $doc->setTitle($optionValue);
        $doc->unsetTitle();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--title', $body->options);
    }

    /**
     * Test for unsetEncoding()
     *
     * @throws JsonException
     */
    public function testUnsetEncoding()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'utf-8';
        $doc->setEncoding($optionValue);
        $doc->unsetEncoding();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--encoding', $body->options);
    }

    /**
     * Test for unsetJavascriptDelay()
     *
     * @throws JsonException
     */
    public function testUnsetJavascriptDelay()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 10;
        $doc->setJavascriptDelay($optionValue);
        $doc->unsetJavascriptDelay();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--javascript-delay', $body->options);
    }

    /**
     * Test for unsetUserStyleSheet()
     *
     * @throws JsonException
     */
    public function testUnsetUserStyleSheet()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setUserStyleSheet($optionValue);
        $doc->unsetUserStyleSheet();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--user-style-sheet', $body->options);
    }

    /**
     * Test for unsetViewportSize()
     *
     * @throws JsonException
     */
    public function testUnsetViewportSize()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '10';
        $doc->setViewportSize($optionValue);
        $doc->unsetViewportSize();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--viewport-size', $body->options);
    }

    /**
     * Test for unsetZoom()
     *
     * @throws JsonException
     */
    public function testUnsetZoom()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 50;
        $doc->setZoom($optionValue);
        $doc->unsetZoom();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--zoom', $body->options);
    }

    /**
     * Test for unsetFooterCenter()
     *
     * @throws JsonException
     */
    public function testUnsetFooterCenter()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setFooterCenter($optionValue);
        $doc->unsetFooterCenter();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--footer-center', $body->options);
    }

    /**
     * Test for unsetFooterFontName()
     *
     * @throws JsonException
     */
    public function testUnsetFooterFontName()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setFooterFontName($optionValue);
        $doc->unsetFooterFontName();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--footer-font-name', $body->options);
    }

    /**
     * Test for unsetFooterFontSize()
     *
     * @throws JsonException
     */
    public function testUnsetFooterFontSize()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 10;
        $doc->setFooterFontSize($optionValue);
        $doc->unsetFooterFontSize();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--footer-font-size', $body->options);
    }

    /**
     * Test for unsetFooterHtml()
     *
     * @throws JsonException
     */
    public function testUnsetFooterHtml()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '<body></body>';
        $doc->setFooterHtml($optionValue);
        $doc->unsetFooterHtml();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--footer-html', $body->options);
    }

    /**
     * Test for unsetFooterLeft()
     *
     * @throws JsonException
     */
    public function testUnsetFooterLeft()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'Test';
        $doc->setFooterLeft($optionValue);
        $doc->unsetFooterLeft();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--footer-left', $body->options);
    }

    /**
     * Test for unsetFooterRight()
     *
     * @throws JsonException
     */
    public function testUnsetFooterRight()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setFooterRight($optionValue);
        $doc->unsetFooterRight();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--footer-right', $body->options);
    }

    /**
     * Test for unsetFooterSpacing()
     *
     * @throws JsonException
     */
    public function testUnsetFooterSpacing()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 10;
        $doc->setFooterSpacing($optionValue);
        $doc->unsetFooterSpacing();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--footer-spacing', $body->options);
    }

    /**
     * Test for unsetHeaderCenter()
     *
     * @throws JsonException
     */
    public function testUnsetHeaderCenter()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setHeaderCenter($optionValue);
        $doc->unsetHeaderCenter();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--header-center', $body->options);
    }

    /**
     * Test for unsetHeaderFontName()
     *
     * @throws JsonException
     */
    public function testUnsetHeaderFontName()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setHeaderFontName($optionValue);
        $doc->unsetHeaderFontName();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--header-font-name', $body->options);
    }

    /**
     * Test for unsetHeaderFontSize()
     *
     * @throws JsonException
     */
    public function testUnsetHeaderFontSize()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 10;
        $doc->setHeaderFontSize($optionValue);
        $doc->unsetHeaderFontSize();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--header-font-size', $body->options);
    }

    /**
     * Test for unsetHeaderHtml()
     *
     * @throws JsonException
     */
    public function testUnsetHeaderHtml()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '<body></body>';
        $doc->setHeaderHtml($optionValue);
        $doc->unsetHeaderHtml();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--header-html', $body->options);
    }

    /**
     * Test for unsetHeaderLeft()
     *
     * @throws JsonException
     */
    public function testUnsetHeaderLeft()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setHeaderLeft($optionValue);
        $doc->unsetHeaderLeft();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--header-left', $body->options);
    }

    /**
     * Test for unsetHeaderRight()
     *
     * @throws JsonException
     */
    public function testUnsetHeaderRight()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setHeaderRight($optionValue);
        $doc->unsetHeaderRight();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--header-right', $body->options);
    }

    /**
     * Test for unsetHeaderSpacing()
     *
     * @throws JsonException
     */
    public function testUnsetHeaderSpacing()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 10;
        $doc->setHeaderSpacing($optionValue);
        $doc->unsetHeaderSpacing();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--header-spacing', $body->options);
    }

    /**
     * Test for unsetReplace()
     *
     * @throws JsonException
     */
    public function testUnsetReplace()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '';
        $doc->setReplace($optionValue);
        $doc->unsetReplace();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--replace', $body->options);
    }

    /**
     * Test for unsetPageOffset()
     *
     * @throws JsonException
     */
    public function testUnsetPageOffset()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 30;
        $doc->setPageOffset($optionValue);
        $doc->unsetPageOffset();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--page-offset', $body->options);
    }

    /**
     * Test for unsetMinimumFontSize()
     *
     * @throws JsonException
     */
    public function testUnsetMinimumFontSize()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 10;
        $doc->setMinimumFontSize($optionValue);
        $doc->unsetMinimumFontSize();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--minimum-font-size', $body->options);
    }

}