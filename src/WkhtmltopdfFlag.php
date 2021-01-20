<?php

namespace MinuteMan\WkhtmltopdfClient;

use Illuminate\Support\Arr;
use Konekt\Enum\Enum;

/**
 * Class WkhtmltopdfFlag
 *
 * @package MinuteMan\WkhtmltopdfClient
 * @property bool $is_grayscale
 * @property bool $is_no_pdf_compression
 * @property bool $is_low_quality
 * @property bool $is_background
 * @property bool $is_no_background
 * @property bool $is_disable_external_links
 * @property bool $is_enable_external_links
 * @property bool $is_disable_forms
 * @property bool $is_enable_forms
 * @property bool $is_images
 * @property bool $is_noImages
 * @property bool $is_disable_internal_links
 * @property bool $is_enable_internal_links
 * @property bool $is_disable_javascript
 * @property bool $is_enable_javascript
 * @property bool $is_keep_relative_links
 * @property bool $is_resolve_relative_links
 * @property bool $is_print_media_type
 * @property bool $is_no_print_media_type
 * @property bool $is_disable_smart_shrinking
 * @property bool $is_enable_smart_shrinking
 * @property bool $is_footer_line
 * @property bool $is_no_footer_line
 * @property bool $is_header_line
 * @property bool $is_no_header_line
 * @method bool isGrayscale()
 * @method bool isNoPdfCompression()
 * @method bool isLowQuality()
 * @method bool isBackground()
 * @method bool isNoBackground()
 * @method bool isDisableExternalLinks()
 * @method bool isEnableExternalLinks()
 * @method bool isDisableForms()
 * @method bool isEnableForms()
 * @method bool isImages()
 * @method bool isNoImages()
 * @method bool isDisableInternalLinks()
 * @method bool isEnableInternalLinks()
 * @method bool isDisableJavascript()
 * @method bool isEnableJavascript()
 * @method bool isKeepRelativeLinks()
 * @method bool isResolveRelativeLinks()
 * @method bool isPrintMediaType()
 * @method bool isNoPrintMediaType()
 * @method bool isDisableSmartShrinking()
 * @method bool isEnableSmartShrinking()
 * @method bool isFooterLine()
 * @method bool isNoFooterLine()
 * @method bool isHeaderLine()
 * @method bool isNoHeaderLine()
 * @method static self GRAYSCALE()
 * @method static self NO_PDF_COMPRESSION()
 * @method static self LOW_QUALITY()
 * @method static self BACKGROUND()
 * @method static self NO_BACKGROUND()
 * @method static self DISABLE_EXTERNAL_LINKS()
 * @method static self ENABLE_EXTERNAL_LINKS()
 * @method static self DISABLE_FORMS()
 * @method static self ENABLE_FORMS()
 * @method static self IMAGES()
 * @method static self NO_IMAGES()
 * @method static self DISABLE_INTERNAL_LINKS()
 * @method static self ENABLE_INTERNAL_LINKS()
 * @method static self DISABLE_JAVASCRIPT()
 * @method static self ENABLE_JAVASCRIPT()
 * @method static self KEEP_RELATIVE_LINKS()
 * @method static self RESOLVE_RELATIVE_LINKS()
 * @method static self PRINT_MEDIA_TYPE()
 * @method static self NO_PRINT_MEDIA_TYPE()
 * @method static self DISABLE_SMART_SHRINKING()
 * @method static self ENABLE_SMART_SHRINKING()
 * @method static self FOOTER_LINE()
 * @method static self NO_FOOTER_LINE()
 * @method static self HEADER_LINE()
 * @method static self NO_HEADER_LINE()
 */
class WkhtmltopdfFlag extends Enum
{

    const GRAYSCALE = '--grayscale';
    const NO_PDF_COMPRESSION = '--no-pdf-compression';
    const LOW_QUALITY = '--low-quality';
    const BACKGROUND = '--background';
    const NO_BACKGROUND = '--no-background';
    const DISABLE_EXTERNAL_LINKS = '--disable-external-links';
    const ENABLE_EXTERNAL_LINKS = '--enable-external-links';
    const DISABLE_FORMS = '--disable-forms';
    const ENABLE_FORMS = '--enable-forms';
    const IMAGES = '--images';
    const NO_IMAGES = '--no-images';
    const DISABLE_INTERNAL_LINKS = '--disable-internal-links';
    const ENABLE_INTERNAL_LINKS = '--enable-internal-links';
    const DISABLE_JAVASCRIPT = '--disable-javascript';
    const ENABLE_JAVASCRIPT = '--enable-javascript';
    const KEEP_RELATIVE_LINKS = '--keep-relative-links';
    const RESOLVE_RELATIVE_LINKS = '--resolve-relative-links';
    const PRINT_MEDIA_TYPE = '--print-media-type';
    const NO_PRINT_MEDIA_TYPE = '--no-print-media-type';
    const DISABLE_SMART_SHRINKING = '--disable-smart-shrinking';
    const ENABLE_SMART_SHRINKING = '--enable-smart-shrinking';
    const FOOTER_LINE = '--footer-line';
    const NO_FOOTER_LINE = '--no-footer-line';
    const HEADER_LINE = '--header-line';
    const NO_HEADER_LINE = '--no-header-line';

    /**
     * Array of flags that cannot be used with another flag.
     *
     * @var array
     */
    protected static $exclusions = [
        self::BACKGROUND              => [
            self::NO_BACKGROUND,
        ],
        self::NO_BACKGROUND           => [
            self::BACKGROUND,
        ],
        self::DISABLE_EXTERNAL_LINKS  => [
            self::ENABLE_EXTERNAL_LINKS,
        ],
        self::ENABLE_EXTERNAL_LINKS   => [
            self::DISABLE_EXTERNAL_LINKS,
        ],
        self::DISABLE_FORMS           => [
            self::ENABLE_FORMS,
        ],
        self::ENABLE_FORMS            => [
            self::DISABLE_FORMS,
        ],
        self::IMAGES                  => [
            self::NO_IMAGES,
        ],
        self::NO_IMAGES               => [
            self::IMAGES,
        ],
        self::DISABLE_INTERNAL_LINKS  => [
            self::ENABLE_INTERNAL_LINKS,
        ],
        self::ENABLE_INTERNAL_LINKS   => [
            self::DISABLE_INTERNAL_LINKS,
        ],
        self::DISABLE_JAVASCRIPT      => [
            self::ENABLE_JAVASCRIPT,
        ],
        self::ENABLE_JAVASCRIPT       => [
            self::DISABLE_JAVASCRIPT,
        ],
        self::KEEP_RELATIVE_LINKS     => [
            self::RESOLVE_RELATIVE_LINKS,
        ],
        self::RESOLVE_RELATIVE_LINKS  => [
            self::KEEP_RELATIVE_LINKS,
        ],
        self::PRINT_MEDIA_TYPE        => [
            self::NO_PRINT_MEDIA_TYPE,
        ],
        self::NO_PRINT_MEDIA_TYPE     => [
            self::PRINT_MEDIA_TYPE,
        ],
        self::DISABLE_SMART_SHRINKING => [
            self::ENABLE_SMART_SHRINKING,
        ],
        self::ENABLE_SMART_SHRINKING  => [
            self::DISABLE_SMART_SHRINKING,
        ],
        self::FOOTER_LINE             => [
            self::NO_FOOTER_LINE,
        ],
        self::NO_FOOTER_LINE          => [
            self::FOOTER_LINE,
        ],
        self::HEADER_LINE             => [
            self::NO_HEADER_LINE,
        ],
        self::NO_HEADER_LINE          => [
            self::HEADER_LINE,
        ],
    ];

    /**
     * Array of "human-friendly" labels for each flag.
     *
     * @var array|string[]
     */
    protected static array $labels = [
        self::GRAYSCALE               => 'Grayscale',
        self::NO_PDF_COMPRESSION      => 'No PDF Compression',
        self::LOW_QUALITY             => 'Low Quality',
        self::BACKGROUND              => 'Background',
        self::NO_BACKGROUND           => 'No Background',
        self::DISABLE_EXTERNAL_LINKS  => 'Disable External Links',
        self::ENABLE_EXTERNAL_LINKS   => 'Enable External Links',
        self::DISABLE_FORMS           => 'Disable Forms',
        self::ENABLE_FORMS            => 'Enable Forms',
        self::IMAGES                  => 'Images',
        self::NO_IMAGES               => 'No Images',
        self::DISABLE_INTERNAL_LINKS  => 'Disable Internal Links',
        self::ENABLE_INTERNAL_LINKS   => 'Enable Internal Links',
        self::DISABLE_JAVASCRIPT      => 'Disable Javascript',
        self::ENABLE_JAVASCRIPT       => 'Enable Javascript',
        self::KEEP_RELATIVE_LINKS     => 'Keep Relative Links',
        self::RESOLVE_RELATIVE_LINKS  => 'Resolve Relative Links',
        self::PRINT_MEDIA_TYPE        => 'Print Media Type',
        self::NO_PRINT_MEDIA_TYPE     => 'No Print Media Type',
        self::DISABLE_SMART_SHRINKING => 'Disable Smart Shrinking',
        self::ENABLE_SMART_SHRINKING  => 'Enable Smart Shrinking',
        self::FOOTER_LINE             => 'Footer Line',
        self::NO_FOOTER_LINE          => 'No Footer Line',
        self::HEADER_LINE             => 'Header Line',
        self::NO_HEADER_LINE          => 'No Header Line',
    ];

    /**
     * Returns true if the current flag has 1 or more excluded flags that cannot be used with it.
     *
     * @return bool
     */
    public function hasExclusions(): bool
    {
        return count($this->getExclusions()) > 0;
    }

    /**
     * Returns the array of flags that cannot be used with the current flag.
     *
     * @return array
     */
    public function getExclusions(): array
    {
        return Arr::wrap(Arr::get(self::$exclusions, $this->value(), []));
    }

}