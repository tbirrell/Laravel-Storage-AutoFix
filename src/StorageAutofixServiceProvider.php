<?php

namespace tbirrell\StorageAutofix;

use Illuminate\Support\ServiceProvider;

class StorageAutofixServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                FixPermissions::class,
            ]);
        }
    }
    
    public function register()
    {
        //
    }
}