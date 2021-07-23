<?php

namespace Feature;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;
use MinuteMan\WkhtmltopdfClient\ApiClient;
use MinuteMan\WkhtmltopdfClient\WkhtmltopdfDocument;
use PHPUnit\Framework\TestCase;

/**
 * Class SetAndRetrieveHtmlMarkupViewUrlTest
 *
 * @package Feature
 */
class SetAndRetrieveHtmlMarkupViewUrlTest extends TestCase
{

    /**
     * @var ApiClient
     */
    protected ApiClient $apiClient;

    /**
     * setUp()
     */
    public function setUp(): void
    {
        parent::setUp();

        $this->apiClient = new ApiClient('https://wkhtmltopdf.local/pdf');
    }

    /**
     * Test setting and retrieving HTML markup.
     */
    public function testSetRetrieveHtmlMarkup()
    {
        $str = sha1(rand());
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setHtmlMarkup($str);

        $this->assertTrue($doc->hasHtmlMarkup());
        $this->assertArrayHasKey('html_markup', $doc->getParams());
        $this->assertEquals($str, Arr::get($doc->getParams(), 'html_markup'));
    }

    /**
     * Test setting and retrieving a view.
     */
    public function testSetRetrieveView()
    {
        $str = sha1(rand());
        $view = new class($str) implements View {
            private string $str;

            public function __construct($str)
            {
                $this->str = $str;
            }

            public function render(): string
            {
                return $this->str;
            }

            public function name()
            {
                // Empty stub
            }

            public function with($key, $value = null)
            {
                // Empty stub
            }

            public function getData()
            {
                // Empty stub
            }
        };
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setView($view);

        $this->assertTrue($doc->hasView());
        $this->assertArrayHasKey('html_markup', $doc->getParams());
        $this->assertEquals($str, Arr::get($doc->getParams(), 'html_markup'));
    }

    /**
     * Test setting and retrieving a url.
     */
    public function testSetRetrieveUrl()
    {
        $url = 'https://www.google.com';
        $doc = new WkhtmltopdfDocument($this->apiClient);
        $doc->setUrl($url);

        $this->assertTrue($doc->hasUrl());
        $this->assertArrayHasKey('url', $doc->getParams());
        $this->assertEquals($url, Arr::get($doc->getParams(), 'url'));
    }

}