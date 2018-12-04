<?php

namespace App\Providers;

use App\Contracts\Api\ItemInterface;
use App\Contracts\Api\UserInterface;
use App\Repositories\Api\ItemRepository;
use App\Repositories\Api\UserRepository;
use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(ItemInterface::class, ItemRepository::class);
        $this->app->bind(UserInterface::class, UserRepository::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            ItemInterface::class,
            UserInterface::class,
        ];
    }
}
