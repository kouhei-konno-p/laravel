<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            \App\Repositories\Visitor\VisitorRepositoryInterface::class,
            \App\Repositories\Visitor\VisitorQueryRepository::class
        );
        $this->app->bind(
            \App\Repositories\Services\ServicesRepositoryInterface::class,
            \App\Repositories\Services\ServicesQueryRepository::class
        );
        $this->app->bind(
            \App\Repositories\Mypage\MypageRepositoryInterface::class,
            \App\Repositories\Mypage\MypageQueryRepository::class
        );
        $this->app->bind(
            \App\Repositories\Message\MessageRepositoryInterface::class,
            \App\Repositories\Message\MessageQueryRepository::class
        );
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
