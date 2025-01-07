<?php

namespace Natpnk\TransIPLaravel;

use Transip\Api\Library\TransipAPI;
use Illuminate\Support\ServiceProvider;

/**
 * TransIP Service Provider
 *
 * This service provider integrates TransIP API into a Laravel application.
 * It sets up configuration, binds services, and provides access to the TransIP client.
 */
class TransIPServiceProvider extends ServiceProvider {
    
    /**
     * Perform post-registration
     *
     * This method publishes the configuration file     
     */
    public function boot(){
        
        $this->publishes([
            __DIR__.'/../config/transip.php' => config_path('transip.php'),
        ], 'config');
    }

    /**
     * Register any package services.
     *
     * This method merges the configuration file and binds the TransIP client
     * to the Laravel service container.
     */
    public function register(){
        
        $this->mergeConfigFrom(__DIR__.'/../config/transip.php', 'transip');

        $this->app->bind(TransipAPI::class, function () {
            
            $config = config('transip');
            $api = new TransipAPI(
                $config['login'],
                $config['privateKey'],
                $config['generateWhitelistOnlyTokens']
            );
            
            $api->setTestMode($config['testMode']);

            return $api;
        });

        $this->app->alias(TransipAPI::class, 'transip');
    }

    /**
     * Get the services provided by the provider.
     *
     * This method returns the services that the provider registers.
     *
     * @return array An array of service names.
     */
    public function provides(){
        return ['transip'];
    }
}