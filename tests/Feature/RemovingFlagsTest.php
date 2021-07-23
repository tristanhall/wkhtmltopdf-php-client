<?php

namespace Tests\Feature;

use Illuminate\Support\Arr;
use MinuteMan\WkhtmltopdfClient\ApiClient;
use MinuteMan\WkhtmltopdfClient\WkhtmltopdfDocument;
use PHPUnit\Framework\TestCase;

/**
 * Class RemovingFlagsOptionsTest
 *
 * @package Tests
 */
class RemovingFlagsTest extends TestCase
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
     * Test for unsetGrayscale()
     */
    public function testUnsetGrayscale()
    {
        $doc = $this->getDocumentInstance();
        $doc->setGrayscale();
        $doc->unsetGrayscale();

        $this->assertNotContains('--grayscale', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for unsetNoPdfCompression()
     */
    public function testUnsetNoPdfCompression()
    {
        $doc = $this->getDocumentInstance();
        $doc->setNoPdfCompression();
        $doc->unsetNoPdfCompression();

        $this->assertNotContains('--no-pdf-compression', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for unsetLowQuality()
     */
    public function testUnsetLowQuality()
    {
        $doc = $this->getDocumentInstance();
        $doc->setLowQuality();
        $doc->unsetLowQuality();

        $this->assertNotContains('--low-quality', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for unsetBackground()
     */
    public function testUnsetBackground()
    {
        $doc = $this->getDocumentInstance();
        $doc->setBackground();
        $doc->unsetBackground();

        $this->assertNotContains('--background', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for unsetNoBackground()
     */
    public function testUnsetNoBackground()
    {
        $doc = $this->getDocumentInstance();
        $doc->setNoBackground();
        $doc->unsetNoBackground();

        $this->assertNotContains('--no-background', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for unsetDisableExternalLinks()
     */
    public function testUnsetDisableExternalLinks()
    {
        $doc = $this->getDocumentInstance();
        $doc->setDisableExternalLinks();
        $doc->unsetDisableExternalLinks();

        $this->assertNotContains('--disable-external-links', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for unsetEnableExternalLinks()
     */
    public function testUnsetEnableExternalLinks()
    {
        $doc = $this->getDocumentInstance();
        $doc->setEnableExternalLinks();
        $doc->unsetEnableExternalLinks();

        $this->assertNotContains('--enable-external-links', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for unsetDisableForms()
     */
    public function testUnsetDisableForms()
    {
        $doc = $this->getDocumentInstance();
        $doc->setDisableForms();
        $doc->unsetDisableForms();

        $this->assertNotContains('--disable-forms', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for unsetEnableForms()
     */
    public function testUnsetEnableForms()
    {
        $doc = $this->getDocumentInstance();
        $doc->setEnableForms();
        $doc->unsetEnableForms();

        $this->assertNotContains('--enable-forms', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for unsetImages()
     */
    public function testUnsetImages()
    {
        $doc = $this->getDocumentInstance();
        $doc->setImages();
        $doc->unsetImages();

        $this->assertNotContains('--images', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for unsetNoImages()
     */
    public function testUnsetNoImages()
    {
        $doc = $this->getDocumentInstance();
        $doc->setNoImages();
        $doc->unsetNoImages();

        $this->assertNotContains('--no-images', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for unsetDisableInternalLinks()
     */
    public function testUnsetDisableInternalLinks()
    {
        $doc = $this->getDocumentInstance();
        $doc->setDisableInternalLinks();
        $doc->unsetDisableInternalLinks();

        $this->assertNotContains('--disable-internal-links', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for unsetEnableInternalLinks()
     */
    public function testUnsetEnableInternalLinks()
    {
        $doc = $this->getDocumentInstance();
        $doc->setEnableInternalLinks();
        $doc->unsetEnableInternalLinks();

        $this->assertNotContains('--enable-internal-links', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for unsetDisableJavascript()
     */
    public function testUnsetDisableJavascript()
    {
        $doc = $this->getDocumentInstance();
        $doc->setDisableJavascript();
        $doc->unsetDisableJavascript();

        $this->assertNotContains('--disable-javascript', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for unsetEnableJavascript()
     */
    public function testUnsetEnableJavascript()
    {
        $doc = $this->getDocumentInstance();
        $doc->setEnableJavascript();
        $doc->unsetEnableJavascript();

        $this->assertNotContains('--enable-javascript', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for unsetKeepRelativeLinks()
     */
    public function testUnsetKeepRelativeLinks()
    {
        $doc = $this->getDocumentInstance();
        $doc->setKeepRelativeLinks();
        $doc->unsetKeepRelativeLinks();

        $this->assertNotContains('--keep-relative-links', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for unsetResolveRelativeLinks()
     */
    public function testUnsetResolveRelativeLinks()
    {
        $doc = $this->getDocumentInstance();
        $doc->setResolveRelativeLinks();
        $doc->unsetResolveRelativeLinks();

        $this->assertNotContains('--resolve-relative-links', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for unsetPrintMediaType()
     */
    public function testUnsetPrintMediaType()
    {
        $doc = $this->getDocumentInstance();
        $doc->setPrintMediaType();
        $doc->unsetPrintMediaType();

        $this->assertNotContains('--print-media-type', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for unsetNoPrintMediaType()
     */
    public function testUnsetNoPrintMediaType()
    {
        $doc = $this->getDocumentInstance();
        $doc->setNoPrintMediaType();
        $doc->unsetNoPrintMediaType();

        $this->assertNotContains('--no-print-media-type', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for unsetDisableSmartShrinking()
     */
    public function testUnsetDisableSmartShrinking()
    {
        $doc = $this->getDocumentInstance();
        $doc->setDisableSmartShrinking();
        $doc->unsetDisableSmartShrinking();

        $this->assertNotContains('--disable-smart-shrinking', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for unsetEnableSmartShrinking()
     */
    public function testUnsetEnableSmartShrinking()
    {
        $doc = $this->getDocumentInstance();
        $doc->setEnableSmartShrinking();
        $doc->unsetEnableSmartShrinking();

        $this->assertNotContains('--enable-smart-shrinking', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for unsetFooterLine()
     */
    public function testUnsetFooterLine()
    {
        $doc = $this->getDocumentInstance();
        $doc->setFooterLine();
        $doc->unsetFooterLine();

        $this->assertNotContains('--footer-line', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for unsetNoFooterLine()
     */
    public function testUnsetNoFooterLine()
    {
        $doc = $this->getDocumentInstance();
        $doc->setNoFooterLine();
        $doc->unsetNoFooterLine();

        $this->assertNotContains('--no-footer-line', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for unsetHeaderLine()
     */
    public function testUnsetHeaderLine()
    {
        $doc = $this->getDocumentInstance();
        $doc->setHeaderLine();
        $doc->unsetHeaderLine();

        $this->assertNotContains('--header-line', Arr::get($doc->getParams(), 'flags', []));
    }

    /**
     * Test for unsetNoHeaderLine()
     */
    public function testUnsetNoHeaderLine()
    {
        $doc = $this->getDocumentInstance();
        $doc->setNoHeaderLine();
        $doc->unsetNoHeaderLine();

        $this->assertNotContains('--no-header-line', Arr::get($doc->getParams(), 'flags', []));
    }

}