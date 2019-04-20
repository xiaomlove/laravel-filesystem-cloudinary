<?php

namespace Chenyulingxi\LaravelFilesystem\Cloudinary\Plugins;

use League\Flysystem\Plugin\AbstractPlugin;

class FileUrl extends AbstractPlugin
{
    public function getMethod()
    {
        return 'getUrl';
    }

    public function handle($path, array $options = [])
    {
        return $this->filesystem->getAdapter()->getUrl($path, $options);
    }
}