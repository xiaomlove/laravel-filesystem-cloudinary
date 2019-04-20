<?php

namespace Chenyulingxi\LaravelFilesystem\Cloudinary;

use Illuminate\Support\ServiceProvider;
use League\Flysystem\Filesystem;
use Chenyulingxi\LaravelFilesystem\Cloudinary\Plugins\FileUrl;

class CloudinaryStorageServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     */
    public function boot()
    {
        app('filesystem')->extend('cloudinary', function ($app, $config) {
            $adapter = new CloudinaryAdapter($config);

            $filesystem = new Filesystem($adapter);

            $filesystem->addPlugin(new FileUrl());

            return $filesystem;
        });
    }

    /**
     * Register any application services.
     */
    public function register()
    {
    }
}