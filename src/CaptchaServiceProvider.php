<?php

namespace Neo\LumenCaptcha;

use Neo\LumenCaptcha\Captcha;
use Illuminate\Support\ServiceProvider;

/**
 * Class CaptchaServiceProvider
 * @package Mews\Captcha
 */
class CaptchaServiceProvider extends ServiceProvider {

    /**
     * Boot the service provider.
     *
     * @return null
     */
    public function boot()
    {
        // HTTP routing
        $this->app->router->get('captcha/{type}/{captchaId}', 'Neo\LumenCaptcha\LumenCaptchaController@getCaptcha');
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        // Bind captcha
        $this->app->bind('captcha', function($app)
        {
            return new Captcha(
                $app['Illuminate\Filesystem\Filesystem'],
                $app['Illuminate\Config\Repository'],
                $app['Intervention\Image\ImageManager'],
                $app['Illuminate\Hashing\BcryptHasher'],
                $app['Illuminate\Support\Str']
            );
        });
    }

}
