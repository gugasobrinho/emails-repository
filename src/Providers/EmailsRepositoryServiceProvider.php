<?php

namespace GugaSobrinho\EmailsRepository\Providers;

use Illuminate\Support\ServiceProvider;

class EmailsRepositoryServiceProvider extends ServiceProvider
{
    public function register()
    {}

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../database/migrations'
            => base_path('database/migrations'),
        ], 'migrations');
    }
}
