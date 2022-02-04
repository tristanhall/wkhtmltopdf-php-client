# README #

## Contribution guidelines ##

1. Update the version constant in the `ApiClient` class.
2. Update the version in `composer.json`
3. Tag the commit with the same version number.

## Requirements ##
* `php: >=7.4.0`
* `illuminate/support: >=5.0.0`
* `illuminate/validation: ^8.22`
* `guzzlehttp/guzzle: ^7.2`
* `konekt/enum: ^3.1`
* `ext-json: *`

## Installing ##

`composer require minutemanservices/wkhtmltopdf-php-client`

### Laravel Setup ###

`php artisan vendor:publish --provider=MinuteMan\WkhtmltopdfClient\WkhtmltopdfServiceProvider`

## Usage ##

### 1. Create a Document ### 

First, create a new instance of the `ApiClient` class and provide the URL of the Wkhtmltopdf microservice API and your access key.
```php
$apiClient = new MinuteMan\WkhtmltopdfClient\ApiClient($apiUrl, $apiKey);
```

Then, create an instance of `WkhtmltopdfDocument` for each PDF you want to generate.

Pass the instance of the `ApiClient` class to the PDF document instance.

```php
$pdfDocument = new MinuteMan\WkhtmltopdfClient\WkhtmltopdfDocument($apiClient);
```

### Laravel ###

In Laravel, you can create a document instance without having to create an `ApiClient` instance.

```php
$pdfDocument = app()->make(MinuteMan\WkhtmltopdfClient\WkhtmltopdfDocument::class);
```

## Publishing Changes ##
