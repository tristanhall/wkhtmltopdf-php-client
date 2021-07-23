<?php

namespace Tests\Feature;

use Illuminate\Support\Arr;
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
    protected ApiClient $apiClient;

    /**
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
     * Test for unsetDpi()
     */
    public function testUnsetDpi()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 20;
        $doc->setDpi($optionValue);
        $doc->unsetDpi();
        
        $this->assertArrayNotHasKey('--dpi', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetImageDpi()
     */
    public function testUnsetImageDpi()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 20;
        $doc->setImageDpi($optionValue);
        $doc->unsetImageDpi();
        
        $this->assertArrayNotHasKey('--image-dpi', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetImageQuality()
     */
    public function testUnsetImageQuality()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 20;
        $doc->setImageQuality($optionValue);
        $doc->unsetImageQuality();
        
        $this->assertArrayNotHasKey('--image-quality', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetMarginBottom()
     */
    public function testUnsetMarginBottom()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '10';
        $doc->setMarginBottom($optionValue);
        $doc->unsetMarginBottom();
        
        $this->assertArrayNotHasKey('--margin-bottom', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetMarginLeft()
     */
    public function testUnsetMarginLeft()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '10';
        $doc->setMarginLeft($optionValue);
        $doc->unsetMarginLeft();
        
        $this->assertArrayNotHasKey('--margin-left', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetMarginTop()
     */
    public function testUnsetMarginTop()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '10';
        $doc->setMarginTop($optionValue);
        $doc->unsetMarginTop();
        
        $this->assertArrayNotHasKey('--margin-top', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetMarginRight()
     */
    public function testUnsetMarginRight()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '10';
        $doc->setMarginRight($optionValue);
        $doc->unsetMarginRight();
        
        $this->assertArrayNotHasKey('--margin-right', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetOrientation()
     */
    public function testUnsetOrientation()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setOrientation($optionValue);
        $doc->unsetOrientation();
        
        $this->assertArrayNotHasKey('--orientation', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetPageWidth()
     */
    public function testUnsetPageWidth()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'A1';
        $doc->setPageWidth($optionValue);
        $doc->unsetPageWidth();
        
        $this->assertArrayNotHasKey('--page-width', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetPageHeight()
     */
    public function testUnsetPageHeight()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '10';
        $doc->setPageHeight($optionValue);
        $doc->unsetPageHeight();
        
        $this->assertArrayNotHasKey('--page-height', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetPageSize()
     */
    public function testUnsetPageSize()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'A1';
        $doc->setPageSize($optionValue);
        $doc->unsetPageSize();
        
        $this->assertArrayNotHasKey('--page-size', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetTitle()
     */
    public function testUnsetTitle()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'Test';
        $doc->setTitle($optionValue);
        $doc->unsetTitle();
        
        $this->assertArrayNotHasKey('--title', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetEncoding()
     */
    public function testUnsetEncoding()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'utf-8';
        $doc->setEncoding($optionValue);
        $doc->unsetEncoding();
        
        $this->assertArrayNotHasKey('--encoding', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetJavascriptDelay()
     */
    public function testUnsetJavascriptDelay()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 10;
        $doc->setJavascriptDelay($optionValue);
        $doc->unsetJavascriptDelay();
        
        $this->assertArrayNotHasKey('--javascript-delay', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetUserStyleSheet()
     */
    public function testUnsetUserStyleSheet()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setUserStyleSheet($optionValue);
        $doc->unsetUserStyleSheet();
        
        $this->assertArrayNotHasKey('--user-style-sheet', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetViewportSize()
     */
    public function testUnsetViewportSize()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '10';
        $doc->setViewportSize($optionValue);
        $doc->unsetViewportSize();
        
        $this->assertArrayNotHasKey('--viewport-size', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetZoom()
     */
    public function testUnsetZoom()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 50;
        $doc->setZoom($optionValue);
        $doc->unsetZoom();
        
        $this->assertArrayNotHasKey('--zoom', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetFooterCenter()
     */
    public function testUnsetFooterCenter()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setFooterCenter($optionValue);
        $doc->unsetFooterCenter();
        
        $this->assertArrayNotHasKey('--footer-center', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetFooterFontName()
     */
    public function testUnsetFooterFontName()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setFooterFontName($optionValue);
        $doc->unsetFooterFontName();
        
        $this->assertArrayNotHasKey('--footer-font-name', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetFooterFontSize()
     */
    public function testUnsetFooterFontSize()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 10;
        $doc->setFooterFontSize($optionValue);
        $doc->unsetFooterFontSize();
        
        $this->assertArrayNotHasKey('--footer-font-size', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetFooterHtml()
     */
    public function testUnsetFooterHtml()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '<body></body>';
        $doc->setFooterHtml($optionValue);
        $doc->unsetFooterHtml();
        
        $this->assertArrayNotHasKey('--footer-html', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetFooterLeft()
     */
    public function testUnsetFooterLeft()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'Test';
        $doc->setFooterLeft($optionValue);
        $doc->unsetFooterLeft();
        
        $this->assertArrayNotHasKey('--footer-left', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetFooterRight()
     */
    public function testUnsetFooterRight()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setFooterRight($optionValue);
        $doc->unsetFooterRight();
        
        $this->assertArrayNotHasKey('--footer-right', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetFooterSpacing()
     */
    public function testUnsetFooterSpacing()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 10;
        $doc->setFooterSpacing($optionValue);
        $doc->unsetFooterSpacing();
        
        $this->assertArrayNotHasKey('--footer-spacing', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetHeaderCenter()
     */
    public function testUnsetHeaderCenter()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setHeaderCenter($optionValue);
        $doc->unsetHeaderCenter();
        
        $this->assertArrayNotHasKey('--header-center', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetHeaderFontName()
     */
    public function testUnsetHeaderFontName()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setHeaderFontName($optionValue);
        $doc->unsetHeaderFontName();
        
        $this->assertArrayNotHasKey('--header-font-name', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetHeaderFontSize()
     */
    public function testUnsetHeaderFontSize()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 10;
        $doc->setHeaderFontSize($optionValue);
        $doc->unsetHeaderFontSize();
        
        $this->assertArrayNotHasKey('--header-font-size', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetHeaderHtml()
     */
    public function testUnsetHeaderHtml()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '<body></body>';
        $doc->setHeaderHtml($optionValue);
        $doc->unsetHeaderHtml();
        
        $this->assertArrayNotHasKey('--header-html', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetHeaderLeft()
     */
    public function testUnsetHeaderLeft()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setHeaderLeft($optionValue);
        $doc->unsetHeaderLeft();
        
        $this->assertArrayNotHasKey('--header-left', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetHeaderRight()
     */
    public function testUnsetHeaderRight()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 'null';
        $doc->setHeaderRight($optionValue);
        $doc->unsetHeaderRight();
        
        $this->assertArrayNotHasKey('--header-right', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetHeaderSpacing()
     */
    public function testUnsetHeaderSpacing()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 10;
        $doc->setHeaderSpacing($optionValue);
        $doc->unsetHeaderSpacing();
        
        $this->assertArrayNotHasKey('--header-spacing', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetReplace()
     */
    public function testUnsetReplace()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = '';
        $doc->setReplace($optionValue);
        $doc->unsetReplace();
        
        $this->assertArrayNotHasKey('--replace', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetPageOffset()
     */
    public function testUnsetPageOffset()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 30;
        $doc->setPageOffset($optionValue);
        $doc->unsetPageOffset();
        
        $this->assertArrayNotHasKey('--page-offset', Arr::get($doc->getParams(), 'options', []));
    }

    /**
     * Test for unsetMinimumFontSize()
     */
    public function testUnsetMinimumFontSize()
    {
        $doc = $this->getDocumentInstance();
        $optionValue = 10;
        $doc->setMinimumFontSize($optionValue);
        $doc->unsetMinimumFontSize();
        
        $this->assertArrayNotHasKey('--minimum-font-size', Arr::get($doc->getParams(), 'options', []));
    }

}