<?php

namespace Spatie\Permission;

use Illuminate\Support\ServiceProvider;

class TelegramToolServiceProvider extends ServiceProvider
{
    public function boot()
    {
        //
    }

    public function register()
    {
        $this->publishes([
            __DIR__.'/config/telegramtools.php' => config_path('telegramtools.php'),
        ]);
        
    }
    
}
