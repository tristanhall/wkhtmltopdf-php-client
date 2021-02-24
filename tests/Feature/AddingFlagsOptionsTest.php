<?php

namespace Tests\Feature;

use JsonException;
use MinuteMan\WkhtmltopdfClient\ApiClient;
use MinuteMan\WkhtmltopdfClient\WkhtmltopdfDocument;
use PHPUnit\Framework\TestCase;

/**
 * Class AddingFlagsOptionsTest
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
     * Test for setGrayscale()
     *
     * @throws JsonException
     */
    public function testSetGrayscale()
    {
        $doc = $this->getDocumentInstance();
        $doc->setGrayscale();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertContains('--grayscale', $body->flags);
    }

    /**
     * Test for setNoPdfCompression()
     *
     * @throws JsonException
     */
    public function testSetNoPdfCompression()
    {
        $doc = $this->getDocumentInstance();
        $doc->setNoPdfCompression();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertContains('--no-pdf-compression', $body->flags);
    }

    /**
     * Test for setLowQuality()
     *
     * @throws JsonException
     */
    public function testSetLowQuality()
    {
        $doc = $this->getDocumentInstance();
        $doc->setLowQuality();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertContains('--lowquality', $body->flags);
    }

    /**
     * Test for setBackground()
     *
     * @throws JsonException
     */
    public function testSetBackground()
    {
        $doc = $this->getDocumentInstance();
        $doc->setBackground();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertContains('--background', $body->flags);
    }

    /**
     * Test for setNoBackground()
     *
     * @throws JsonException
     */
    public function testSetNoBackground()
    {
        $doc = $this->getDocumentInstance();
        $doc->setNoBackground();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertContains('--no-background', $body->flags);
    }

    /**
     * Test for setDisableExternalLinks()
     *
     * @throws JsonException
     */
    public function testSetDisableExternalLinks()
    {
        $doc = $this->getDocumentInstance();
        $doc->setDisableExternalLinks();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertContains('--disable-external-links', $body->flags);
    }

    /**
     * Test for setEnableExternalLinks()
     *
     * @throws JsonException
     */
    public function testSetEnableExternalLinks()
    {
        $doc = $this->getDocumentInstance();
        $doc->setEnableExternalLinks();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertContains('--enable-external-links', $body->flags);
    }

    /**
     * Test for setDisableForms()
     *
     * @throws JsonException
     */
    public function testSetDisableForms()
    {
        $doc = $this->getDocumentInstance();
        $doc->setDisableForms();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertContains('--disable-forms', $body->flags);
    }

    /**
     * Test for setEnableForms()
     *
     * @throws JsonException
     */
    public function testSetEnableForms()
    {
        $doc = $this->getDocumentInstance();
        $doc->setEnableForms();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertContains('--enable-forms', $body->flags);
    }

    /**
     * Test for setImages()
     *
     * @throws JsonException
     */
    public function testSetImages()
    {
        $doc = $this->getDocumentInstance();
        $doc->setImages();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertContains('--images', $body->flags);
    }

    /**
     * Test for setNoImages()
     *
     * @throws JsonException
     */
    public function testSetNoImages()
    {
        $doc = $this->getDocumentInstance();
        $doc->setNoImages();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertContains('--no-images', $body->flags);
    }

    /**
     * Test for setDisableInternalLinks()
     *
     * @throws JsonException
     */
    public function testSetDisableInternalLinks()
    {
        $doc = $this->getDocumentInstance();
        $doc->setDisableInternalLinks();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertContains('--disable-internal-links', $body->flags);
    }

    /**
     * Test for setEnableInternalLinks()
     *
     * @throws JsonException
     */
    public function testSetEnableInternalLinks()
    {
        $doc = $this->getDocumentInstance();
        $doc->setEnableInternalLinks();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertContains('--enable-internal-links', $body->flags);
    }

    /**
     * Test for setDisableJavascript()
     *
     * @throws JsonException
     */
    public function testSetDisableJavascript()
    {
        $doc = $this->getDocumentInstance();
        $doc->setDisableJavascript();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertContains('--disable-javascript', $body->flags);
    }

    /**
     * Test for setEnableJavascript()
     *
     * @throws JsonException
     */
    public function testSetEnableJavascript()
    {
        $doc = $this->getDocumentInstance();
        $doc->setEnableJavascript();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertContains('--enable-javascript', $body->flags);
    }

    /**
     * Test for setKeepRelativeLinks()
     *
     * @throws JsonException
     */
    public function testSetKeepRelativeLinks()
    {
        $doc = $this->getDocumentInstance();
        $doc->setKeepRelativeLinks();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertContains('--keep-relative-links', $body->flags);
    }

    /**
     * Test for setResolveRelativeLinks()
     *
     * @throws JsonException
     */
    public function testSetResolveRelativeLinks()
    {
        $doc = $this->getDocumentInstance();
        $doc->setResolveRelativeLinks();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertContains('--resolve-relative-links', $body->flags);
    }

    /**
     * Test for setPrintMediaType()
     *
     * @throws JsonException
     */
    public function testSetPrintMediaType()
    {
        $doc = $this->getDocumentInstance();
        $doc->setPrintMediaType();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertContains('--print-media-type', $body->flags);
    }

    /**
     * Test for setNoPrintMediaType()
     *
     * @throws JsonException
     */
    public function testSetNoPrintMediaType()
    {
        $doc = $this->getDocumentInstance();
        $doc->setNoPrintMediaType();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertContains('--no-print-media-type', $body->flags);
    }

    /**
     * Test for setDisableSmartShrinking()
     *
     * @throws JsonException
     */
    public function testSetDisableSmartShrinking()
    {
        $doc = $this->getDocumentInstance();
        $doc->setDisableSmartShrinking();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertContains('--disable-smart-shrinking', $body->flags);
    }

    /**
     * Test for setEnableSmartShrinking()
     *
     * @throws JsonException
     */
    public function testSetEnableSmartShrinking()
    {
        $doc = $this->getDocumentInstance();
        $doc->setEnableSmartShrinking();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertContains('--enable-smart-shrinking', $body->flags);
    }

    /**
     * Test for setFooterLine()
     *
     * @throws JsonException
     */
    public function testSetFooterLine()
    {
        $doc = $this->getDocumentInstance();
        $doc->setFooterLine();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertContains('--footer-line', $body->flags);
    }

    /**
     * Test for setNoFooterLine()
     *
     * @throws JsonException
     */
    public function testSetNoFooterLine()
    {
        $doc = $this->getDocumentInstance();
        $doc->setNoFooterLine();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertContains('--no-footer-line', $body->flags);
    }

    /**
     * Test for setHeaderLine()
     *
     * @throws JsonException
     */
    public function testSetHeaderLine()
    {
        $doc = $this->getDocumentInstance();
        $doc->setHeaderLine();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertContains('--header-line', $body->flags);
    }

    /**
     * Test for setNoHeaderLine()
     *
     * @throws JsonException
     */
    public function testSetNoHeaderLine()
    {
        $doc = $this->getDocumentInstance();
        $doc->setNoHeaderLine();
        $body = $this->getRequestBodyFromDoc($doc);

        $this->assertContains('--no-header-line', $body->flags);
    }

}