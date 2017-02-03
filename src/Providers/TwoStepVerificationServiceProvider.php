<?php

namespace Utkarsh\TwoStepVerification\Providers;

use Illuminate\Support\Facades\App;
use Illuminate\Support\ServiceProvider;
use Utkarsh\TwoStepVerification\Classes\Authenticator;

class TwoStepVerificationServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('TwoStepVerification', function()
        {
            return new Utkarsh\TwoStepVerification\Classes\Authenticator;
        });
    }
}
