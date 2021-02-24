<?php

namespace Tests\Feature;

use JsonException;
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
     * Test for unsetGrayscale()
     *
     * @throws JsonException
     */
    public function testUnsetGrayscale()
    {
        $doc = $this->getDocumentInstance();
        $doc->setGrayscale();
        $doc->unsetGrayscale();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--grayscale', $body->flags);
    }

    /**
     * Test for unsetNoPdfCompression()
     *
     * @throws JsonException
     */
    public function testUnsetNoPdfCompression()
    {
        $doc = $this->getDocumentInstance();
        $doc->setNoPdfCompression();
        $doc->unsetNoPdfCompression();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--no-pdf-compression', $body->flags);
    }

    /**
     * Test for unsetLowQuality()
     *
     * @throws JsonException
     */
    public function testUnsetLowQuality()
    {
        $doc = $this->getDocumentInstance();
        $doc->setLowQuality();
        $doc->unsetLowQuality();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--low-quality', $body->flags);
    }

    /**
     * Test for unsetBackground()
     *
     * @throws JsonException
     */
    public function testUnsetBackground()
    {
        $doc = $this->getDocumentInstance();
        $doc->setBackground();
        $doc->unsetBackground();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--background', $body->flags);
    }

    /**
     * Test for unsetNoBackground()
     *
     * @throws JsonException
     */
    public function testUnsetNoBackground()
    {
        $doc = $this->getDocumentInstance();
        $doc->setNoBackground();
        $doc->unsetNoBackground();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--no-background', $body->flags);
    }

    /**
     * Test for unsetDisableExternalLinks()
     *
     * @throws JsonException
     */
    public function testUnsetDisableExternalLinks()
    {
        $doc = $this->getDocumentInstance();
        $doc->setDisableExternalLinks();
        $doc->unsetDisableExternalLinks();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--disable-external-links', $body->flags);
    }

    /**
     * Test for unsetEnableExternalLinks()
     *
     * @throws JsonException
     */
    public function testUnsetEnableExternalLinks()
    {
        $doc = $this->getDocumentInstance();
        $doc->setEnableExternalLinks();
        $doc->unsetEnableExternalLinks();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--enable-external-links', $body->flags);
    }

    /**
     * Test for unsetDisableForms()
     *
     * @throws JsonException
     */
    public function testUnsetDisableForms()
    {
        $doc = $this->getDocumentInstance();
        $doc->setDisableForms();
        $doc->unsetDisableForms();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--disable-forms', $body->flags);
    }

    /**
     * Test for unsetEnableForms()
     *
     * @throws JsonException
     */
    public function testUnsetEnableForms()
    {
        $doc = $this->getDocumentInstance();
        $doc->setEnableForms();
        $doc->unsetEnableForms();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--enable-forms', $body->flags);
    }

    /**
     * Test for unsetImages()
     *
     * @throws JsonException
     */
    public function testUnsetImages()
    {
        $doc = $this->getDocumentInstance();
        $doc->setImages();
        $doc->unsetImages();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--images', $body->flags);
    }

    /**
     * Test for unsetNoImages()
     *
     * @throws JsonException
     */
    public function testUnsetNoImages()
    {
        $doc = $this->getDocumentInstance();
        $doc->setNoImages();
        $doc->unsetNoImages();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--no-images', $body->flags);
    }

    /**
     * Test for unsetDisableInternalLinks()
     *
     * @throws JsonException
     */
    public function testUnsetDisableInternalLinks()
    {
        $doc = $this->getDocumentInstance();
        $doc->setDisableInternalLinks();
        $doc->unsetDisableInternalLinks();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--disable-internal-links', $body->flags);
    }

    /**
     * Test for unsetEnableInternalLinks()
     *
     * @throws JsonException
     */
    public function testUnsetEnableInternalLinks()
    {
        $doc = $this->getDocumentInstance();
        $doc->setEnableInternalLinks();
        $doc->unsetEnableInternalLinks();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--enable-internal-links', $body->flags);
    }

    /**
     * Test for unsetDisableJavascript()
     *
     * @throws JsonException
     */
    public function testUnsetDisableJavascript()
    {
        $doc = $this->getDocumentInstance();
        $doc->setDisableJavascript();
        $doc->unsetDisableJavascript();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--disable-javascript', $body->flags);
    }

    /**
     * Test for unsetEnableJavascript()
     *
     * @throws JsonException
     */
    public function testUnsetEnableJavascript()
    {
        $doc = $this->getDocumentInstance();
        $doc->setEnableJavascript();
        $doc->unsetEnableJavascript();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--enable-javascript', $body->flags);
    }

    /**
     * Test for unsetKeepRelativeLinks()
     *
     * @throws JsonException
     */
    public function testUnsetKeepRelativeLinks()
    {
        $doc = $this->getDocumentInstance();
        $doc->setKeepRelativeLinks();
        $doc->unsetKeepRelativeLinks();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--keep-relative-links', $body->flags);
    }

    /**
     * Test for unsetResolveRelativeLinks()
     *
     * @throws JsonException
     */
    public function testUnsetResolveRelativeLinks()
    {
        $doc = $this->getDocumentInstance();
        $doc->setResolveRelativeLinks();
        $doc->unsetResolveRelativeLinks();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--resolve-relative-links', $body->flags);
    }

    /**
     * Test for unsetPrintMediaType()
     *
     * @throws JsonException
     */
    public function testUnsetPrintMediaType()
    {
        $doc = $this->getDocumentInstance();
        $doc->setPrintMediaType();
        $doc->unsetPrintMediaType();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--print-media-type', $body->flags);
    }

    /**
     * Test for unsetNoPrintMediaType()
     *
     * @throws JsonException
     */
    public function testUnsetNoPrintMediaType()
    {
        $doc = $this->getDocumentInstance();
        $doc->setNoPrintMediaType();
        $doc->unsetNoPrintMediaType();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--no-print-media-type', $body->flags);
    }

    /**
     * Test for unsetDisableSmartShrinking()
     *
     * @throws JsonException
     */
    public function testUnsetDisableSmartShrinking()
    {
        $doc = $this->getDocumentInstance();
        $doc->setDisableSmartShrinking();
        $doc->unsetDisableSmartShrinking();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--disable-smart-shrinking', $body->flags);
    }

    /**
     * Test for unsetEnableSmartShrinking()
     *
     * @throws JsonException
     */
    public function testUnsetEnableSmartShrinking()
    {
        $doc = $this->getDocumentInstance();
        $doc->setEnableSmartShrinking();
        $doc->unsetEnableSmartShrinking();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--enable-smart-shrinking', $body->flags);
    }

    /**
     * Test for unsetFooterLine()
     *
     * @throws JsonException
     */
    public function testUnsetFooterLine()
    {
        $doc = $this->getDocumentInstance();
        $doc->setFooterLine();
        $doc->unsetFooterLine();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--footer-line', $body->flags);
    }

    /**
     * Test for unsetNoFooterLine()
     *
     * @throws JsonException
     */
    public function testUnsetNoFooterLine()
    {
        $doc = $this->getDocumentInstance();
        $doc->setNoFooterLine();
        $doc->unsetNoFooterLine();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--no-footer-line', $body->flags);
    }

    /**
     * Test for unsetHeaderLine()
     *
     * @throws JsonException
     */
    public function testUnsetHeaderLine()
    {
        $doc = $this->getDocumentInstance();
        $doc->setHeaderLine();
        $doc->unsetHeaderLine();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--header-line', $body->flags);
    }

    /**
     * Test for unsetNoHeaderLine()
     *
     * @throws JsonException
     */
    public function testUnsetNoHeaderLine()
    {
        $doc = $this->getDocumentInstance();
        $doc->setNoHeaderLine();
        $doc->unsetNoHeaderLine();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertNotContains('--no-header-line', $body->flags);
    }

}