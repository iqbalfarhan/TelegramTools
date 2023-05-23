<?php

namespace Iqbalfarhan08\Telegramtools;

use Illuminate\Support\ServiceProvider;

class TelegramToolServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->publishConfig();
    }

    public function register()
    {
       //
    }

    protected function publishConfig()
    {
        $this->publishes([
            __DIR__.'/config/telegramtools.php' => config_path('telegramtools.php'),
        ], 'telegramtool_config');
    }
    
}
