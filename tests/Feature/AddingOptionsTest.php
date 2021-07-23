<?php

namespace Tests\Feature;

use Illuminate\Support\Arr;
use PHPUnit\Framework\TestCase;
use MinuteMan\WkhtmltopdfClient\ApiClient;
use MinuteMan\WkhtmltopdfClient\WkhtmltopdfDocument;

class AddingOptionsTest extends TestCase
{

    /**
     * @var ApiClient
     */
    protected ApiClient $apiClient;

    /**
     *
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
     * Test for setDpi()
     */
    public function testSetDpi()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 20;
        $doc->setDpi($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--dpi', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--dpi'));
    }

    /**
     * Test for setImageDpi()
     */
    public function testSetImageDpi()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 20;
        $doc->setImageDpi($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--image-dpi', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--image-dpi'));
    }

    /**
     * Test for setImageQuality()
     */
    public function testSetImageQuality()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 20;
        $doc->setImageQuality($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--image-quality', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--image-quality'));
    }

    /**
     * Test for setMarginBottom()
     */
    public function testSetMarginBottom()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '10';
        $doc->setMarginBottom($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--margin-bottom', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--margin-bottom'));
    }

    /**
     * Test for setMarginLeft()
     */
    public function testSetMarginLeft()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '10';
        $doc->setMarginLeft($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--margin-left', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--margin-left'));
    }

    /**
     * Test for setMarginTop()
     */
    public function testSetMarginTop()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '10';
        $doc->setMarginTop($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--margin-top', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--margin-top'));
    }

    /**
     * Test for setMarginRight()
     */
    public function testSetMarginRight()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '10';
        $doc->setMarginRight($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--margin-right', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--margin-right'));
    }

    /**
     * Test for setOrientation()
     */
    public function testSetOrientation()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setOrientation($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--orientation', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--orientation'));
    }

    /**
     * Test for setPageWidth()
     */
    public function testSetPageWidth()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'A1';
        $doc->setPageWidth($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--page-width', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--page-width'));
    }

    /**
     * Test for setPageHeight()
     */
    public function testSetPageHeight()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '10';
        $doc->setPageHeight($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--page-height', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--page-height'));
    }

    /**
     * Test for setPageSize()
     */
    public function testSetPageSize()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'A1';
        $doc->setPageSize($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--page-size', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--page-size'));
    }

    /**
     * Test for setTitle()
     */
    public function testSetTitle()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'Test';
        $doc->setTitle($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--title', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--title'));
    }

    /**
     * Test for setEncoding()
     */
    public function testSetEncoding()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'utf-8';
        $doc->setEncoding($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--encoding', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--encoding'));
    }

    /**
     * Test for setJavascriptDelay()
     */
    public function testSetJavascriptDelay()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 10;
        $doc->setJavascriptDelay($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--javascript-delay', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--javascript-delay'));
    }

    /**
     * Test for setUserStyleSheet()
     */
    public function testSetUserStyleSheet()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setUserStyleSheet($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--user-style-sheet', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--user-style-sheet'));
    }

    /**
     * Test for setViewportSize()
     */
    public function testSetViewportSize()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '10';
        $doc->setViewportSize($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--viewport-size', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--viewport-size'));
    }

    /**
     * Test for setZoom()
     */
    public function testSetZoom()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 50;
        $doc->setZoom($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--zoom', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--zoom'));
    }

    /**
     * Test for setFooterCenter()
     */
    public function testSetFooterCenter()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setFooterCenter($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--footer-center', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--footer-center'));
    }

    /**
     * Test for setFooterFontName()
     */
    public function testSetFooterFontName()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setFooterFontName($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--footer-font-name', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--footer-font-name'));
    }

    /**
     * Test for setFooterFontSize()
     */
    public function testSetFooterFontSize()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 10;
        $doc->setFooterFontSize($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--footer-font-size', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--footer-font-size'));
    }

    /**
     * Test for setFooterHtml()
     */
    public function testSetFooterHtml()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '<body></body>';
        $doc->setFooterHtml($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--footer-html', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--footer-html'));
    }

    /**
     * Test for setFooterLeft()
     */
    public function testSetFooterLeft()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'Test';
        $doc->setFooterLeft($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--footer-left', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--footer-left'));
    }

    /**
     * Test for setFooterRight()
     */
    public function testSetFooterRight()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setFooterRight($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--footer-right', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--footer-right'));
    }

    /**
     * Test for setFooterSpacing()
     */
    public function testSetFooterSpacing()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 10;
        $doc->setFooterSpacing($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--footer-spacing', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--footer-spacing'));
    }

    /**
     * Test for setHeaderCenter()
     */
    public function testSetHeaderCenter()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setHeaderCenter($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--header-center', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--header-center'));
    }

    /**
     * Test for setHeaderFontName()
     */
    public function testSetHeaderFontName()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setHeaderFontName($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--header-font-name', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--header-font-name'));
    }

    /**
     * Test for setHeaderFontSize()
     */
    public function testSetHeaderFontSize()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 10;
        $doc->setHeaderFontSize($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--header-font-size', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--header-font-size'));
    }

    /**
     * Test for setHeaderHtml()
     */
    public function testSetHeaderHtml()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '<body></body>';
        $doc->setHeaderHtml($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--header-html', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--header-html'));
    }

    /**
     * Test for setHeaderLeft()
     */
    public function testSetHeaderLeft()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setHeaderLeft($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--header-left', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--header-left'));
    }

    /**
     * Test for setHeaderRight()
     */
    public function testSetHeaderRight()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setHeaderRight($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--header-right', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--header-right'));
    }

    /**
     * Test for setHeaderSpacing()
     */
    public function testSetHeaderSpacing()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 10;
        $doc->setHeaderSpacing($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--header-spacing', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--header-spacing'));
    }

    /**
     * Test for setReplace()
     */
    public function testSetReplace()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '';
        $doc->setReplace($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--replace', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--replace'));
    }

    /**
     * Test for setPageOffset()
     */
    public function testSetPageOffset()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 30;
        $doc->setPageOffset($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--page-offset', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--page-offset'));
    }

    /**
     * Test for setMinimumFontSize()
     */
    public function testSetMinimumFontSize()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 10;
        $doc->setMinimumFontSize($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--minimum-font-size', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--minimum-font-size'));
    }

}