<?php

namespace Tests\Feature;

use JsonException;
use PHPUnit\Framework\TestCase;
use MinuteMan\WkhtmltopdfClient\ApiClient;
use MinuteMan\WkhtmltopdfClient\WkhtmltopdfDocument;

class AddingOptionsTest extends TestCase
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
     * Test for setDpi()
     *
     * @throws JsonException
     */
    public function testSetDpi()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 20;
        $doc->setDpi($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--dpi', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--dpi'});
    }

    /**
     * Test for setImageDpi()
     *
     * @throws JsonException
     */
    public function testSetImageDpi()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 20;
        $doc->setImageDpi($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--image-dpi', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--image-dpi'});
    }

    /**
     * Test for setImageQuality()
     *
     * @throws JsonException
     */
    public function testSetImageQuality()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 20;
        $doc->setImageQuality($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--image-quality', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--image-quality'});
    }

    /**
     * Test for setMarginBottom()
     *
     * @throws JsonException
     */
    public function testSetMarginBottom()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '10';
        $doc->setMarginBottom($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--margin-bottom', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--margin-bottom'});
    }

    /**
     * Test for setMarginLeft()
     *
     * @throws JsonException
     */
    public function testSetMarginLeft()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '10';
        $doc->setMarginLeft($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--margin-left', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--margin-left'});
    }

    /**
     * Test for setMarginTop()
     *
     * @throws JsonException
     */
    public function testSetMarginTop()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '10';
        $doc->setMarginTop($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--margin-top', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--margin-top'});
    }

    /**
     * Test for setMarginRight()
     *
     * @throws JsonException
     */
    public function testSetMarginRight()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '10';
        $doc->setMarginRight($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--margin-right', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--margin-right'});
    }

    /**
     * Test for setOrientation()
     *
     * @throws JsonException
     */
    public function testSetOrientation()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setOrientation($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--orientation', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--orientation'});
    }

    /**
     * Test for setPageWidth()
     *
     * @throws JsonException
     */
    public function testSetPageWidth()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'A1';
        $doc->setPageWidth($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--page-width', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--page-width'});
    }

    /**
     * Test for setPageHeight()
     *
     * @throws JsonException
     */
    public function testSetPageHeight()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '10';
        $doc->setPageHeight($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--page-height', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--page-height'});
    }

    /**
     * Test for setPageSize()
     *
     * @throws JsonException
     */
    public function testSetPageSize()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'A1';
        $doc->setPageSize($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--page-size', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--page-size'});
    }

    /**
     * Test for setTitle()
     *
     * @throws JsonException
     */
    public function testSetTitle()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'Test';
        $doc->setTitle($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--title', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--title'});
    }

    /**
     * Test for setEncoding()
     *
     * @throws JsonException
     */
    public function testSetEncoding()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'utf-8';
        $doc->setEncoding($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--encoding', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--encoding'});
    }

    /**
     * Test for setJavascriptDelay()
     *
     * @throws JsonException
     */
    public function testSetJavascriptDelay()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 10;
        $doc->setJavascriptDelay($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--javascript-delay', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--javascript-delay'});
    }

    /**
     * Test for setUserStyleSheet()
     *
     * @throws JsonException
     */
    public function testSetUserStyleSheet()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setUserStyleSheet($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--user-style-sheet', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--user-style-sheet'});
    }

    /**
     * Test for setViewportSize()
     *
     * @throws JsonException
     */
    public function testSetViewportSize()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '10';
        $doc->setViewportSize($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--viewport-size', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--viewport-size'});
    }

    /**
     * Test for setZoom()
     *
     * @throws JsonException
     */
    public function testSetZoom()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 50;
        $doc->setZoom($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--zoom', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--zoom'});
    }

    /**
     * Test for setFooterCenter()
     *
     * @throws JsonException
     */
    public function testSetFooterCenter()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setFooterCenter($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--footer-center', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--footer-center'});
    }

    /**
     * Test for setFooterFontName()
     *
     * @throws JsonException
     */
    public function testSetFooterFontName()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setFooterFontName($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--footer-font-name', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--footer-font-name'});
    }

    /**
     * Test for setFooterFontSize()
     *
     * @throws JsonException
     */
    public function testSetFooterFontSize()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 10;
        $doc->setFooterFontSize($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--footer-font-size', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--footer-font-size'});
    }

    /**
     * Test for setFooterHtml()
     *
     * @throws JsonException
     */
    public function testSetFooterHtml()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '<body></body>';
        $doc->setFooterHtml($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--footer-html', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--footer-html'});
    }

    /**
     * Test for setFooterLeft()
     *
     * @throws JsonException
     */
    public function testSetFooterLeft()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'Test';
        $doc->setFooterLeft($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--footer-left', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--footer-left'});
    }

    /**
     * Test for setFooterRight()
     *
     * @throws JsonException
     */
    public function testSetFooterRight()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setFooterRight($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--footer-right', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--footer-right'});
    }

    /**
     * Test for setFooterSpacing()
     *
     * @throws JsonException
     */
    public function testSetFooterSpacing()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 10;
        $doc->setFooterSpacing($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--footer-spacing', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--footer-spacing'});
    }

    /**
     * Test for setHeaderCenter()
     *
     * @throws JsonException
     */
    public function testSetHeaderCenter()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setHeaderCenter($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--header-center', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--header-center'});
    }

    /**
     * Test for setHeaderFontName()
     *
     * @throws JsonException
     */
    public function testSetHeaderFontName()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setHeaderFontName($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--header-font-name', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--header-font-name'});
    }

    /**
     * Test for setHeaderFontSize()
     *
     * @throws JsonException
     */
    public function testSetHeaderFontSize()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 10;
        $doc->setHeaderFontSize($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--header-font-size', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--header-font-size'});
    }

    /**
     * Test for setHeaderHtml()
     *
     * @throws JsonException
     */
    public function testSetHeaderHtml()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '<body></body>';
        $doc->setHeaderHtml($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--header-html', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--header-html'});
    }

    /**
     * Test for setHeaderLeft()
     *
     * @throws JsonException
     */
    public function testSetHeaderLeft()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setHeaderLeft($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--header-left', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--header-left'});
    }

    /**
     * Test for setHeaderRight()
     *
     * @throws JsonException
     */
    public function testSetHeaderRight()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setHeaderRight($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--header-right', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--header-right'});
    }

    /**
     * Test for setHeaderSpacing()
     *
     * @throws JsonException
     */
    public function testSetHeaderSpacing()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 10;
        $doc->setHeaderSpacing($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--header-spacing', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--header-spacing'});
    }

    /**
     * Test for setReplace()
     *
     * @throws JsonException
     */
    public function testSetReplace()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '';
        $doc->setReplace($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--replace', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--replace'});
    }

    /**
     * Test for setPageOffset()
     *
     * @throws JsonException
     */
    public function testSetPageOffset()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 30;
        $doc->setPageOffset($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--page-offset', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--page-offset'});
    }

    /**
     * Test for setMinimumFontSize()
     *
     * @throws JsonException
     */
    public function testSetMinimumFontSize()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 10;
        $doc->setMinimumFontSize($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--minimum-font-size', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--minimum-font-size'});
    }

}