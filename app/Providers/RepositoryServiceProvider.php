<?php

namespace App\Providers;

use App\Contracts\Api\ItemInterface;
use App\Contracts\Api\UnitInterface;
use App\Contracts\Api\UserInterface;
use App\Contracts\Api\RecordInterface;
use App\Contracts\Api\CategoryInterface;
use App\Repositories\Api\ItemRepository;
use App\Repositories\Api\UnitRepository;
use App\Repositories\Api\UserRepository;
use App\Repositories\Api\RecordRepository;
use App\Repositories\Api\CategoryRepository;
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
        $this->app->bind(UserInterface::class, UserRepository::class);
        $this->app->bind(CategoryInterface::class, CategoryRepository::class);
        $this->app->bind(ItemInterface::class, ItemRepository::class);
        $this->app->bind(UnitInterface::class, UnitRepository::class);
        $this->app->bind(RecordInterface::class, RecordRepository::class);
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return [
            UserInterface::class,
            CategoryInterface::class,
            ItemInterface::class,
            UnitInterface::class,
            RecordInterface::class,
        ];
    }
}
