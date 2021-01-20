<?php

namespace MinuteMan\WkhtmltopdfClient;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Config;
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
        $this->app->singleton(ApiClient::class, function () {
            return new ApiClient(
                Config::get('minuteman_wkhtmltopdf_client.endpoint_url', ''),
                Config::get('minuteman_wkhtmltopdf_client.api_key', '')
            );
        });

        $this->app->bind(WkhtmltopdfDocument::class, function (Application $app) {
            return new WkhtmltopdfDocument($app->make(ApiClient::class));
        });
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides(): array
    {
        return [WkhtmltopdfDocument::class];
    }

}