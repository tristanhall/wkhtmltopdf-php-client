<?php

namespace MinuteMan\WkhtmltopdfClient;

use Illuminate\Filesystem\Filesystem;
use Illuminate\Support\Arr;
use Illuminate\Translation\FileLoader;
use Illuminate\Translation\Translator;
use Illuminate\Validation\Factory;
use Konekt\Enum\Enum;

/**
 * Class PdfOption
 *
 * @package MinuteMan\WkhtmltopdfClient
 * @property bool $is_dpi
 * @property bool $is_image_dpi
 * @property bool $is_image_quality
 * @property bool $is_margin_bottom
 * @property bool $is_margin_left
 * @property bool $is_margin_top
 * @property bool $is_margin_right
 * @property bool $is_orientation
 * @property bool $is_page_width
 * @property bool $is_page_height
 * @property bool $is_page_size
 * @property bool $is_title
 * @property bool $is_encoding
 * @property bool $is_javascript_delay
 * @property bool $is_user_style_sheet
 * @property bool $is_viewport_size
 * @property bool $is_zoom
 * @property bool $is_footer_center
 * @property bool $is_footer_font_name
 * @property bool $is_footer_font_size
 * @property bool $is_footer_html
 * @property bool $is_footer_left
 * @property bool $is_footer_right
 * @property bool $is_footer_spacing
 * @property bool $is_header_center
 * @property bool $is_header_font_name
 * @property bool $is_header_font_size
 * @property bool $is_header_html
 * @property bool $is_header_left
 * @property bool $is_header_right
 * @property bool $is_header_spacing
 * @property bool $is_replace
 * @property bool $is_page_offset
 * @property bool $is_minimum_font_size
 * @method bool isDpi()
 * @method bool isImageDpi()
 * @method bool isImageQuality()
 * @method bool isMarginBottom()
 * @method bool isMarginLeft()
 * @method bool isMarginTop()
 * @method bool isMarginRight()
 * @method bool isOrientation()
 * @method bool isPageWidth()
 * @method bool isPageHeight()
 * @method bool isPageSize()
 * @method bool isTitle()
 * @method bool isEncoding()
 * @method bool isJavascriptDelay()
 * @method bool isUserStyleSheet()
 * @method bool isViewportSize()
 * @method bool isZoom()
 * @method bool isFooterCenter()
 * @method bool isFooterFontName()
 * @method bool isFooterFontSize()
 * @method bool isFooterHtml()
 * @method bool isFooterLeft()
 * @method bool isFooterRight()
 * @method bool isFooterSpacing()
 * @method bool isHeaderCenter()
 * @method bool isHeaderFontName()
 * @method bool isHeaderFontSize()
 * @method bool isHeaderHtml()
 * @method bool isHeaderLeft()
 * @method bool isHeaderRight()
 * @method bool isHeaderSpacing()
 * @method bool isReplace()
 * @method bool isPageOffset()
 * @method bool isMinimumFontSize()
 * @method static self DPI()
 * @method static self IMAGE_DPI()
 * @method static self IMAGE_QUALITY()
 * @method static self MARGIN_BOTTOM()
 * @method static self MARGIN_LEFT()
 * @method static self MARGIN_TOP()
 * @method static self MARGIN_RIGHT()
 * @method static self ORIENTATION()
 * @method static self PAGE_WIDTH()
 * @method static self PAGE_HEIGHT()
 * @method static self PAGE_SIZE()
 * @method static self TITLE()
 * @method static self ENCODING()
 * @method static self JAVASCRIPT_DELAY()
 * @method static self USER_STYLE_SHEET()
 * @method static self VIEWPORT_SIZE()
 * @method static self ZOOM()
 * @method static self FOOTER_CENTER()
 * @method static self FOOTER_FONT_NAME()
 * @method static self FOOTER_FONT_SIZE()
 * @method static self FOOTER_HTML()
 * @method static self FOOTER_LEFT()
 * @method static self FOOTER_RIGHT()
 * @method static self FOOTER_SPACING()
 * @method static self HEADER_CENTER()
 * @method static self HEADER_FONT_NAME()
 * @method static self HEADER_FONT_SIZE()
 * @method static self HEADER_HTML()
 * @method static self HEADER_LEFT()
 * @method static self HEADER_RIGHT()
 * @method static self HEADER_SPACING()
 * @method static self REPLACE()
 * @method static self PAGE_OFFSET()
 * @method static self MINIMUM_FONT_SIZE()
 */
class PdfOption extends Enum
{

    const DPI = '--dpi';
    const IMAGE_DPI = '--image-dpi';
    const IMAGE_QUALITY = '--image-quality';
    const MARGIN_BOTTOM = '--margin-bottom';
    const MARGIN_LEFT = '--margin-left';
    const MARGIN_TOP = '--margin-top';
    const MARGIN_RIGHT = '--margin-right';
    const ORIENTATION = '--orientation';
    const PAGE_WIDTH = '--page-width';
    const PAGE_HEIGHT = '--page-height';
    const PAGE_SIZE = '--page-size';
    const TITLE = '--title';
    const ENCODING = '--encoding';
    const JAVASCRIPT_DELAY = '--javascript-delay';
    const USER_STYLE_SHEET = '--user-style-sheet';
    const VIEWPORT_SIZE = '--viewport-size';
    const ZOOM = '--zoom';
    const FOOTER_CENTER = '--footer-center';
    const FOOTER_FONT_NAME = '--footer-font-name';
    const FOOTER_FONT_SIZE = '--footer-font-size';
    const FOOTER_HTML = '--footer-html';
    const FOOTER_LEFT = '--footer-left';
    const FOOTER_RIGHT = '--footer-right';
    const FOOTER_SPACING = '--footer-spacing';
    const HEADER_CENTER = '--header-center';
    const HEADER_FONT_NAME = '--header-font-name';
    const HEADER_FONT_SIZE = '--header-font-size';
    const HEADER_HTML = '--header-html';
    const HEADER_LEFT = '--header-left';
    const HEADER_RIGHT = '--header-right';
    const HEADER_SPACING = '--header-spacing';
    const REPLACE = '--replace';
    const PAGE_OFFSET = '--page-offset';
    const MINIMUM_FONT_SIZE = '--minimum-font-size';

    /**
     * Array of validation rules that apply for each option.
     *
     * @var array|string[][]
     */
    protected static array $validationRules = [
        self::DPI               => [
            'integer',
            'min:0',
        ],
        self::IMAGE_DPI         => [
            'integer',
            'min:0',
        ],
        self::IMAGE_QUALITY     => [
            'integer',
            'min:0',
        ],
        self::MARGIN_BOTTOM     => [
            'string',
        ],
        self::MARGIN_LEFT       => [
            'string',
        ],
        self::MARGIN_TOP        => [
            'string',
        ],
        self::MARGIN_RIGHT      => [
            'string',
        ],
        self::ORIENTATION       => [
            'string',
        ],
        self::PAGE_WIDTH        => [
            'string',
        ],
        self::PAGE_HEIGHT       => [
            'string',
        ],
        self::PAGE_SIZE         => [
            'string',

        ],
        self::TITLE             => [
            'string',
        ],
        self::ENCODING          => [
            'string',
        ],
        self::JAVASCRIPT_DELAY  => [
            'numeric',
        ],
        self::USER_STYLE_SHEET  => [
            'string',
        ],
        self::VIEWPORT_SIZE     => [
            'string',
        ],
        self::ZOOM              => [
            'numeric',
        ],
        self::FOOTER_CENTER     => [
            'string',
        ],
        self::FOOTER_FONT_NAME  => [
            'string',
        ],
        self::FOOTER_FONT_SIZE  => [
            'integer',
            'min:0',
        ],
        self::FOOTER_HTML       => [
            'string',
        ],
        self::FOOTER_LEFT       => [
            'string',
        ],
        self::FOOTER_RIGHT      => [
            'string',
        ],
        self::FOOTER_SPACING    => [
            'integer',
        ],
        self::HEADER_CENTER     => [
            'string',
        ],
        self::HEADER_FONT_NAME  => [
            'string',
        ],
        self::HEADER_FONT_SIZE  => [
            'integer',
            'min:0',
        ],
        self::HEADER_HTML       => [
            'string',
        ],
        self::HEADER_LEFT       => [
            'string',
        ],
        self::HEADER_RIGHT      => [
            'string',
        ],
        self::HEADER_SPACING    => [
            'integer',
        ],
        self::REPLACE           => [
            'array',
        ],
        self::PAGE_OFFSET       => [
            'integer',
        ],
        self::MINIMUM_FONT_SIZE => [
            'integer',
            'min:0',
        ],
    ];

    /**
     * Array of "human-friendly" labels for each option.
     *
     * @var array|string[]
     */
    protected static array $labels = [
        self::DPI               => 'Page DPI',
        self::IMAGE_DPI         => 'Embedded Image DPI',
        self::IMAGE_QUALITY     => 'JPEG Compression Quality',
        self::MARGIN_BOTTOM     => 'Page Bottom Margin',
        self::MARGIN_LEFT       => 'Page Left Margin',
        self::MARGIN_TOP        => 'Page Top Margin',
        self::MARGIN_RIGHT      => 'Page Right Margin',
        self::ORIENTATION       => 'Page Orientation',
        self::PAGE_WIDTH        => 'Page Width',
        self::PAGE_HEIGHT       => 'Page Height',
        self::PAGE_SIZE         => 'Paper Size',
        self::TITLE             => 'Document Title',
        self::ENCODING          => 'Default Text Encoding',
        self::JAVASCRIPT_DELAY  => 'Javascript Delay (milliseconds)',
        self::USER_STYLE_SHEET  => 'User Style Sheet',
        self::VIEWPORT_SIZE     => 'Viewport Size',
        self::ZOOM              => 'Zoom Factor',
        self::FOOTER_CENTER     => 'Center Footer Text',
        self::FOOTER_FONT_NAME  => 'Footer Font Name',
        self::FOOTER_FONT_SIZE  => 'Footer Font Size',
        self::FOOTER_HTML       => 'Footer HTML',
        self::FOOTER_LEFT       => 'Left Footer Text',
        self::FOOTER_RIGHT      => 'Right Footer Text',
        self::FOOTER_SPACING    => 'Footer Spacing',
        self::HEADER_CENTER     => 'Center Header Text',
        self::HEADER_FONT_NAME  => 'Header Font Name',
        self::HEADER_FONT_SIZE  => 'Header Font Size',
        self::HEADER_HTML       => 'Header HTML',
        self::HEADER_LEFT       => 'Left Header Text',
        self::HEADER_RIGHT      => 'Right Header Text',
        self::HEADER_SPACING    => 'Header Spacing',
        self::REPLACE           => 'Replace Header/Footer Text',
        self::PAGE_OFFSET       => 'Page Number Offset',
        self::MINIMUM_FONT_SIZE => 'Minimum Font Size',
    ];

    /**
     * Returns true if the current option has 1 or more validation rules.
     *
     * @return bool
     */
    public function hasExclusions(): bool
    {
        return count($this->getValidationRules()) > 0;
    }

    /**
     * Returns the array of validation rules that apply to the current option.
     *
     * @return array
     */
    public function getValidationRules(): array
    {
        return Arr::wrap(Arr::get(self::$validationRules, $this->value(), []));
    }

    /**
     * Returns true if the value provided passes the validation rules for the current option.
     *
     * @param mixed $value
     * @return bool
     */
    public function isValidValue($value): bool
    {
        // Create translator instance for validation messages
        $langPath = sprintf('%s/resources/lang', __DIR__);
        $translator = new Translator(new FileLoader(new Filesystem, $langPath), 'en');

        // Create the validator
        $validator = (new Factory($translator))->make([
            'value' => $value,
        ], [
            'value' => $this->getValidationRules(),
        ]);

        // Return true if validation is not failing
        return $validator->fails() === false;
    }

}