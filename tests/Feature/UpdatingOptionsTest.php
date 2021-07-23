<?php

namespace Tests\Feature;

use Illuminate\Support\Arr;
use MinuteMan\WkhtmltopdfClient\ApiClient;
use MinuteMan\WkhtmltopdfClient\WkhtmltopdfDocument;
use PHPUnit\Framework\TestCase;

/**
 * Class UpdatingOptionsTest
 * 
 * @package Tests\Feature
 */
class UpdatingOptionsTest extends TestCase
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
     * Test for setDpi() when updating the option value.
     */
    public function testUpdateDpi()
    {
        $doc = $this->getDocumentInstance();
        $doc->setDpi(5);
        $optionValue = 20;
        $doc->setDpi($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--dpi', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--dpi'));
    }

    /**
     * Test for setImageDpi() when updating the option value.
     */
    public function testUpdateImageDpiOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setImageDpi(5);
        $optionValue = 20;
        $doc->setImageDpi($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--image-dpi', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--image-dpi'));
    }

    /**
     * Test for setImageQuality() when updating the option value.
     */
    public function testUpdateImageQualityOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setImageQuality(5);
        $optionValue = 20;
        $doc->setImageQuality($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--image-quality', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--image-quality'));
    }

    /**
     * Test for setMarginBottom() when updating the option value.
     */
    public function testUpdateMarginBottomOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setMarginBottom('6');
        $optionValue = '10';
        $doc->setMarginBottom($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--margin-bottom', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--margin-bottom'));
    }

    /**
     * Test for setMarginLeft() when updating the option value.
     */
    public function testUpdateMarginLeftOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setMarginLeft('6');
        $optionValue = '10';
        $doc->setMarginLeft($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--margin-left', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--margin-left'));
    }

    /**
     * Test for setMarginTop() when updating the option value.
     */
    public function testUpdateMarginTopOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setMarginTop('6');
        $optionValue = '10';
        $doc->setMarginTop($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--margin-top', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--margin-top'));
    }

    /**
     * Test for setMarginRight() when updating the option value.
     */
    public function testUpdateMarginRightOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setMarginRight('6');
        $optionValue = '10';
        $doc->setMarginRight($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--margin-right', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--margin-right'));
    }

    /**
     * Test for setOrientation() when updating the option value.
     */
    public function testUpdateOrientationOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setOrientation('down');
        $optionValue = 'null';
        $doc->setOrientation($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--orientation', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--orientation'));
    }

    /**
     * Test for setPageWidth() when updating the option value.
     */
    public function testUpdatePageWidthOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setPageWidth('9');
        $optionValue = '10';
        $doc->setPageWidth($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--page-width', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--page-width'));
    }

    /**
     * Test for setPageHeight() when updating the option value.
     */
    public function testUpdatePageHeightOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setPageHeight('6');
        $optionValue = '10';
        $doc->setPageHeight($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--page-height', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--page-height'));
    }

    /**
     * Test for setPageSize() when updating the option value.
     */
    public function testUpdatePageSizeOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setPageSize('A2');
        $optionValue = 'A1';
        $doc->setPageSize($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--page-size', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--page-size'));
    }

    /**
     * Test for setTitle() when updating the option value.
     */
    public function testUpdateTitleOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setTitle('other');
        $optionValue = 'Test';
        $doc->setTitle($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--title', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--title'));
    }

    /**
     * Test for setEncoding() when updating the option value.
     */
    public function testUpdateEncodingOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setEncoding('utf-16');
        $optionValue = 'utf-8';
        $doc->setEncoding($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--encoding', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--encoding'));
    }

    /**
     * Test for setJavascriptDelay() when updating the option value.
     */
    public function testUpdateJavascriptDelayOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setJavascriptDelay(5);
        $optionValue = 10;
        $doc->setJavascriptDelay($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--javascript-delay', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--javascript-delay'));
    }

    /**
     * Test for setUserStyleSheet() when updating the option value.
     */
    public function testUpdateUserStyleSheetOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setUserStyleSheet('test');
        $optionValue = 'null';
        $doc->setUserStyleSheet($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--user-style-sheet', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--user-style-sheet'));
    }

    /**
     * Test for setViewportSize() when updating the option value.
     */
    public function testUpdateViewportSizeOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setViewportSize('5');
        $optionValue = '10';
        $doc->setViewportSize($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--viewport-size', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--viewport-size'));
    }

    /**
     * Test for setZoom() when updating the option value.
     */
    public function testUpdateZoomOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setZoom(5);
        $optionValue = 50;
        $doc->setZoom($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--zoom', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--zoom'));
    }

    /**
     * Test for setFooterCenter() when updating the option value.
     */
    public function testUpdateFooterCenterOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setFooterCenter('test');
        $optionValue = 'null';
        $doc->setFooterCenter($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--footer-center', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--footer-center'));
    }

    /**
     * Test for setFooterFontName() when updating the option value.
     */
    public function testUpdateFooterFontNameOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setFooterFontName('test');
        $optionValue = 'null';
        $doc->setFooterFontName($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--footer-font-name', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--footer-font-name'));
    }

    /**
     * Test for setFooterFontSize() when updating the option value.
     */
    public function testUpdateFooterFontSizeOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setFooterFontSize(5);
        $optionValue = 10;
        $doc->setFooterFontSize($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--footer-font-size', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--footer-font-size'));
    }

    /**
     * Test for setFooterHtml() when updating the option value.
     */
    public function testUpdateFooterHtmlOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setFooterHtml('');
        $optionValue = '<body></body>';
        $doc->setFooterHtml($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--footer-html', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--footer-html'));
    }

    /**
     * Test for setFooterLeft() when updating the option value.
     */
    public function testUpdateFooterLeftOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setFooterLeft('');
        $optionValue = 'Test';
        $doc->setFooterLeft($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--footer-left', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--footer-left'));
    }

    /**
     * Test for setFooterRight() when updating the option value.
     */
    public function testUpdateFooterRightOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setFooterRight('test');
        $optionValue = 'null';
        $doc->setFooterRight($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--footer-right', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--footer-right'));
    }

    /**
     * Test for setFooterSpacing() when updating the option value.
     */
    public function testUpdateFooterSpacingOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setFooterSpacing(5);
        $optionValue = 10;
        $doc->setFooterSpacing($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--footer-spacing', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--footer-spacing'));
    }

    /**
     * Test for setHeaderCenter() when updating the option value.
     */
    public function testUpdateHeaderCenterOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setHeaderCenter('');
        $optionValue = 'null';
        $doc->setHeaderCenter($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--header-center', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--header-center'));
    }

    /**
     * Test for setHeaderFontName() when updating the option value.
     */
    public function testUpdateHeaderFontNameOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setHeaderFontName('test');
        $optionValue = 'null';
        $doc->setHeaderFontName($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--header-font-name', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--header-font-name'));
    }

    /**
     * Test for setHeaderFontSize() when updating the option value.
     */
    public function testUpdateHeaderFontSizeOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setHeaderFontSize(5);
        $optionValue = 10;
        $doc->setHeaderFontSize($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--header-font-size', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--header-font-size'));
    }

    /**
     * Test for setHeaderHtml() when updating the option value.
     */
    public function testUpdateHeaderHtmlOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setHeaderHtml('');
        $optionValue = '<body></body>';
        $doc->setHeaderHtml($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--header-html', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--header-html'));
    }

    /**
     * Test for setHeaderLeft() when updating the option value.
     */
    public function testUpdateHeaderLeftOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setHeaderLeft('test');
        $optionValue = 'null';
        $doc->setHeaderLeft($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--header-left', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--header-left'));
    }

    /**
     * Test for setHeaderRight() when updating the option value.
     */
    public function testUpdateHeaderRightOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setHeaderRight('test');
        $optionValue = 'null';
        $doc->setHeaderRight($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--header-right', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--header-right'));
    }

    /**
     * Test for setHeaderSpacing() when updating the option value.
     */
    public function testUpdateHeaderSpacingOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setHeaderSpacing(5);
        $optionValue = 10;
        $doc->setHeaderSpacing($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--header-spacing', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--header-spacing'));
    }

    /**
     * Test for setReplace() when updating the option value.
     */
    public function testUpdateReplaceOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setReplace(['find', 'replace']);
        $optionValue = [];
        $doc->setReplace($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--replace', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--replace'));
    }

    /**
     * Test for setPageOffset() when updating the option value.
     */
    public function testUpdatePageOffsetOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setPageOffset(5);
        $optionValue = 30;
        $doc->setPageOffset($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--page-offset', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--page-offset'));
    }

    /**
     * Test for setMinimumFontSize() when updating the option value.
     */
    public function testUpdateMinimumFontSizeOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setMinimumFontSize(5);
        $optionValue = 10;
        $doc->setMinimumFontSize($optionValue);
        $options = Arr::get($doc->getParams(), 'options', []);

        $this->assertArrayHasKey('--minimum-font-size', $options);
        $this->assertEquals($optionValue, Arr::get($options, '--minimum-font-size'));
    }
    
}