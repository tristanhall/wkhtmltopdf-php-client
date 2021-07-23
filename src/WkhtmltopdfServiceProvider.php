<?php

namespace MinuteMan\WkhtmltopdfClient;

use Illuminate\Support\ServiceProvider;

/**
 * Class WkhtmltopdfServiceProvider
 *
 * @package MinuteMan\WkhtmltopdfClient
 */
class WkhtmltopdfServiceProvider extends ServiceProvider
{

    /**
     * Publish the configuration file.
     *
     * @return void
     */
    public function boot(): void
    {
        $this->publishes([
            __DIR__ . '/config/minuteman_wkhtmltopdf_client.php' => $this->app->configPath('minuteman_wkhtmltopdf_client.php'),
        ]);
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register(): void
    {
        $this->app->when(ApiClient::class)
                  ->needs('$endpointUrl')
                  ->giveConfig('minuteman_wkhtmltopdf_client.endpoint_url');

        $this->app->when(ApiClient::class)
                  ->needs('$apiKey')
                  ->giveConfig('minuteman_wkhtmltopdf_client.api_key');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return [
            ApiClient::class,
            WkhtmltopdfDocument::class,
        ];
    }

}