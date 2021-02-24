<?php

namespace Tests\Feature;

use JsonException;
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
     * Test for setDpi() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateDpi()
    {
        $doc = $this->getDocumentInstance();
        $doc->setDpi(5);
        $optionValue = 20;
        $doc->setDpi($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--dpi', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--dpi'});
    }

    /**
     * Test for setImageDpi() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateImageDpiOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setImageDpi(5);
        $optionValue = 20;
        $doc->setImageDpi($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--image-dpi', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--image-dpi'});
    }

    /**
     * Test for setImageQuality() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateImageQualityOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setImageQuality(5);
        $optionValue = 20;
        $doc->setImageQuality($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--image-quality', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--image-quality'});
    }

    /**
     * Test for setMarginBottom() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateMarginBottomOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setMarginBottom('6');
        $optionValue = '10';
        $doc->setMarginBottom($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--margin-bottom', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--margin-bottom'});
    }

    /**
     * Test for setMarginLeft() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateMarginLeftOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setMarginLeft('6');
        $optionValue = '10';
        $doc->setMarginLeft($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--margin-left', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--margin-left'});
    }

    /**
     * Test for setMarginTop() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateMarginTopOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setMarginTop('6');
        $optionValue = '10';
        $doc->setMarginTop($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--margin-top', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--margin-top'});
    }

    /**
     * Test for setMarginRight() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateMarginRightOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setMarginRight('6');
        $optionValue = '10';
        $doc->setMarginRight($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--margin-right', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--margin-right'});
    }

    /**
     * Test for setOrientation() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateOrientationOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setOrientation('down');
        $optionValue = 'null';
        $doc->setOrientation($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--orientation', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--orientation'});
    }

    /**
     * Test for setPageWidth() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdatePageWidthOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setPageWidth('9');
        $optionValue = '10';
        $doc->setPageWidth($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--page-width', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--page-width'});
    }

    /**
     * Test for setPageHeight() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdatePageHeightOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setPageHeight('6');
        $optionValue = '10';
        $doc->setPageHeight($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--page-height', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--page-height'});
    }

    /**
     * Test for setPageSize() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdatePageSizeOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setPageSize('A2');
        $optionValue = 'A1';
        $doc->setPageSize($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--page-size', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--page-size'});
    }

    /**
     * Test for setTitle() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateTitleOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setTitle('other');
        $optionValue = 'Test';
        $doc->setTitle($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--title', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--title'});
    }

    /**
     * Test for setEncoding() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateEncodingOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setEncoding('utf-16');
        $optionValue = 'utf-8';
        $doc->setEncoding($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--encoding', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--encoding'});
    }

    /**
     * Test for setJavascriptDelay() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateJavascriptDelayOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setJavascriptDelay(5);
        $optionValue = 10;
        $doc->setJavascriptDelay($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--javascript-delay', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--javascript-delay'});
    }

    /**
     * Test for setUserStyleSheet() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateUserStyleSheetOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setUserStyleSheet('test');
        $optionValue = 'null';
        $doc->setUserStyleSheet($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--user-style-sheet', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--user-style-sheet'});
    }

    /**
     * Test for setViewportSize() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateViewportSizeOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setViewportSize('5');
        $optionValue = '10';
        $doc->setViewportSize($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--viewport-size', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--viewport-size'});
    }

    /**
     * Test for setZoom() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateZoomOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setZoom(5);
        $optionValue = 50;
        $doc->setZoom($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--zoom', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--zoom'});
    }

    /**
     * Test for setFooterCenter() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateFooterCenterOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setFooterCenter('test');
        $optionValue = 'null';
        $doc->setFooterCenter($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--footer-center', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--footer-center'});
    }

    /**
     * Test for setFooterFontName() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateFooterFontNameOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setFooterFontName('test');
        $optionValue = 'null';
        $doc->setFooterFontName($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--footer-font-name', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--footer-font-name'});
    }

    /**
     * Test for setFooterFontSize() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateFooterFontSizeOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setFooterFontSize(5);
        $optionValue = 10;
        $doc->setFooterFontSize($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--footer-font-size', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--footer-font-size'});
    }

    /**
     * Test for setFooterHtml() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateFooterHtmlOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setFooterHtml('');
        $optionValue = '<body></body>';
        $doc->setFooterHtml($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--footer-html', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--footer-html'});
    }

    /**
     * Test for setFooterLeft() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateFooterLeftOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setFooterLeft('');
        $optionValue = 'Test';
        $doc->setFooterLeft($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--footer-left', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--footer-left'});
    }

    /**
     * Test for setFooterRight() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateFooterRightOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setFooterRight('test');
        $optionValue = 'null';
        $doc->setFooterRight($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--footer-right', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--footer-right'});
    }

    /**
     * Test for setFooterSpacing() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateFooterSpacingOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setFooterSpacing(5);
        $optionValue = 10;
        $doc->setFooterSpacing($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--footer-spacing', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--footer-spacing'});
    }

    /**
     * Test for setHeaderCenter() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateHeaderCenterOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setHeaderCenter('');
        $optionValue = 'null';
        $doc->setHeaderCenter($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--header-center', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--header-center'});
    }

    /**
     * Test for setHeaderFontName() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateHeaderFontNameOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setHeaderFontName('test');
        $optionValue = 'null';
        $doc->setHeaderFontName($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--header-font-name', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--header-font-name'});
    }

    /**
     * Test for setHeaderFontSize() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateHeaderFontSizeOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setHeaderFontSize(5);
        $optionValue = 10;
        $doc->setHeaderFontSize($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--header-font-size', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--header-font-size'});
    }

    /**
     * Test for setHeaderHtml() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateHeaderHtmlOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setHeaderHtml('');
        $optionValue = '<body></body>';
        $doc->setHeaderHtml($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--header-html', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--header-html'});
    }

    /**
     * Test for setHeaderLeft() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateHeaderLeftOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setHeaderLeft('test');
        $optionValue = 'null';
        $doc->setHeaderLeft($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--header-left', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--header-left'});
    }

    /**
     * Test for setHeaderRight() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateHeaderRightOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setHeaderRight('test');
        $optionValue = 'null';
        $doc->setHeaderRight($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--header-right', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--header-right'});
    }

    /**
     * Test for setHeaderSpacing() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateHeaderSpacingOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setHeaderSpacing(5);
        $optionValue = 10;
        $doc->setHeaderSpacing($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--header-spacing', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--header-spacing'});
    }

    /**
     * Test for setReplace() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateReplaceOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setReplace(['find', 'replace']);
        $optionValue = [];
        $doc->setReplace($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--replace', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--replace'});
    }

    /**
     * Test for setPageOffset() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdatePageOffsetOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setPageOffset(5);
        $optionValue = 30;
        $doc->setPageOffset($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--page-offset', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--page-offset'});
    }

    /**
     * Test for setMinimumFontSize() when updating the option value.
     *
     * @throws JsonException
     */
    public function testUpdateMinimumFontSizeOption()
    {
        $doc = $this->getDocumentInstance();
        $doc->setMinimumFontSize(5);
        $optionValue = 10;
        $doc->setMinimumFontSize($optionValue);
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertObjectHasAttribute('--minimum-font-size', $body->options);
        $this->assertEquals($optionValue, $body->options->{'--minimum-font-size'});
    }
    
}