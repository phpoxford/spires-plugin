<?php
declare(strict_types=1);

namespace YourNamespace\Spires\PluginName;

class ServiceProvider extends \Spires\Core\ServiceProvider
{
    /**
     * (Optional) Define config keys with their default values.
     *
     * @return array
     */
    public function config()
    {
        return [];
    }

    /**
     * (Optional) Register the service provider.
     *
     * @return void
     */
//    public function register()
//    {
//        //
//    }

    /**
     * (Optional) Boot the service provider.
     * Parameters are resolved through the container.
     *
     * @return void
     */
//    public function boot()
//    {
//        //
//    }

    /**
     * Plugins provided.
     *
     * @return string[]
     */
    public function plugins()
    {
        return [
            Plugin::class
        ];
    }
}
