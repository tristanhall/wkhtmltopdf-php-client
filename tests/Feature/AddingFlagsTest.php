<?php

namespace Tests\Feature;

use Illuminate\Support\Arr;
use MinuteMan\WkhtmltopdfClient\ApiClient;
use MinuteMan\WkhtmltopdfClient\WkhtmltopdfDocument;
use PHPUnit\Framework\TestCase;

/**
 * Class AddingFlagsOptionsTest
 *
 * @package Tests
 */
class AddingFlagsTest extends TestCase
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
     * Test for setGrayscale()
     */
    public function testSetGrayscale()
    {
        $doc = $this->getDocumentInstance();
        $doc->setGrayscale();

        $this->assertContains('--grayscale', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for setNoPdfCompression()
     */
    public function testSetNoPdfCompression()
    {
        $doc = $this->getDocumentInstance();
        $doc->setNoPdfCompression();

        $this->assertContains('--no-pdf-compression', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for setLowQuality()
     */
    public function testSetLowQuality()
    {
        $doc = $this->getDocumentInstance();
        $doc->setLowQuality();

        $this->assertContains('--lowquality', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for setBackground()
     */
    public function testSetBackground()
    {
        $doc = $this->getDocumentInstance();
        $doc->setBackground();

        $this->assertContains('--background', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for setNoBackground()
     */
    public function testSetNoBackground()
    {
        $doc = $this->getDocumentInstance();
        $doc->setNoBackground();

        $this->assertContains('--no-background', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for setDisableExternalLinks()
     */
    public function testSetDisableExternalLinks()
    {
        $doc = $this->getDocumentInstance();
        $doc->setDisableExternalLinks();

        $this->assertContains('--disable-external-links', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for setEnableExternalLinks()
     */
    public function testSetEnableExternalLinks()
    {
        $doc = $this->getDocumentInstance();
        $doc->setEnableExternalLinks();

        $this->assertContains('--enable-external-links', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for setDisableForms()
     */
    public function testSetDisableForms()
    {
        $doc = $this->getDocumentInstance();
        $doc->setDisableForms();

        $this->assertContains('--disable-forms', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for setEnableForms()
     */
    public function testSetEnableForms()
    {
        $doc = $this->getDocumentInstance();
        $doc->setEnableForms();

        $this->assertContains('--enable-forms', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for setImages()
     */
    public function testSetImages()
    {
        $doc = $this->getDocumentInstance();
        $doc->setImages();

        $this->assertContains('--images', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for setNoImages()
     */
    public function testSetNoImages()
    {
        $doc = $this->getDocumentInstance();
        $doc->setNoImages();

        $this->assertContains('--no-images', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for setDisableInternalLinks()
     */
    public function testSetDisableInternalLinks()
    {
        $doc = $this->getDocumentInstance();
        $doc->setDisableInternalLinks();

        $this->assertContains('--disable-internal-links', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for setEnableInternalLinks()
     */
    public function testSetEnableInternalLinks()
    {
        $doc = $this->getDocumentInstance();
        $doc->setEnableInternalLinks();

        $this->assertContains('--enable-internal-links', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for setDisableJavascript()
     */
    public function testSetDisableJavascript()
    {
        $doc = $this->getDocumentInstance();
        $doc->setDisableJavascript();

        $this->assertContains('--disable-javascript', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for setEnableJavascript()
     */
    public function testSetEnableJavascript()
    {
        $doc = $this->getDocumentInstance();
        $doc->setEnableJavascript();

        $this->assertContains('--enable-javascript', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for setKeepRelativeLinks()
     */
    public function testSetKeepRelativeLinks()
    {
        $doc = $this->getDocumentInstance();
        $doc->setKeepRelativeLinks();

        $this->assertContains('--keep-relative-links', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for setResolveRelativeLinks()
     */
    public function testSetResolveRelativeLinks()
    {
        $doc = $this->getDocumentInstance();
        $doc->setResolveRelativeLinks();

        $this->assertContains('--resolve-relative-links', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for setPrintMediaType()
     */
    public function testSetPrintMediaType()
    {
        $doc = $this->getDocumentInstance();
        $doc->setPrintMediaType();

        $this->assertContains('--print-media-type', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for setNoPrintMediaType()
     */
    public function testSetNoPrintMediaType()
    {
        $doc = $this->getDocumentInstance();
        $doc->setNoPrintMediaType();

        $this->assertContains('--no-print-media-type', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for setDisableSmartShrinking()
     */
    public function testSetDisableSmartShrinking()
    {
        $doc = $this->getDocumentInstance();
        $doc->setDisableSmartShrinking();

        $this->assertContains('--disable-smart-shrinking', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for setEnableSmartShrinking()
     */
    public function testSetEnableSmartShrinking()
    {
        $doc = $this->getDocumentInstance();
        $doc->setEnableSmartShrinking();

        $this->assertContains('--enable-smart-shrinking', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for setFooterLine()
     */
    public function testSetFooterLine()
    {
        $doc = $this->getDocumentInstance();
        $doc->setFooterLine();

        $this->assertContains('--footer-line', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for setNoFooterLine()
     */
    public function testSetNoFooterLine()
    {
        $doc = $this->getDocumentInstance();
        $doc->setNoFooterLine();

        $this->assertContains('--no-footer-line', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for setHeaderLine()
     */
    public function testSetHeaderLine()
    {
        $doc = $this->getDocumentInstance();
        $doc->setHeaderLine();

        $this->assertContains('--header-line', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for setNoHeaderLine()
     */
    public function testSetNoHeaderLine()
    {
        $doc = $this->getDocumentInstance();
        $doc->setNoHeaderLine();

        $this->assertContains('--no-header-line', Arr::get($doc->getParams(), 'flags', []));
    }

}